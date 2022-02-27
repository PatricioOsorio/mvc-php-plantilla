<?php
// Cargamos librerias
require_once "config/config.php";

// Autoimportamos las clases de "libraries"
spl_autoload_register(function ($class) {
  require_once "libraries/" . $class . ".php";
});