<?php

class Car
{
    private int $nbWheels = 5;
    private int $currentSpeed = 50;
    private string $color;
    private int $nbSeats;
    private string $energy;
    private int $energyLevel = 40;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward(): string
    {
        $this->currentSpeed;

        return "Let's Gooo !";
    }

    public function brake(): string
    {
        $sentence = "";
        while ($this->currentSpeed > 0) {
            $this->currentSpeed--;
            $sentence .= "Too fast !!";
        }
        $sentence .= "<br> I'm stopped ! <br>";
        return $sentence;
    }

    public function start(): string
    {
        if ($this->currentSpeed > 0) {
            // return $this->currentSpeed;
            return "Let's go to the mall";
        } else {

            echo "Lost my keys :(";
        }
    }
    public function getNbWheels()
    {
        $this->nbWheels;
    }
    public function getCurrentSpeed($currcurrentSpeed)
    {
        return $this->currentSpeed;
    }

    public function getColor()
    {
        return $this->color;
    }
    public function getNbSeats()
    {
        return $this->nbSeats;
    }
    public function getEnergy()
    {
        return $this->energy;
    }
    public function getEnergyLevel()
    {
        return $this->energyLevel;
    }
}
