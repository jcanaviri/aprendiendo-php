<?php
class ModeloUno
{
    public $propiedad;

    function a($parametro)
    {
        $this->propiedad = $parametro;
    }

    function __construct()
    {
        $this->a(25);
    }
}

class ModeloDos 
{
    public $propiedad_1;
    public $propiedad_2;

    function b($param1, $param2)
    {
        $this->propiedad_1 = $param1;
        $this->propiedad_2 = $param2;
    }

    function __construct()
    {
        $this->b(25, 40);
    }
}
