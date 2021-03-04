<?php
require 'core/db.php';
require 'core/Taula.php';
$productes = new Taula();
$compres = $productes->get_productes();
$sumes = new Taula();
$suma = $sumes->sumaSubtotal();
require_once  'vistas/veureCompres.php';
?>