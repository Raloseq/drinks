<?php


namespace App\Repository;


use App\Models\Drink;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

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

    public function allPaginated()
    {
        return Drink::all()->paginate(10);
    }

    public function add($drink)
    {
        $drink->save();
    }

    public function userDrinks()
    {
        return Drink::where('author', Auth::id())->get();
    }

    public function userDrinksCount()
    {
        return Drink::where('author', Auth::id())->count();
    }
}
