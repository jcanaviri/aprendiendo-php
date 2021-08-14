<?php
class Producto
{
    public $nombre;
    public $precio;
    protected $estado;

    protected function set_estado_producto($estado)
    {
        $this->estado = $estado;
    }

    // Constructor de la clase
    function __construct()
    {
        $this->set_estado_producto('en uso');
    }

    // Destructor de la clase
    function __destruct()
    {
        $this->set_estado_producto('liberado');
        print('El objeto ha sido destruido');
    }

    function get_estado()
    {
        return $this->estado;
    }
}

$mi_producto = new Producto();
echo $mi_producto->get_estado();
