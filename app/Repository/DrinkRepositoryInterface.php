<?php


namespace App\Repository;


use App\Models\Drink;

interface DrinkRepositoryInterface
{
    public function get(int $id);
    public function all();
    public function allPaginated();
    public function add($drink);
    public function update($drink);
    public function userDrinks();
    public function userDrinksCount();
}
