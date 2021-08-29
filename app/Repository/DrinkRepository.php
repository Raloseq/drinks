<?php


namespace App\Repository;


use App\Models\Drink;

class DrinkRepository implements DrinkRepositoryInterface
{
    public function get(int $id)
    {
        return Drink::find($id);
    }

    public function all()
    {
        return Drink::all();
    }

    public function add($drink)
    {
        $drink->save();
    }
}
