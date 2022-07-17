<?php

class UserPayment
{

    protected $CardNumber;
    protected $ExpDate;

    public function __construct($_cardNumber, $_expDate)
    {
        $this->setCardNumber($_cardNumber);
        $this->setExpDate($_expDate);
    }

    public function getCardNumber()
    {
        return $this->cardNumber;
    }

    public function setCardNumber($cardNumber)
    {
        $this->cardNumber = $cardNumber;

        return $this;
    }

    public function getExpDate()
    {
        return $this->expDate;
    }

    public function setExpDate($_expDate)
    {
        $cardDate = DateTime::createFromFormat('m/y', $_expDate);
        $dateNow = new DateTime('now');
        if ($cardDate > $dateNow) {
            $this->ExpDate = $_expDate;
        }

        return $this;
    }
}
