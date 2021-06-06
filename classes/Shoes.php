<?php
/**
 * CLASS SHOES
 */


class Shoes extends Product{
    // Attributes
    protected $code;
    public $category;

     // Construct
     public function __construct($_name, $_description, $_price, $_color, $_size, $_code, $_category = 'SCARPE'){
          parent::__construct($_name, $_description, $_price, $_color, $_size);
          $this->code = $_code;
          $this->category = $_category;
 
     }

     //methods
    public function getCode(){
     echo $this->code;
   }

}


$shoe1= new Shoes('SANDALI BASSI IN PELLE CON FASCETTE','SCARPE BASSE TIPO SANDALI IN PELLE DISPONIBILI IN DIVERSI COLORI. TOMAIA IN PELLE CON INFRADITO. MODELLO A PUNTA', '49,95 EUR', 'Bianco écru','35,36,37,38,39', 'R5567');
$shoe2 = new Shoes('SANDALI BASSI CON FRANGE','SCARPE BASSE TIPO SANDALI COLOR ÉCRU. FRANGE SULLA TOMAIA CON DETTAGLI METALLIZZATI', '29,95 EUR', 'Bianco écru', '35,36,37,38,39,40', 'R3241');
$shoe3 = new Shoes('SANDALI IN PELLE CON ALLACCIATURA E IMPUNTURE', 'SCARPE BASSE TIPO SANDALI IN PELLE DORATI. FASCETTE SOTTILI IN PELLE CON INFRADITO. DETTAGLIO DI IMPUNTURE', '39,95 EUR', 'Oro', '35,36,37,38,39,40', 'R9996');
$shoe4 = new Shoes('SANDALI CON PLATEAU IN PELLE CON FIBBIA', 'SCARPE TIPO SANDALI IN PELLE CON PLATEAU DI COLORE BEIGE. TOMAIA COMPOSTA DA FASCETTE IN PELLE. ALTEZZA DELLA SUOLA 4,5 CM.', '59,95 EUR', 'Beige', '37,38,39', 'R1000');

$shoes[] = $shoe1;
$shoes[] = $shoe2;
$shoes[] = $shoe3;
$shoes[] = $shoe4;

?>