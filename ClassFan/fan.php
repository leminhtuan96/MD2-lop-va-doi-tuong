<?php

class Fan
{
    private $SLOW;
    private $MEDIUM;
    private $FAST;
    private $speed;
    private $on;
    private $radius;
    private $color;

    public function __construct()
    {
        $this->SLOW = 1;
        $this->MEDIUM = 2;
        $this->FAST = 3;
        $this->speed = $this->SLOW;
        $this->on = false;
        $this->radius = 5;
        $this->color = "blue";
    }

    /**
     * @return int
     */
    public function getSLOW(): int
    {
        return $this->SLOW;
    }

    /**
     * @return int
     */
    public function getMEDIUM(): int
    {
        return $this->MEDIUM;
    }

    /**
     * @return int
     */
    public function getFAST(): int
    {
        return $this->FAST;
    }

    /**
     * @return int
     */
    public function getSpeed(): int
    {
        return $this->speed;
    }

    /**
     * @param int $speed
     */
    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }

    /**
     * @return false
     */
    public function getOn(): bool
    {
        return $this->on;
    }

    /**
     * @param false $on
     */
    public function setOn(bool $on): void
    {
        $this->on = $on;
    }

    /**
     * @return int
     */
    public function getRadius(): int
    {
        return $this->radius;
    }

    /**
     * @param int $radius
     */
    public function setRadius(int $radius): void
    {
        $this->radius = $radius;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }

    /**
     * @param string $color
     */
    public function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function toString()
    {
        if ($this->on) {
            return "Speed: " . $this->speed.",
            color: " . $this->color.",radius: ".$this->radius.",fan is on";
        }else{
            return "Color : ".$this->color.", radius : ".$this->radius.", fan is off ";
        }
    }
}
