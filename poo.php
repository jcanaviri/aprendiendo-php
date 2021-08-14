<?php

// Formas de definir una clase
class NombreClase {}

abstract class NombreClaseAbstracta {}


// Herencia de Clases
class ClaseBase {}

class ClaseHija extends ClaseBase {}

// Si no queremos que una clase pueda ser heredada
// usamos el keyword final
final class NombreClaseFinal {}


// Instanciar una clase
class Persona {
    public $nombre;
    public $edad;
    private $genero;
    protected $pasaporte;

    public function getNombre() {
        return $this->nombre;
    }
}

$persona = new Persona();
$persona->nombre = 'Josue';

echo $persona->getNombre().' ';

class PersonaTipoSangrePositivo extends Persona {
    // Esta propiedad no cambiara
    public static $tipo_sangre = 'A+';

    public function getTipo() {
        // Se una "self" para referenciar a la misma clase
        // Se usa "parent" para referenciar a la clase base
        return self::$tipo_sangre;
    }

    static function a() {
        echo 'funcion estatica';
    }
    protected function b() { 
        echo 'funcion protegida';
    }
    private function c() { 
        echo 'funcion privada';
    }   
}
$persona_positiva = new PersonaTipoSangrePositivo();
echo $persona_positiva->getTipo();

// Accediendo a la variable directamente desde la clase
echo '<br>';
echo 'Tipo de sangre en variable estática '.PersonaTipoSangrePositivo::$tipo_sangre;

echo '<br>';
echo PersonaTipoSangrePositivo::a();
