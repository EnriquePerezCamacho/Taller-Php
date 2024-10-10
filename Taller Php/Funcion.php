<?php
    class Gato extends Animal {public function hacerSonido() {
        echo $this->nombre . " dice: ¡Miau!<br>";
        }
        }
        // Crear instancias de Perro y Gato
        $miPerro = new Perro("Bobby");
        $miPerro->hacerSonido(); // Imprime: Bobby dice: ¡Guau!
        $miGato = new Gato("Misu");
        $miGato->hacerSonido(); // Imprime: Misu dice: ¡Miau!

        class Animal {
            public function hacerSonido() {
            echo "El animal hace un sonido genérico.<br>";
            }
            }
            class Perro extends Animal {
            public function hacerSonido() {
            parent::hacerSonido(); // Llama al método de la clase padre
            echo "El perro dice: ¡Guau!<br>";
            }
            }
            $miPerro = new Perro();
            $miPerro->hacerSonido();

?>