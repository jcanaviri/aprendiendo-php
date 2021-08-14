<?php
function set_identificadores($vista)
{
    $identificadores = array();

    switch ($vista) {
        case 'vista_1':
            $identificadores = array('propiedad');
            break;
        case 'vista_2':
            $identificadores = array('propiedad_1', 'propiedad_2');
            break;
    }
    return $identificadores;
}

function armar_diccionario($vista, $data)
{
    $diccionario = array();
    $identificadores = set_identificadores($vista);

    if ($identificadores) {
        foreach ($identificadores as $identificador) {
            if (array_key_exists($identificador, $data)) {
                $diccionario[$identificador] = $data[$identificador];
            }
        }
    }

    return $diccionario;
}

function render_data($vista, $data)
{
    $html = '';

    if (($vista) && ($data)) {
        $diccionario = armar_diccionario($vista, $data);
        
        if ($diccionario) {
            $html = file_get_contents('./templates/' . $vista . '.html');

            foreach ($diccionario as $clave => $valor) {
                $html = str_replace('{' . $clave . '}', $valor, $html);
            }
        }
    }

    echo $html;
}
