<?php
if ($index == false) {
  include_once "../includes/php_conexion.php";
} else {
  include_once "includes/php_conexion.php";
}
/* we include the file that allows the connection to the database */   
class Persona extends Conexion
{
// we create the class Person     
    var $contrasena;
    var $email;
    var $nombre;
    var $doc;
    var $tipo;
    var $tel;
    var $fec_nac;
    var $sexo;
    var $estudios;
    var $condiciones;
    var $face;
    // we create the variables of the function     
    public function __construct()
    {
    }
    // we create the contructor method of the class

}
