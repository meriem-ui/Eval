<?php
class Ticket extends Item{
    private string $reference;
    private long $price;
    public function __construct($reference,$price)
    {
        $this->Reference=$reference;
        $this->Price=$price;
    } 
    /**  @return String */
     public function getRefernece(){return $this->Reference;}

     /** @return long  */
     public function getPrice(){return $this->Price;}
} 
