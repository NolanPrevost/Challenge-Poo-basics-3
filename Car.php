<?php

require_once 'Vehicle.php';

class Car extends Vehicle
{

  public const ALLOWED_ENERGIES = [
    'SP98', 'SP95', 'diesel', 'electric',
  ];

  private string $energy;

  private int $energyLevel;

  private bool $hasParkBreak;

  public function __construct(string $color, int $nbSeats, string $energy)
  {
    parent::__construct($color, $nbSeats);
    $this->setEnergy($energy);
  }

  public function start(): string
  {
    if ($this->hasParkBreak) {
      throw new Exception("D'oh !");
    }    
    return "C'est parti let's goooo";
  }

  public function getEnergy(): string
  {
    return $this->energy;
  }

  public function setEnergy(string $energy): void
  {
    if(in_array($energy, self::ALLOWED_ENERGIES)){
      $this->energy = $energy;
    }
  }

  public function getEnergyLevel(): int
  {
    return $this->energyLevel;
  }

  public function setEnergyLevel(int $energyLevel): void
  {
    $this->energyLevel = $energyLevel;
  }

  /**
   * Get the value of hasParkBreak
   */ 
  public function getParkBreak()
  {
    return $this->hasParkBreak;
  }

  /**
   * Set the value of hasParkBreak
   *
   * @return  self
   */ 
  public function setParkBreak($hasParkBreak)
  {
    $this->hasParkBreak = $hasParkBreak;

    return $this;
  }
}
