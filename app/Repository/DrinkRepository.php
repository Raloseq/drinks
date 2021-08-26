<?php


namespace App\Repository;


use App\Models\Drink;

class DrinkRepository implements DrinkRepositoryInterface
{
    private Drink $drinkModel;

    public function __construct(Drink $drinkModel)
    {
        $this->drinkModel = $drinkModel;
    }

    public function get(int $id)
    {
        return $this->drinkModel->find($id);
    }

    public function list()
    {
        return $this->drinkModel->get();
    }
}
