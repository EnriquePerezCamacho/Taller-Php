<?php
/*1.Defina una claseCoche que tenga las propiedades marca, modelo y año.
Agregue un método acelerar()que imprima "El coche está acelerando".*/
class Coche{
    public $marca;
    public $modelo;
    public $año;

    public function acelerar(){
        echo "El coche está acelerando.";
    }
}
// Creamos un objeto de la clase Coche
$miCoche = new Coche();

// Llamamos al método acelerar() del objeto
$miCoche->acelerar();
/*2. Crea una claseElectrodomestico con las propiedades nombrey precio. Luego,
crea una clase Lavadora que herede Electrodomesticoy tenga un método
lavar().*/
class Electrodomestico{
    public $nombre;
    public $precio;
}

class Lavadora extends Electrodomestico{
    public function lavar(){
        echo " La lavadora está lavando.";
    }
}

// Crear un objeto Lavadora y llamar al método lavar
$miLavadora = new Lavadora();
$miLavadora->lavar();
/*3. Definir una claseAnimal con un método hacerSonido(). Luego, crea una clase
Gatoque herede Animaly sobrescribe el método hacerSonido()para que
imprima "El gato maúlla".*/
class Animal{
    public function hacerSonido(){
        echo " El animal hace un sonido.";
    }
}

class Gato extends Animal{
    public function hacerSonido(){
        echo " El gato maúlla";
    }
}

// Crear un objeto Gato y llamar al método hacerSonido
$miGato = new Gato();
$miGato->hacerSonido();
/*4. Defina un espacio de nombresVehiculos que contenga una clase Camiony otro
espacio de nombres llamado Transporteque contenga una clase Camioneta.
Luego, crea instancias de ambas clases para probar cómo se diferencian.*/ 
 
?>
