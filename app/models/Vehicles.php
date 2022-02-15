<?php
class Vehicles
{
  private $db;

  public function __construct()
  {
    $this->db = new DataBase();
  }

  public function getVehicles()
  {
    $this->db->query("SELECT * FROM vehiculos");

    return $this->db->getRegisters();
  }
}
