<?php
require_once "prodotti.php";
require_once "toys.php";
require_once "cucce.php";
require_once "payment.php";
require_once "user.php";


$Snack = new Products("bastoncini di carne", 10);
$CrocchetteCani = new Products("Crocchette", 20);


$DogToy1 = new toys("corda", 10, "corda per cani", "fibra");
$DogToy2 = new toys("pallina", 5, "pallina per cani", "gomma");


$DogKennel = new Cucce("cuccia", "", 10, "cuccia per cani");

$user = new User("fabio rossi", "fabiorossi@gmail.com", true);
$user2 = new User("giorgio bianchi", "giorgiobianchi@gmail.com", true);

$user->setCart($Snack);

$user2->setCart($CrocchetteCani);

$user->setUserPaymentMethod(new UserPayment("546465645", 4 - 32));
$user2->setUserPaymentMethod(new UserPayment("435435435", 7 - 30));
