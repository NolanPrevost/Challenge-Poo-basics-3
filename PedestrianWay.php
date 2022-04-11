<?php
require_once 'Highway.php';

final class PedestrianWay extends Highway
{
  private int $nbLane = 1;
  private int $maxSpeed = 10;

  public function addVehicle(Vehicle $vehicle)
  {
    if (!$vehicle instanceof Bicycle) {
      return "Go back, you fool !";
    } else {
      $this->currentVehicle[] = $vehicle;
    }
  }
}
