<?php
class Paginas extends Controller
{
  public function __construct()
  {
    
  }

  public function index()
  {
    $data = [
      "title" => "Bienvenidos",
    ];
    $this->view("paginas/index", $data);
  }
}
