<?php
/**
 * CLASS USER
 */

 class User {
     // Attributes
     protected $name;
     protected $lastname;
     protected $age;
     protected $sale;


    // Constructor
    public function __construct($_name, $_lastname, $_age ,$_sale = '0'){
        $this->name = $_name;
        $this->lastname = $_lastname;
        $this->age = $_age;
        $this->sale = $_sale;
    }

    //Methods
     public function getName(){
         return $this->name;
     }

     public function getLastname(){
         return $this->lastname;
     }

     protected function calcSale(){
         if ($this->age > '18'  &&  $this->age < '45'){
            $this->sale = '30';
         } else {
            $this->sale = '10';
         }
         return $this->sale;
     }

     public function getSale(){
         return $this->calcSale();
     }

 }


 $user1 = new User('Marta', 'Bernardo', '26');
 $user2 = new User('Giada', 'Rossi', '50');
 $user2 = new User('Luca', 'Verdi', '14');

   
