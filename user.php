<?php
require_once "prodotti.php";
class User
{
    private $FullName;
    private $Email;
    private $registered;
    private $discount;
    private $cart = [];
    private $UserPaymentMethod;



    function __construct($_fullname, $_email, $_registered)
    {
        $this->setFullName($_fullname);
        $this->setEmail($_email);
        $this->setRegistered($_registered);
    }

    public function getFullName()
    {
        return $this->FullName;
    }

    public function setFullName($FullName): self
    {
        $this->FullName = $FullName;

        return $this;
    }

    public function getEmail()
    {
        return $this->Email;
    }

    public function setEmail($Email): self
    {
        $this->Email = $Email;

        return $this;
    }

    public function getRegistered()
    {
        return $this->registered;
    }

    public function setRegistered($_registered)
    {
        if ($_registered === true) {
            $this->discount = 0.2;
            echo "<h1>L'utente è registrato correttamente</h1>";
        } else {
            $this->discount = 0;
            throw new Exception("L'utente non è registrato correttamente");
        }
    }

    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount($discount): self
    {
        $this->discount = $discount;

        return $this;
    }


    public function getCart()
    {
        return $this->cart;
    }


    public function setCart($product): self
    {
        if ($product instanceof Products)
            $this->cart[] = $product;
        return $this;
    }


    public function getUserPaymentMethod()
    {
        return $this->UserPaymentMethod;
    }


    public function setUserPaymentMethod($UserPaymentMethod): self
    {

        if ($UserPaymentMethod instanceof UserPayment) {
            $this->UserPaymentMethod = $UserPaymentMethod;
        }

        return $this;
    }
}
