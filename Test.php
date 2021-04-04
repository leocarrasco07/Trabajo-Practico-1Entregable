<?php

include_once 'Teatro.php';

$nombreTeatro="Colon";
$direccion="dorrego 1400";
$funcion=array(0 => array("nombre" => "el leon" , "precio" => 1400),
               1 => array("nombre" => "caperusita" , "precio" => 2000),
               2 => array("nombre" => "frozen" , "precio" => 4000),
               3 => array("nombre" => "pepa pig" , "precio" => 1800)
);
$Teatro = new Teatro($nombreTeatro, $direccion, $funcion);

echo $Teatro->__toString();

    function Menu() {
        $menu = "1) Cambiar Nombre Teatro "."\n".
            "2) Cambiar Nombre Direccion Teatro "."\n".
            "3) Cambiar Nombre de Funcion " . "\n".
            "4) Cambiar Precio Funcion " ."\n".
            "5) Mostrar Datos Teatro " ."\n".
            "6) SALIR "."\n";
    
        return $menu;
    }

    
    do {
        $seguir = true;
        echo Menu();
        echo "elige Opcion : "."\n";
        $opcion =trim(fgets(STDIN));
        if ($opcion == 1) {
            echo "Ingrese Nuevo Nombre: "."\n";
            $nuevoNombre = trim(fgets(STDIN));
            $Teatro ->cambiarNombreTeatro($nuevoNombre);
        }
        elseif ($opcion == 2) {
            echo "Ingrese Nueva Direccion :"."\n";
            $direc = trim(fgets(STDIN));
            $Teatro ->cambiarDireccTeatro($direc);
        }
        elseif ($opcion == 3) {
            echo "Ingrese Nombre Funcion A Cambiar :"."\n";
            $nombre = trim(fgets(STDIN));
            echo "Ingrese NUEVO Nombre: "."\n";
            $nombreNuevo = trim(fgets(STDIN));
            $cambiado =$Teatro ->cambiarNombreFuncion($nombreNuevo, $nombre);
            if ($cambiado == true) {
                echo "Nombre Cambiado"."\n";
            }
            elseif ($cambiado == null) {
                echo "No se pudo cambiar"."\n";
            }
        }
        elseif ($opcion == 4) {
            echo "Ingrese Nombre Funcion a precio a cambiar"."\n";
            $funNombre= trim(fgest(STDIN));
            echo "ingrese Nuevo Precio :"."\n";
            $precioNuevo = trim(fgest(STDIN));
            $cambiado = $Teatro ->cambiarPrecioFun($funNombre, $precioNuevo);
            if ($cambiado == true) {
                echo "precio Cambiado"."\n";
            }
            elseif ($cambiado == null) {
                echo "no se pudo cambiar" ."\n";
            }
        }
        elseif ($opcion == 5) {
            echo $Teatro ->__toString();
        }
        elseif ($opcion == 6) {
            $seguir = false;
        }
    }
    while ($seguir);
