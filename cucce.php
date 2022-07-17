<?php
class Cucce extends Products
{

    private $size;

    function __construct($_size, $_name, $_prezzo, $_description)
    {
        parent::__construct($_name, $_prezzo, $_description);
        $this->setSize($_size);
    }

    public function getSize()
    {
        return $this->size;
    }


    public function setSize($size): self
    {
        $this->size = $size;

        return $this;
    }
}
