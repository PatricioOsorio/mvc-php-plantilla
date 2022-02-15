<?php
// Cargamos librerias
require_once "config/config.php";

// Autoload de clases
spl_autoload_register(function ($class) {
  require_once "libraries/" . $class . ".php";
});