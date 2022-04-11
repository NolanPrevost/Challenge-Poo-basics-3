<?php
require_once 'Highway.php';

final class MotorWay extends Highway
{
  private int $nbLane = 4;
  private int $maxSpeed = 130;

  public function addVehicle(Vehicle $vehicle)
  {
    if ($vehicle instanceof Bicycle) {
      return "Go back, you fool !";
    } else {
      $this->currentVehicle[] = $vehicle;
    }
  }

}