<?php

class ConexionBD {

    const SERVER = "localhost";
    const USER = "root";
    const PASS = "carlos";
    const DATABASE = "noticia";

    private $cn = null;

    public function getConexionDB() {
        try {
            $this->cn = @mysql_connect(self::SERVER, self::USER, self::PASS);
            @mysql_select_db(self::DATABASE, $this->cn);
        } catch (Exception $e) {
            
        }
        return $this->cn;
    }

}
