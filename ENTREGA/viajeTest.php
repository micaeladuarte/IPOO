<?php
require_once ("viaje.php");

/*$pasajeroa= [
    "nombre"=> "",
    "apellido"=> "",
    "nroDoc"=>"",
];*/


echo"Esta es la empresa de transporte 'Viaje Feliz' \n";
echo "A continuacion se le solicitaran datos propios del viaje que debe ingresar \n";
echo "---------------------------------------------- \n";
echo" Por favor ingrese el codigo del viaje: \n";
$cod=trim(fgets(STDIN));
echo "Por favor ingrese el destino elegido: \n";
$dest=trim(fgets(STDIN));
echo "Por favor ingrese la cantidad maxima de pasajeros que pueden abordar: \n";
$maxPasajeros= trim(fgets(STDIN));



$viajeObj= new Viaje($cod, $dest, $maxPasajeros);
agregarGente($viajeObj);

//function menu (){



    /*opcion x: agregar 1 chabon
    usa funcion cargarPasajeros que a su vez usa datosDeUnPasajero*/

//}

function agregarGente ($viajeObj) {
    echo"ingrese cantidad de pasajeros a agregar:\n";
    $cant=trim(fgets(STDIN));
    if ($viajeObj->hayCapacidad($cant)) {
        do {
            $viajeObj-> cargarPasajeros();
            $cant --;

        }
        while ($cant==0);
    }

    

}



 
