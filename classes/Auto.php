
<?php
class Auto
{
    private $merk;
    private $model;
    public $kleur ;
    public $kenteken;
    protected $jaar;
    private $prijs;
    public function __construct($merk, $model, $kleur)
    {
        $this->merk = $merk;
        $this->model = $model;
        $this->kleur = $kleur;
    }

    public function getKenteken()
    {
        return $this->kenteken;
    }


    public function setKenteken($kenteken):void
    {
        $this->kenteken = $kenteken;
    }


    public function getMerk()
    {
        return $this->merk;
    }

    public function getModel()
    {
        return $this->model;
    }


    public function getKleur()
    {
        return $this->kleur;
    }


    public function getPrijs()
    {
        return $this->prijs;
    }


    public function setPrijs($prijs): void
    {
        $this->prijs = $prijs;
    }


}

?>
