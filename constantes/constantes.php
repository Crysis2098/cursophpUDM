<?php

//  CONSTANTES
/*
CARACTERISTICAS. 1. NO SE NECESITA USAR $; 2. SOLO SE DEFINEN CON EL METODO DEFINE;
3. SE ASIGNAN UNA UNICA VEZ; 4. EL ALCANCE O SCOPE ES GLOBAL SE PUEDE ACCEDER DESDE CUALQUIER LUGAR A LAS CONSTANTES
*/

///DEFINIR CONSTANTE Y SU VALOR

define('CUOTA', 2000);

$valorcuota = CUOTA;

echo "el valor de la cuota:". " ". $valorcuota;
echo "<br/>";
echo "<br/>";
echo "el valor de la cuota:". " ". CUOTA;


?>