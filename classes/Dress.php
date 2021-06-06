
<?php
/**
 * CLASS DRESS
 */


class Dress extends Product{
    // Attributes
    protected $code;
    public $category;

    // Construct
    public function __construct($_name, $_description, $_price, $_color, $_size, $_code, $_category = 'VESTITI'){
         parent::__construct($_name, $_description, $_price, $_color, $_size);
         $this->code = $_code;
         $this->category = $_category;

    }

    //methods
    public function getCode(){
         echo $this->code;
    }

   
}

$dress1 = new Dress('TUBINO DRAPPEGGIATO','VESTITO CON SCOLLO DRITTO E SPALLINE SOTTILI REGOLABILI. DETTAGLIO DI TESSUTO DRAPPEGGIATO. ORLO CON SPACCO', '39,95 EUR', 'Blu elettrico','XS,S,M,L,XL','45674');
$dress2 = new Dress (' MISTO SETA CON RICAMI', 'VESTITO REALIZZATO IN TESSUTO MISTO SETA. SCOLLO A V E SPALLINE. DETTAGLIO DI RICAMI COMBINATI.', '129,00 EUR', ' Verde turchese', 'S,M,L', '65676');
$dress3 = new Dress ('VESTITO DI SETA A FIORI', 'VESTITO REALIZZATO IN 100% SETA DI GELSO. SCOLLO A V E SPALLINE SOTTILI CON FIOCCO POSTERIORE. DETTAGLIO DI VOLANT.', '69,95 EUR', 'Rosa', 'S,M,L', '98760');
$dress4 = new Dress('VESTITO CUT OUT','VESTITO CORTO CON SCOLLO A V INCROCIATO E SPALLINE SOTTILI REGOLABILI', '29,95 EUR', 'Lime', 'XS,S,M,L,XL','35462');

$dresses[] = $dress1;
$dresses[] = $dress2;
$dresses[] = $dress3;
$dresses[] = $dress4;
// var_dump($dresses);
?>