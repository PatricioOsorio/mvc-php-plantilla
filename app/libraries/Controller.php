<?php
// Controlador principal: encargado de cargar mdoelos y visas
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
    // Checa si la vista existe
    $path = "../app/views/" . $view . ".php";
    file_exists($path) ? require_once $path : die("La vista no existe");
  }
}
