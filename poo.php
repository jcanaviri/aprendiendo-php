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
}

$persona = new Persona();

class PersonaTipoSangrePositivo extends Persona {
    // Esta propiedad no cambiara
    public static $tipo_sangre = 'A+';
}
