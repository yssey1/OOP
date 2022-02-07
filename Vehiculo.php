<?php
//Sistema de gestion de Vehiculos para una concesionaria

/*
En el anterior ejercicio aplicamos el concepto de clase y objetos con sus propiedades y metodos, a esto le agreggamos el constructor para instanciar el objeto.
*/

//Paso 1: Crear la clase Vehiculo

class Vehiculo{
//Paso 2: definimos atributos de la clase

var $marca;
var $modelo;
var $color;
var $propietario;
var $concecionario;
var $concecionarios= array("sinconcecionario, concecionario1, concecionario2");

//Constructor
function __construct($miMarca,$miModelo,$miColor,$miPropietario){
$this->marca=$miMarca;
$this->modelo=$miModelo;
$this->color=$miColor;
$this->propietario=$miPropietario;

}

//Paso3: definir las funciones y metodos

function setMarca($miMarca){
    $this->marca = $miMarca;
}

function getMarca(){
    return $this->marca;

}

function setModelo($miModelo){
    $this->modelo = $miModelo;
}

function getModelo(){
    return $this->modelo;

}

function setColor($miColor){
    $this->color = $miColor;
}

function getColor(){
    return $this->color;

}

function setPropietario($miPropietario){
    $this->propietario = $miPropietario;
}

function getPropietario(){
    return $this->propietario;

}


function setConcecionario($miConcecionario){
    $this->concecionario = $miConcecionario;
}

function getConcecionario(){
    return $this->concecionario;

}

}
