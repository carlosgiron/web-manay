<?php

include_once '../bean/NoticiaBean.php';
include_once '../util/ConexionBD.php';

class NoticiaDao {

    public function ListaNoticiaAll() {

        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
//            $sql = "call Sp_Select_RegistroXId($idRegistro);";
            $sql = "select Id,Nombre_Noticia,Descripcion_Noticia,Imagen,Fecha_Publicacion FROM t_noticia order by Id desc";
            $result = mysql_query($sql, $cn);
            $lista = array();
            while ($row = mysql_fetch_array($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $ex) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
        return $lista;
    }

    public function ListaNoticiaXId($idnoticia) {

        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
//            $sql = "call Sp_Select_RegistroXId($idRegistro);";
            $sql = "select Id,Nombre_Noticia,Descripcion_Noticia,Imagen,Fecha_Publicacion FROM t_noticia where Id=$idnoticia";
            $result = mysql_query($sql, $cn);
            $lista = array();
            while ($row = mysql_fetch_array($result)) {
                array_push($lista, $row);
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $ex) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
        return $lista;
    }

    //Insertar noticia
    public function RegistraNoticia($nombre_noticia, $descripcion_noticia, $imagen, $fecha_noticia) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $noticia = new NoticiaBean();
            // $noticia->Id=$id;
            $noticia->Nombre_Noticia = $nombre_noticia;
            $noticia->Descripcion_Noticia = $descripcion_noticia;
            $noticia->Imagen = $imagen;
            $noticia->Fecha_Publicacion = $fecha_noticia;
            $sql = "INSERT INTO t_noticia(Nombre_Noticia,Descripcion_Noticia,Imagen,Fecha_Publicacion)"
                    . "VALUES ('" . $noticia->Nombre_Noticia . "','" . $noticia->Descripcion_Noticia . "','" . $noticia->Imagen . "','" . $noticia->Fecha_Publicacion . "')";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $exc) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
    }

    //Eliminar Noticia
    public function ElimnarNoticia($id) {
        try {
            $con = new ConexionBD();
            $cn = $con->getConexionDB();
            $noticia = new NoticiaBean();
            $noticia->Id = $id;
            $sql = "delete from t_noticia where id='" . $noticia->Id . "'";
            if (mysql_query($sql, $cn)) {
                return true;
            } else {
                return false;
            }
            mysql_free_result($result);
            mysql_close($cn);
        } catch (Exception $ex) {
            try {
                mysql_free_result($result);
            } catch (Exception $ex) {
                
            }
            try {
                mysql_close($cn);
            } catch (Exception $ex) {
                
            }
        }
    }

}

?>