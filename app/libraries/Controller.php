<?php
// Controlador principal: encargado de cargar modelos y vistas
class Controller
{
  // Carga modelo
  public function model($model)
  {
    require_once "../app/models/" . $model . ".php";
    return new $model();
  }

  // Carga vista
  public function view($view, $data = [])
  {
    $path = "../app/views/" . $view . ".php";
    
    // Checa si la vista existe
    file_exists($path) ? require_once $path : die("La vista no existe");
  }
}