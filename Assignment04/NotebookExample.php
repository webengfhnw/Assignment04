<?php

class Notebook
{

    private $vendor;
    private $type;
    private $price;

    public function __construct($vendor, $type, $price)
    {
        $this->vendor = $vendor;
        $this->type = $type;
        $this->price = $price;
    }

    public function __destruct()
    {
        echo "Notebook " . $this->type . " deleted!" . "<br/>";
    }

    public function getVendor()
    {
        return $this->vendor;
    }

    public function setVendor($vendor)
    {
        $this->vendor = $vendor;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function showallNotebookInformation()
    {
        echo "Vendor: " . $this->vendor . "<br/>";
        echo "Type: " . $this->type . "<br/>";
        echo "Price: " . $this->price . "<br/>";
        echo "<br/>";
    }

    public function __toString()
    {
        $erg = "Vendor: $this->vendor <br/> Typ: $this->type <br/> Price: $this->price <br/><br/>";
        return $erg;
    }

    public function __clone()
    {
        $this->type = "";
        $this->price = 0;
    }

}

$myLaptop1 = new Notebook('HP', 'HP EliteBook 840 G1', 1000);
$myLaptop2 = new Notebook('HP', 'HP ProBook 640 G1', 700);
$myLaptop3 = new Notebook('HP', 'HP Pavilion 13-a100 x360', 500);

$myLaptop1->showallNotebookInformation();
$myLaptop2->showallNotebookInformation();
$myLaptop3->showallNotebookInformation();

echo $myLaptop1;
echo $myLaptop2;
echo $myLaptop3;

$myLaptop1->setPrice(900);
$myLaptop1->showallNotebookInformation();

$myLaptop4 = clone $myLaptop3;
echo $myLaptop4;