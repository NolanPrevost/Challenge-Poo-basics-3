<?php
require_once 'Highway.php';

final class ResidentialWay extends Highway
{
  private int $nbLane = 2;
  private int $maxSpeed = 50;

  public function addVehicle(Vehicle $vehicle)
  {
      $this->currentVehicle[] = $vehicle;
  }
  
}