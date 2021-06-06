<?php 
require_once __DIR__ . '/Dress.php';
require_once __DIR__ . '/Shoes.php';
/**
 * CLASS PRODUCT
 */

class Product{
     
     // Attributes
      public $name;
      protected $description;
      protected $price;
      protected $color;
      protected $size;


      // Construct
      public function __construct($_name, $_description, $_price, $_color, $_size){
          $this->name = $_name;
          $this->description = $_description;
          $this->price = $_price;
          $this->color = $_color;
          $this->size = $_size;
         
               
      }

      // Methods

      public function getDescription(){
           return $this->description;
     }

     protected function Price(){
          return $this->price;
     }

     public function getPrice(){
          return $this->Price();
     }

     public function getColor(){
          return $this->color;
     }

     public function getSize(){
         return $this->size;
     }

    
     
     
     
 }







