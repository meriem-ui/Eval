<?php
class FreshItem extends Item{
    private string $bestBeforeDate;

public function  __construct($name,$price,$weight,$date)
{
    parent::__construct($name,$price,$weight);
    $this->bestBeforeDate = date('Y-m-y' ,strotime($date));
}
public function toString(){
    return "data limite : ".$this->bestBeforeDate." ".parent::getName().": ".parent::getPrice(). "
}

}