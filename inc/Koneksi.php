<?php

namespace Inc;

use \PDO;
use \PDOException;

class Koneksi
{
    protected object $koneksi;

    public function __construct()
    {
        try {
            $this->koneksi = new \PDO("mysql:host=127.0.0.1;dbname=dbpbwl_project5;charset=utf8mb4",
                "root",
                "");
        } catch (\PDOException $e) {
            echo "Koneksi gagal: " . $e->getMessage();
        }
    }
}
