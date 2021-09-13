<?php

namespace App\Http\Controllers;

use App\Http\Requests\AddUserDrink;
use App\Http\Requests\EditUserDrink;
use App\Models\Drink;
use App\Repository\DrinkRepositoryInterface;
use App\Repository\DrinkReviewRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Storage;

class DrinkController extends Controller
{
    private DrinkRepositoryInterface $drinkRepository;
    private DrinkReviewRepositoryInterface $drinkReviewRepository;

    public function __construct(DrinkRepositoryInterface $drinkRepository,
                                DrinkReviewRepositoryInterface $drinkReviewRepository)
    {
        $this->drinkRepository = $drinkRepository;
        $this->drinkReviewRepository = $drinkReviewRepository;
    }

    public function index()
    {
        return view('drinks.list', [
           'drinks' => $this->drinkRepository->all()
        ]);
    }

    public function show(int $drinkId)
    {
        return view('drinks.show', [
            'drink' => $this->drinkRepository->get($drinkId),
            'reviews' => $this->drinkReviewRepository->get($drinkId),
        ]);
    }

    public function create()
    {
        return view('drinks.create');
    }

    public function store(AddUserDrink $request)
    {
        $drink = new Drink($request->validated());
        $path = $drink['image']->store('drinks', 'public');
        $drink['image'] = $path;

        $drink->author = Auth::id();
        $drink->author_name = Auth::user()->name;
        $this->drinkRepository->add($drink);

        return redirect()
            ->route('drinks')
            ->with('success', 'Drink created');
    }

    public function edit(Drink $drink)
    {
        Gate::authorize('view', $drink);

        return view('profile.drinks.edit', [
            'drink' => $drink
        ]);
    }

    public function update(EditUserDrink $request, Drink $drink)
    {
        Gate::authorize('update', $drink);

        $drink->fill($request->validated());

        $path = null;
        if (!empty($drink['image'])) {
            $path = $drink['image']->store('drinks', 'public');

            if ($path == null) {
                $drink['image'] = $path;
            } else {
                Storage::disk('public')->delete($drink->image);
                $drink['image'] = $path;
            }
        }

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
