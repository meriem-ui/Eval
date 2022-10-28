<?php
  class Item{
    /**
    
    * @var String
    */

 private $Name;
/**
  
 
 *@var Long
 */
 private $Price;

 public function __construct($name,$price){
    $this->Name = $name;
    $this->price = $price;
 }

 /**
  *@return String 
   */    
  public function getName()
  {
    return $this->Name;

  } 
  /**
  *@return Long 
   */    
  public function getPrice()
  {
    return $this->getPrice();

  } 
     
      
    
       
}
Function print2($item){
    $string = $item->getName(). ": ".$item->getPrice(). " €";
    print($string);
}
$item = new Item("corn flakes" , 500);
print2($item);
$chewingGum = new Item ("chewing gum" ,403);
print2($chewingGum);
