<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDrink;
use App\Http\Requests\EditUserDrink;
use App\Models\Drink;
use App\Models\User;
use App\Repository\DrinkRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DrinkController extends Controller
{
    private DrinkRepositoryInterface $drinkRepository;

    public function __construct(DrinkRepositoryInterface $drinkRepository)
    {
        $this->drinkRepository = $drinkRepository;
    }

    public function index()
    {
        return view('drinks.list', [
           'drinks' => $this->drinkRepository->all(),
        ]);
    }

    public function show(int $drinkId)
    {
        return view('drinks.show', [
            'drink' => $this->drinkRepository->get($drinkId)
        ]);
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(AddUserDrink $request)
    {
        $drink = new Drink($request->validated());

        $drink->author = Auth::id();
        $drink->author_name = Auth::user()->name;
        $this->drinkRepository->add($drink);

        return redirect()
            ->route('drinks')
            ->with('success', 'Drink created');
    }

    public function edit(Drink $drink)
    {
        return view('profile.drinks.edit', [
            'drink' => $drink
        ]);
    }

    public function update(EditUserDrink $request, Drink $drink)
    {
        Gate::authorize('update', $drink);

        $drink->fill($request->validated());

        $this->drinkRepository->update($drink);

        return redirect()
            ->route('profile.drinks')
            ->with('success', 'Drink updated');
    }

    public function destroy(int $drinkId)
    {
        $this->drinkRepository->destroy($drinkId);

        return redirect()
            ->route('profile.drinks')
            ->with('success', 'Drink removed');
    }
}
