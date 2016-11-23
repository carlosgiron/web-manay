<?php

include_once '../dao/NoticiaDao.php';

class NoticiaControlador {

    public function ListaNoticiaAll() {
        $noticiaId = new NoticiaDao();
        $lista = $noticiaId->ListaNoticiaAll();
        return $lista;
    }

    public function ListaNoticiaXId($idnoticia) {
        $noticiaId = new NoticiaDao();
        $lista = $noticiaId->ListaNoticiaXId($idnoticia);
        return $lista;
    }

    public function RegistraNoticia($nombre_noticia, $descripcion_noticia, $imagen, $fecha_noticia) {
        $noticia = new NoticiaDao();
        return $noticia->RegistraNoticia($nombre_noticia, $descripcion_noticia, $imagen, $fecha_noticia);
    }

}