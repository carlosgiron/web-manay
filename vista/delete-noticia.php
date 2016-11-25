<?php

include_once '../controlador/NoticiaControlador.php';


$noticiaCon = new NoticiaControlador();
$action = ($_GET["action"]);
$idnoticia =($_GET["id"]);
if ($action == "del") {
    $noticiaCon->ElimnarNoticia($idnoticia);
    header("location:registro-noticia.php");
} else {
    echo "Error al Eliminar noticia";
}
 
