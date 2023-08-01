<?php
//AP A DECLARAR Y CONCATENAR VARIABLES

//definir variables
$nombre = "Cris";

$url = "www.google.com";

echo $nombre.", ". $url;

echo "<br/>";

//VARIABLES DE TIPO ENTERO

$estatura = 1.73;

echo "Estatura:". " ". $estatura;

//sumar dos valores
echo "<br/>";

$num1 = 10;
$num2 = 30;

$total = $num1 + $num2;

echo $total;

echo "<br/>";

//definir una funcion, es decir un metodo que tenga un instruccion predefinida y que al llamar dicha funcion se hagan esas instrucciones

function sumar(){

    $var1 = 35;
    $var2 = 55;
    $totalsuma = $var1 + $var2;
    echo "La suma es:". " ". $totalsuma;

}

sumar();

//asi como la funcion suma podriamos hacer funciones para resta, multiplicacion y division


//SEGUNDA PARTE VARIABLES. 1. VARIABLES LOCALES... variable local SCOPE(ALCANCE)
//podriamos entender a las variables locales, como variables que no modifican su valor dentro de su contexto o metodo
//como se ve a continuacion, pues hay dos variables llamadas contacto pero no interfieren la una con la otra
$contacto = "Jonh Doe";

function mostrarContacto(){

    $contacto = "Juan Carmelo";
    echo $contacto;
}

echo "<br/>";
mostrarContacto();
echo "<br/>";
echo $contacto;

echo "<br/>";

//VARIABLES GLOBALES...**************

global $mensaje;

$mensaje = "Saludos";
//tonterias***************

//VARIABLES ESTATICAS, estas evitan que se reseteen los valores de las variables

echo "<br/>";

function contador(){

   static $cont1 = 1;
    echo $cont1;
    $cont1 = $cont1 + 1;

}

echo "<br/>";
contador();
echo "<br/>";
contador();
echo "<br/>";
contador();
echo "<br/>";
contador();

echo "<br/>";
echo "<br/>";

//VARIABLES SUPERGLOBALES

$saludo4; 
$saludo4 = "BIENVENIDOS";

echo $GLOBALS["saludo4"]. "<br/>";


?>