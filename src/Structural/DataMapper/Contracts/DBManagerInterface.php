<?php

namespace PhpDesignPatterns\Structural\DataMapper\Contracts;

interface DBManagerInterface
{
    /**
     * Push new data to database.
     */
    public function insert(array $item): bool;

    /**
     * Retrieve all data from database.
     */
    public function all(): array;

    /**
     * Find about one item.
     */
    public function find(string $id, mixed $data): ?array;

    /**
     * update item.
     */
    public function update(string $id, mixed $value, array $item): bool;

    /**
     * Delete item.
     */
    public function delete(string $id, mixed $value): bool;
}