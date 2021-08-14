<?php
# Generamos la Interface
interface Postre
{
    public function set_ingredientes();
}

# Implementamos la Interface 
class Bizcochuelo implements Postre
{
    public $ingredientes = array();

    public function set_ingredientes()
    {
        $this->ingredientes = array('harina' => '2 tasitas', 'leche' => '1 tasita', 'azúcar' => '1 taza');
    }
}

# Extendemos a otra clase
class VizcochueloVainilla extends Bizcochuelo
{
    public function set_ingredientes()
    {
        $this->ingredientes['esencia de vainilla'] = 'a gusto';
    }

    function __construct()
    {
        parent::set_ingredientes();
        $this->set_ingredientes();
    }
}

# Creando otra clase que implemente la interface
class Alfajor implements Postre
{
    public function set_ingredientes()
    {
        $this->ingredientes = array('Tasas de maicena' => 2, 'dulce de leche' => '1 cda. sopera', 'coco rallado' => '1 cdta. de te');
    }

    function __construct()
    {
        $this->set_ingredientes();
    }
}

$vizcochuelo_vainilla = new VizcochueloVainilla();
var_dump($vizcochuelo_vainilla->ingredientes);
