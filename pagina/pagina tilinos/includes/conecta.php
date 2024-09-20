<?php

$Servidor ="localhost";
$Usuarios ="root";
$Password =" ";
$BD = "msc";


$Conecta =new mysqli($Servidor,$Usuarios,$Password,$BD);

if($Conecta->connect_error){
    die("Error".$Conecta->connect_error);
}
?>