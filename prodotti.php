<?php
class Products
{

    public $Name;
    public $Prezzo;

    function __construct($_name, $_prezzo)
    {
        $this->setName($_name);
        $this->setPrezzo($_prezzo);
    }

    public function getPrezzo()
    {
        return $this->Prezzo;
    }

    public function setPrezzo($Prezzo): self
    {
        $this->Prezzo = $Prezzo;

        return $this;
    }

    public function getName()
    {
        return $this->Name;
    }


    public function setName($Name): self
    {
        $this->Name = $Name;

        return $this;
    }
}
