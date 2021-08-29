<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDrink;
use App\Repository\DrinkRepositoryInterface;
use App\Repository\IngredientRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDrinksController extends Controller
{
    private DrinkRepositoryInterface $drinkRepository;

    public function __construct(DrinkRepositoryInterface $drinkRepository)
    {
        $this->drinkRepository = $drinkRepository;
    }

    public function index()
    {
    }

    public function add(AddUserDrink $request)
    {
        $data = $request->validated();

        $user = Auth::user();

        //$user->addDrink($drink);
        return redirect()
            ->route('drinks.list')
            ->with('success', 'Drink shared');
    }

    public function remove()
    {

    }
}
