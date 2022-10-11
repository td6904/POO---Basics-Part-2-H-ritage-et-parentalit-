<?php

require_once 'Vehicle.php';

class Van extends Vehicle {

    public const ALLOWED_STATUS = [
        'in filling',
        'full',
    ];

private int $maxStock;

private int $stockLevel = 0;

public function __construct(int $maxStock, int $stockLevel)
{
    $this->maxStock = $maxStock;
    $this->stockLevel = $stockLevel;
}

public function getMaxStock(): int 
{
    return $this->maxStock;
}

public function setMaxStock(int $maxStock): void
{
    $this->maxStock = $maxStock;
}

public function getStockLevel(): int 
{
    return $this->stockLevel;
}

public function setStockLevel(int $stockLevel): void
{
    $this->stockLevel = $stockLevel;
}

public function getCurrentSpeed(): int
{
    return $this->currentSpeed;
}

public function setCurrentSpeed(int $currentSpeed): void
    {
        if($currentSpeed >= 0){
            $this->currentSpeed = $currentSpeed;
        }
    }

}