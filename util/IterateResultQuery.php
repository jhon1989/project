<?php

 function IterateResultQuery($query) {

   if (! is_object($query) ) {
       return 'La variable no es un objeto';
   }

  if ( mysqli_num_rows($query) > 0 ) {

        $result = [];
        while ($row = $query->fetch_object()) {
          $result[] = $row;
        }

        return $result;
    }
      return 'No se encontro ningun registro';

 }
