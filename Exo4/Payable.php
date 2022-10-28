<?php
class Payable {
     /**
      * @var long
       */ 
      private $Tax;
      private $Item
      public function __construct($Item)

      {
        $this-> Item=$item;
        switch(get_class($Item)){
            case"Ticket" :
                $this->Tax=25;
                brak;
                case "Item" :
                    $this->Tax=10;
                    break;
                    case"FreshItem":
                        $this->Tax 10-0.1*intdiv($item->getWeight(),1000);
                        break;
                    }

        }

      }
