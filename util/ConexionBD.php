<?php

class ConexionBD {

    const SERVER = "localhost";
    const USER = "dic05trd_admin";
    const PASS = "rah]NZ5HT+UW";
    const DATABASE = "dic05trd_tramontana";

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
