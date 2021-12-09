<?php

class Voiture
{
    //Attributes


    private int $nbWheels = 4;
    private int $currentSpeed;
    private string $color;
    private int $nbSeats = 5;
    private string $typeOfEnergy;
    private int $currentLevelOfEnergy;

    //Constants

    //Methods

    public function __construct(string $color, int $nbSeats, string $typeOfEnergy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->typeOfEnergy = $typeOfEnergy;
    }

    public function Start(): string
    {
        return "Let's roll!";
    }

    public function forward(): string
    {
        $this->currentSpeed = 10;

        return "Let's speed up!";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Brake !!!";
        }
        $sentence .= "I'm stopped !";
        return $sentence;
    }

    // Getters for Attributes

    public function getNbWheels(): int
    {
        return $this->nbWheels;
    }

    public function getCurrentSpeed(): int
    {
        return $this->currentSpeed;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getNbSeats(): int
    {
        return $this->nbSeats;
    }

    public function getTypeOfEnergy(): string
    {
        return $this->typeOfEnergy;
    }

    public function getCurrentLevelOfEnergy(): int
    {
        return $this->currentLevelOfEnergy;
    }
}