<?php
require_once "prodotti.php";
class toys extends Products
{

    public $Description;
    public $Typology;

    function __construct($_name, $_prezzo, $_description, $_typology)
    {
        parent::__construct($_name, $_prezzo);

        $this->setDescription($_description);
        $this->setTypology($_typology);
    }

    public function getDescription()
    {
        return $this->description;
    }


    public function setDescription($description): self
    {
        $this->description = $description;

        return $this;
    }


    public function getTypology()
    {
        return $this->Typology;
    }


    public function setTypology($Typology): self
    {
        $this->Typology = $Typology;

        return $this;
    }
}
