<?php

include_once '../dao/NoticiaDao.php';

class NoticiaControlador {

    public function ListaUltimasNoticias($idnoticia){
        $noticiaDao= new NoticiaDao();
        $listaUltimas=$noticiaDao->ListaUltimasNoticias($idnoticia);
        return $listaUltimas;
    }
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

    public function ElimnarNoticia($id) {
        $noticiaDao = new NoticiaDao();
        return $noticiaDao->ElimnarNoticia($id);
    }

}
