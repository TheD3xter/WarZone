<!DOCTYPE html>
<html>
    <head>
      <title> Introduccion a la programacion orientada al objeto  </title>
      <link type='text/css' rel='stylesheet' href='style.css'/>
    </head>
    <body>
      <p>
      <?php
        // El código que sigue crea la clase
        class Persona {
            // Crear algunas propiedades (variables atadas a un objeto)
            public $estaViva = true;
            public $nombre;
            public $apellido;
            public $edad;

            // Asignar valores
            public function __construct($nombre, $apellido, $edad) {
              $this->nombre = $nombre;
              $this->apellido = $apellido;
              $this->edad = $edad;
            }

            // Crear un método (función atada a un objeto)
            public function saludo() {
              return "Hola mi nombre es " . $this->nombre . " " . $this->apellido . "y tengo ". $this->edad ." años. ¡Encantado de conocerte! :-)";
            }
          }
        /**
         *
         */
        class Esther extends Persona{

        }


        // Crear una new persona llamada "aburrida 12345", que tiene 12345 años ;-)
        $yo = new Persona ('Richard', 'Yerian', 19);

        // Mostrar, lo que devuelve el método saludo
        echo $yo->saludo();
        ?>
        </p>
    </body>
</html>
