<?php
//Instanciamos la clase Vehiculo para extenderlo en Auto
require_once("Vehiculo.php");

class Camion extends Vehiculo
{
    function __construct($miMarca,$miModelo,$miColor,$miPropietario,$miEmpresa){
        $this->marca=$miMarca;
        $this->modelo=$miModelo;
        $this->color=$miColor;
        $this->propietario=$miPropietario;
        $this->empresa=$miEmpresa;
        
        }
    
    //Hereda las funciones de Vehiculo y agregamos la nueva para empresa

    function setEmpresa($miEmpresa){
        $this->empresa=$miEmpresa;
    }

    function getEmpresa(){
        return $this->empresa;
    }


    function puedeIngresar($miConcecionario){
        //Verdadero si pertenece a la concecionaria
          
    }
    
}