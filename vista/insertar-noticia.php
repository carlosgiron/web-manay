<?php
//error_reporting(E_ALL);
//ini_set('display_errors', '1');
?>

<?php

include_once '../controlador/NoticiaControlador.php';

$regNoticia = new NoticiaControlador();
//$regImagenControlador= new ImagenRegistroControlador();

if (isset($_POST["nombre_noticia"]) || isset($_POST["descripcion_noticia"])) {


    //sube imagen
    if (isset($_FILES['imagen'])) {

        $directorio = 'images/';
        $cantidad = count($_FILES["imagen"]["tmp_name"]);
        for ($i = 0; $i < $cantidad; $i++) {
            //Comprobamos si el fichero es una imagen
            if ($_FILES['imagen']['type'][$i] == 'image/png' || $_FILES['imagen']['type'][$i] == 'image/jpeg'|| $_FILES['imagen']['type'][$i] == 'image/jpg') {

                //Subimos el fichero al servidor
            $add=$directorio.$_FILES["imagen"]["name"][$i];
                move_uploaded_file($_FILES["imagen"]["tmp_name"][$i], $directorio . $_FILES["imagen"]["name"][$i]);
                $validar = true;
            } else
                $validar = false;
        }
    }

    //fecha
    date_default_timezone_set('America/Lima');
//    $fecha_publicacion =  DateTime();
    $fecha_noticia = date('Y-m-d H:i:s', time());
    
    if ($regNoticia->RegistraNoticia($_POST["nombre_noticia"], $_POST["descripcion_noticia"], $add, $fecha_noticia)) {
          header("location:registro-noticia.php");
    } else {
        error_reporting(E_ALL);
        echo "Error al Insertar Servicio";
    }
}

