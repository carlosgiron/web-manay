<?php

class NoticiaBean {
public $Id;
public $Nombre_Noticia;
public $Descripcion_Noticia;
public $Imagen;
public $Fecha_Publicacion;
function getId() {
    return $this->Id;
}

function getNombre_Noticia() {
    return $this->Nombre_Noticia;
}

function getDescripcion_Noticia() {
    return $this->Descripcion_Noticia;
}

function getImagen() {
    return $this->Imagen;
}

function getFecha_Publicacion() {
    return $this->Fecha_Publicacion;
}

function setId($Id) {
    $this->Id = $Id;
}

function setNombre_Noticia($Nombre_Noticia) {
    $this->Nombre_Noticia = $Nombre_Noticia;
}

function setDescripcion_Noticia($Descripcion_Noticia) {
    $this->Descripcion_Noticia = $Descripcion_Noticia;
}

function setImagen($Imagen) {
    $this->Imagen = $Imagen;
}

function setFecha_Publicacion($Fecha_Publicacion) {
    $this->Fecha_Publicacion = $Fecha_Publicacion;
}


}