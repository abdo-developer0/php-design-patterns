<?php

namespace PhpDesignPatterns\Creational\Pool;

class CarPool
{
    /**
     * The free cars list.
     * 
     * @var Car[] $freeCars
     */
    protected array $freeCars = [];

    /**
     * The busycars list.
     * 
     * @var Car[] $busyCArs
     */
    protected array $busyCArs = [];

    /**
     * Get free count.
     * 
     * @return int
     */
    public function getFreeCount(): int
    {
        return count($this->freeCars);
    }

    /**
     * Get busy count.
     * 
     * @return int
     */
    public function getBusyCount(): int
    {
        return count($this->busyCArs);
    }

    /**
     * Get instances Count.
     * 
     * @return int
     */
    public function getInstancesCount(): int
    {
        return $this->getBusyCount() + $this->getFreeCount();
    }

    /**
     * Rent a CAr.
     * 
     * @return Car
     */
    public function rentCar(): Car
    {
        if (count($this->freeCars) == 0) {
            $car = new Car;
        }
        else {
            $car = array_pop($this->freeCars);
        }

        $this->busyCArs[spl_object_hash($car)] = $car;

        return $car;
    }

    /**
     * Free a car.
     * 
     * @param Car $car The car to free.
     * @return void
     */
    public function freeCar(Car $car): void
    {
        $object_hash = spl_object_hash($car);

        if (isset($this->busyCArs[$object_hash])) {
            unset($this->busyCArs[$object_hash]);

            $this->freeCars[$object_hash] = $car;
        }

    }
}