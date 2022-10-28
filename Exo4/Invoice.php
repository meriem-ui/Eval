<?php
class Invoice {
    public function __construct( )
    {
        $this->Apayer = array();
    }
    public function add(Payable $p)
    {
        $this->Apayer[]=$p;
       
}
}