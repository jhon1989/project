<?php

   /**
    * Clase modelo para
    */
   abstract class Model
   {
       protected function getConnection() {
          require_once 'Connection.php';
          $conn = new Connection();
          return $conn->conexion();
       }

       public abstract function edit();
       public abstract function delete();
       public abstract function show();
       public abstract function save();
   }

 ?>
