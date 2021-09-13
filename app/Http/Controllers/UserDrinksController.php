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
        //dd($this->drinkRepository->userDrinks());
        return view('profile.drinks.list', [
            'drinks' => $this->drinkRepository->userDrinks(),
            'drinksCount' => $this->drinkRepository->userDrinksCount()
        ]);
    }
}
