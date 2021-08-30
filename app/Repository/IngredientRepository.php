<?php


namespace App\Repository;


use App\Models\Ingredient;
use App\Helpers;

class IngredientRepository implements IngredientRepositoryInterface
{
    public function get(int $id)
    {
        return Ingredient::find($id);
    }

    public function all()
    {
        return Ingredient::all();
    }

    public function allPaginated()
    {
        return Helpers::paginate(Ingredient::all());
    }

    public function filterBy(?string $phrase, ?string $type)
    {
        if ($type) {
            $query = Ingredient::where('type', $type);
        }

        if ($phrase) {
            $query->whereRaw('name like ? ', ["%$phrase%"]);
        }

        return $query->paginate(10);
    }
}
