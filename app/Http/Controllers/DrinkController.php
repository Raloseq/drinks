<?php

namespace App\Http\Controllers;

use App\Models\Drink;
use App\Repository\DrinkRepositoryInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\AbstractList;

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
           'drinks' => $this->drinkRepository->list(),
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

    public function store(Request $request)
    {
        $drink = new Drink($request->all());

        $drink->author = Auth::id();

        $drink->save();
        return redirect()
            ->route('drinks')
            ->with('success', 'Drink created');
    }

}
