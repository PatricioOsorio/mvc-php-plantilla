<?php
class Pages extends Controller
{
  public function __construct()
  {
    $this->vehicleModel = $this->model('Vehicles');
  }

  public function index()
  {
    $data = [
      "title" => "Bienvenidos",
      "vehicles" => $this->vehicleModel->getVehicles()
    ];
    $this->view("pages/index", $data);
  }

  public function actualizar($num_registro)
  {
    echo $num_registro;
  }
}
