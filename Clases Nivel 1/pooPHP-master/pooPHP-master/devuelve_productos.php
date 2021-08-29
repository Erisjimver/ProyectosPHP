<?php

    require "conexion.php";

    class Devuelve_Productos extends Conexion{

       // public function devuelve_productos()
       public function __construct()
        {
            parent::__construct();
            //$this->conexion_db;
        }

        public function get_productos(){

            $resultado=$this->conexion_db->query('select * from productos');
            //$resultado=$this->conexion_db->query('select códigoartículo, seccion,nombreartículo,precio,fecha,importado,paísdeorigen from productos');
            //var_dump($conexion_db);
            //$resultado=$this->conexion_db->query('select códigoartículo from productos');

            $productos=$resultado->fetch_all(MYSQLI_ASSOC);
            //$this->conexion_db->close();
            return $productos;
        
        }



    }

?>