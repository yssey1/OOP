<?php

//Requerimos las clases creadas

require("Camion.php");
require("Auto.php");
require("Vagoneta.php");

?>

<h1>Ejemplo 3: Herencia, Subclases</h1>

<?php

    //Llamamos las subclases
    $camion= new Camion("Volvo","X3","Plomo","Raul","El Chiquitano");
    $vagoneta= new Vagoneta("Volvo","X3","Plomo","Raul");
    $auto= new Auto("Volvo","X3","Plomo","Raul");
?>


    <div>
        ¿Cual es el concecionario al que pertenece el camion?:
        <strong><?php echo($camion->puedeIngresar("concecionario1")) ?></strong>
    </div>

    
    <div>
        ¿Cual es el concecionario al que pertenece el vagoneta?:
        <strong><?php echo($vagoneta->puedeIngresar("concecionario2")) ?></strong>
    </div>


    <div>
        ¿Cual es el concecionario al que pertenece el auto?:
        <strong><?php echo($auto->puedeIngresar("concecionario1")) ? "si": "no" ?></strong>
    </div>