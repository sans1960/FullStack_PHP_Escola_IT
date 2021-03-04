<?php
require '../core/db.php';
require_once '../core/Taula.php';
$id=$_GET['id'];
$compra=new Taula();
$row=$compra->get_producte($id);
require_once '../vistas/veurelacompra.php';

?>