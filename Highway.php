<?php

abstract class Highway
{
  private array $currentVehicle;
  private int $nbLane;
  private int $maxSpeed;

  // public function __construct(int $nbLane, int $maxSpeed){
  //   $this->nbLane = $nbLane;
  //   $this->maxSpeed = $maxSpeed;
  // }

  abstract public function addVehicle(Vehicle $vehicle);

  /**
   * Get the value of currentVehicle
   */ 
  public function getCurrentVehicle()
  {
    return $this->currentVehicle;
  }

  /**
   * Set the value of currentVehicle
   *
   * @return  self
   */ 
  public function setCurrentVehicle($currentVehicle)
  {
    $this->currentVehicle = $currentVehicle;

    return $this;
  }

  /**
   * Get the value of nbLane
   */ 
  public function getNbLane()
  {
    return $this->nbLane;
  }

  /**
   * Set the value of nbLane
   *
   * @return  self
   */ 
  public function setNbLane($nbLane)
  {
    $this->nbLane = $nbLane;

    return $this;
  }

  /**
   * Get the value of maxSpeed
   */ 
  public function getMaxSpeed()
  {
    return $this->maxSpeed;
  }

  /**
   * Set the value of maxSpeed
   *
   * @return  self
   */ 
  public function setMaxSpeed($maxSpeed)
  {
    $this->maxSpeed = $maxSpeed;

    return $this;
  }
}
