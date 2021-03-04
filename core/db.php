<?php
class Conexio{

    public static function conectar(){
       $cnx = new mysqli('localhost','root','','php_m8');
       $cnx->set_charset('utf8');
       return $cnx;
       mysqli_close($cnx);
    }
}