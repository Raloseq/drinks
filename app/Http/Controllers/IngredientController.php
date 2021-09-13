<?php

namespace App\Http\Controllers;

use App\Repository\IngredientRepositoryInterface;
use Illuminate\Http\Request;

class IngredientController extends Controller
{
    private IngredientRepositoryInterface $ingredientRepository;

    public function __construct(IngredientRepositoryInterface $ingredientRepository)
    {
        $this->ingredientRepository = $ingredientRepository;
    }

    public function index(Request $request)
    {
        $type = $request->get('type', IngredientRepositoryInterface::DEFAULT_TYPE);
        $phrase = $request->get('phrase');

        $result = $this->ingredientRepository->filterBy($phrase,$type);
        $result->appends([
            'phrase' => $phrase,
            'type' => $type
        ]);


        return view('ingredients.list', [
            'ingredients' => $type == IngredientRepositoryInterface::DEFAULT_TYPE ?
                $this->ingredientRepository->allPaginated() : $result,
            'type' => $type,
            'phrase' => $phrase
        ]);
    }
}
