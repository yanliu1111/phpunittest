<?php
namespace App\Support;
class Collection {

    protected $items;
    //build a constructor
    public function __construct($item)
    {
        $this->items = $item;
    }
    //function return collection data.
    public function getData(){
       $data = [];
       foreach($this->items as $item){
           $data[] = $item;
       }
         return $data;
    }
}
?>