<?php

namespace PhpDesignPatterns\Structural\DataMapper;

use PhpDesignPatterns\Structural\DataMapper\Contracts\DBManagerInterface;

class ArrayDBManager implements DBManagerInterface
{
    /**
     * Data storage.
     * 
     * @var array $data
     */
    protected array $data;

    /**
     * Initialize data.
     * 
     * @param array<array> $data
     * @return void
     */
    public function __construct(array $data)
    {
        $this->data = $data;
    }

    /**
     * Push new data to database.
     */
    public function insert(array $item): bool
    {
        $this->data[] = $item;
        return true;
    }

    /**
     * Retrieve all data from database.
     */
    public function all(): array
    {
        return $this->data;
    }

    /**
     * Find about one item.
     */
    public function find(string $key, mixed $value): ?array
    {
        foreach ($this->data as $item) {
            $itemValue = $item[$key] ?? null;

            if ($itemValue == $value) {
                return $item;
            }
        }
        return null;
    }

    /**
     * update item.
     */
    public function update(string $key, mixed $value, array $data): bool
    {
        foreach ($this->data as $index => $item) {
            $itemValue = $item[$key] ?? null;

            if ($itemValue == $value) {
                $this->data[$index] = $data;
                return true;
            }
        }

        return false;
    }

    /**
     * Delete item.
     */
    public function delete(string $key, mixed $value): bool
    {
        foreach ($this->data as $index => $item) {
            $itemValue = $item[$key] ?? null;

            if ($itemValue == $value) {
                unset($this->data[$index]);
                return true;
            }
        }

        return false;
    }
}