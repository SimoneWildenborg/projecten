<?php
class car
{
    public $name;
    public $color;
    public $weight;
    
    function __construct($pname, $pcolor, $pweight)
    {
        $this->name = $pname;
        $this->color = $pcolor;
        $this->weight = $pweight;
    }
            
}

$renault = new car("Renault", "Black", 3000);
$volvo = new car("Volvo", "Red", 2400);
$bmw = new car("BMW", "Green", 4000);
$vroom = new raceauto("Bugatti", "Red", 3500, "TXS-8B");

$autos = array($renault, $volvo, $bmw, $vroom);

foreach($autos as $auto){
    echo $auto->name . " " . $auto->color . " " . $auto->weight;
    if ($auto instanceof raceauto) {
        echo  " " . $auto->turbo;
    }
    echo "<BR>";
    }

class raceauto extends car
{
    public $turbo;
    
    function __construct($pname, $pcolor, $pweight, $pturbo)
    {
        parent::__construct($pname, $pcolor, $pweight);
        $this->turbo = $pturbo;
    }
    public function giveCarTurbo()
    {
        return $this->turbo;
    }
}

?>