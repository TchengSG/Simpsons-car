<?php

require_once 'Vehicle.php';

class Truck extends Vehicle
{
    //ATTRIBUTES

    private int $payloadCapacity;

    private int $currentLoadingLevel = 0;

    // CONSTANT Attributes

    public const ALLOWED_ENERGIES = [
        'fuel',
        'electric',
    ];

    // METHODS

    //__construct

    public function __construct(string $color, int $nbSeats, string $energy, int $payloadCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->setEnergy($energy);
        $this->payloadCapacity = $payloadCapacity;
    }

    // Method to check current level of payload

    public function checkCurrentPayload(): int
    {
        If ($payloadCapacity === $currentLoadingLevel) {
            return 'FULL: The truck is fully loaded.';
        } elseif ($payloadCapacity < $currentLoadingLevel) {
            return 'OVERLOADED : The level of loading exceeds the capacity. Please adjust.';
        } else
            return 'IN FILLING. The current level of le loading is ' .$currentLoadingLevel;
    }

    // Other methods

    public function getEnergy(): string
    {
        return $this->energy;
    }

    public function setEnergy(string $energy): Truck
    {
        if (in_array($energy, self::ALLOWED_ENERGIES)) {
            $this->energy = $energy;
        }
        return $this;
    }

    public function getEnergyLevel(): int
    {
        return $this->energyLevel;
    }

    public function setEnergyLevel(int $energyLevel): void
    {
        $this->energyLevel = $energyLevel;
    }

    public function getPayloadCapacity(): int
    {
        return $this->payloadCapacity;
    }

    public function setPayloadCapacity(int $payloadCapacity): void
    {
        $this->payloadCapacity = $payloadCapacity;
    }

    public function getCurrentLoadingLevel(): int
    {
        return $this->currentLoadingLevel;
    }

    public function setCurrentLoadingLevel(int $currentLoadingLevel): void
    {
        $this->currentLoadingLevel = $currentLoadingLevel;
    }

}
