<?php
class car
{
    private $name;
    private $color;
    private $weight;
    
    function __construct($pname, $pcolor, $pweight)
    {
        $this->name = $pname;
        $this->color = $pcolor;
        $this->weight = $pweight;
    }

    public function giveCarName()
    {
        return $this->name;
    }    
    public function giveCarColor()
    {
        return $this->color;
    }  
    public function giveCarWeight()
    {
        return $this->weight;
    }  
        
}

$renault = new car("Renault", "Black", 3000);
echo $renault->giveCarName() . " " . $renault->giveCarColor() . " " . $renault->giveCarWeight();

echo "<BR>";

$bmw = new car("BMW", "Green", 4000);
echo $bmw->giveCarName() . " " . $bmw->giveCarColor() . " " . $bmw->giveCarWeight();

echo "<BR>";

class raceauto extends car
{
    private $turbo;
    
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

$vroom = new raceauto("Bugatti", "Red", 3500, "TXS-8B");
echo $vroom->giveCarName() . " " . $vroom->giveCarColor() . " " . $vroom->giveCarWeight() . " " . $vroom->giveCarTurbo();



?>