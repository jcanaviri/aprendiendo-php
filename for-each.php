<?php
# Uso de foreach en un array
$frutas = ['Manzana', 'Pera', 'Frutilla'];

foreach ($frutas as $valor) {
    echo $valor . '<br>';
}

# Uso de foreach en una array asociativo
$comidas = [
    'desayuno' => 'cereal',
    'almuerzo' => 'pizza',
    'cena' => 'ensalada'
];

foreach ($comidas as $key => $value) {
    echo 'Llave ' . $key . ' y el valor es ' . $value . '<br>';
}

$productos = [
    ['codigo' => 'A0001', 'desc' => 'Mouse'],
    ['codigo' => 'A0002', 'desc' => 'Teclado'],
    ['codigo' => 'A0003', 'desc' => 'Monitor'],
    ['codigo' => 'A0004', 'desc' => 'Impresor'],
];

echo '<ul>';
foreach ($productos as $producto) {
    echo '<li>' . $producto['codigo'] . ' => ' . $producto['desc'] . '</li>';
}
echo '</ul>';

# Modificando el valor con &
foreach ($productos as &$prod) {
    $prod['codigo'] = '2';
}
echo '<pre>';
var_dump($productos);
echo '</pre>';
