<?php

    function setMessage($message = 'No hay mensajes para mostrar', $type_message) {
      setcookie("message", $message, time() + 3);
      setcookie("type_message", $type_message, time() + 3);
    }

 ?>
