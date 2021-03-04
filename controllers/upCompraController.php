<?php
require '../core/db.php';
require_once '../core/Taula.php';
$id=$_POST['id'];

 $nom=$_POST['nom'];
 $quantitat=$_POST['quantitat'];
 $preu=$_POST['preu'];
 $subtotal=$_POST['subtotal'];
 $compras = new Taula();
 $compras->up_compra($id,$nom,$quantitat,$preu,$subtotal);
 


  header('location:../index.php');
?>