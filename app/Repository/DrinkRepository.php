<?php


namespace App\Repository;


use App\Models\Drink;

class DrinkRepository implements DrinkRepositoryInterface
{
//    private Drink $drinkModel;
//
//    public function __construct(Drink $drinkModel)
//    {
//        $this->drinkModel = $drinkModel;
//    }

    public function get(int $id)
    {
        return Drink::find($id);
    }

    public function all()
    {
        //return $this->drinkModel->get();
        return Drink::all();
    }

    public function add($drink)
    {
        $drink->save();
    }
}
