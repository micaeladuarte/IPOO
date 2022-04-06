<?php
class Viaje {
    private $codigoViaje; //entero
    private $destino;
    private $cMaxPasajeros;
    private $pasajeros; //array numero, apellido, numero de documento
    private $cantPasajerosActual;

    public function __construct($cod, $dest, $maxPasajeros) // los pasajeros no lo pide pq no es parte del objeto viaje
    {
     $this-> codigoViaje= $cod;
     $this-> destino= $dest; 
     $this-> cMaxPasajeros= $maxPasajeros;
     $this-> pasajeros=[];
     $this-> cantPasajerosActual=0;
             
    }

    public function getCodigoViaje (){
        return $this->codigoViaje;
    }

    public function setCodigoViaje($cod){
        $this-> codigoViaje= $cod;
    }

    public function getDestino (){
        return $this->destino;
    }

    public function setDestino($dest){
        $this-> destino= $dest;
    }

    public function getCMaxPasajeros (){
        return $this->cMaxPasajeros;
    }

    public function setCMaxPasajeros($maxPasajeros){
        $this-> cMaxPasajeros= $maxPasajeros;
    }

    public function getPasajeros (){
        return $this->pasajeros;
    }

    public function setPasajeros($pasajerosViaje){
        $this-> pasajeros= $pasajerosViaje;
    }




    public function cargarPasajeros (){
        $asiento= $this-> datosDeUnPasajero();
        array_push($pasajeros,$asiento);
    }
       
    

    


    public function hayLugar ($cant){
         return ($this-> cantPasajerosActual + $cant) < ($this-> cMaxPasajeros) ;
    // retorna un buleano.
    }
        
       





    public function datosDeUnPasajero() {
        echo "Por favor ingrese el nombre:\n";
        $nombre= trim(fgets(STDIN));
        echo "Por favor ingrese el apellido:\n";
        $apellido= trim(fgets(STDIN));
        echo "Por favor ingrese el numero de documento:\n";
        $nroDoc= trim(fgets(STDIN));
        $unPasajero= ["Nombre"=> $nombre, "Apellido"=> $apellido, "NroDoc"=>$nroDoc];
        return $unPasajero;

    }


    /*public function __toString()
    {
        return $this->pasajeros;
    }*/










}