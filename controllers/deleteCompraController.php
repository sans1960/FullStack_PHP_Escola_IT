<?php
require '../core/db.php';
require_once '../core/Taula.php';
$id=$_GET['id'];
$compra = new Taula;
$compra->delete_compra($id);
// $datos=new Taula();
// $datos->delete_compra($id);
 header('location:../index.php');
?>