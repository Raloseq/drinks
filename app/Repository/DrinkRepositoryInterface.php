<?php


namespace App\Repository;


use App\Models\Drink;

interface DrinkRepositoryInterface
{
    public function get(int $id);
    public function all();
    public function add($drink);
}
