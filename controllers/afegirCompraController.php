<?php
require '../core/db.php';
require_once '../core/Taula.php';
$nom=$_POST['nom'];
$quantitat=$_POST['quantitat'];
$preu=$_POST['preu'];
$subtotal=$_POST['subtotal'];
$compra = new Taula();
$compra->set_compres($nom,$quantitat,$preu,$subtotal);


 header('location:../index.php');
?>