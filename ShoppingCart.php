<?php
require_once
class ShoppingCart extends Item{
    private int $id;
    private int $weight;
    private $panier = array();

    public function __construct($id, $weight)
    {
         $this->setWeight($weight);
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        $weight = $this->weight;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $id = $this->id;
    }

    public function addItem($item, array $panier)
    {
        if($item->getWeight() > 10000)
        {
            return "Vous ne pouvez pas ajouter ce produit, il est trop lourd";
        }
        $error = $this->checkWeight($panier);
        if(null !== $error)
        {
            throw new Exception('Panier complet, vous devez retirer des produits');
        }
        array_push($panier, $item);
        

        print("Vous avez ajouter le produit " . $item . " à votre Panier");
        return $panier;
    }

    public function removeItem($itemName, array $panier)
    {
        if(!in_array($itemName, $panier))
        {
            print("L'élement " . $itemName . " n'est pas dans votre panier");
        } else {
            $key = array_search($itemName, $panier);
            unset($panier[$key]);
        }
    }

    public function itemCount(array $panier)
    {
        return (count($panier));
    } 

     public function totalPrice(array $panier)
    {
         $totalPrice = 0;

         foreach ($panier as $produit) {
             $totalPrice = $totalPrice + $produit->getPrice();
        }
         return $totalPrice;
    }

    public function checkWeight(array $panier) {
        $totalWeight = 0;
        foreach ($panier as $produit) {
            $totalWeight = $totalWeight + $produit->getWeight();
            if($totalWeight > 10000) 
            {
                return 1;
            } else {
                return null;
            }
        }
    }

    public function toString($panier)
    {
        $result = array();
        $result['id'] = $panier->getId();
        $result['quantité'] = $panier->itemCount();
        
        print("Votre panier n°" . $result['id'] . " contient " . $result['quantité'] . ". Vos produits sont : <br>");
        foreach ($panier as $element) {
            print($element->getName() . " " . $element->getPrice() . " €");
        }
    }

}