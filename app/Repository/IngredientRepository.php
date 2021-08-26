<?php


namespace App\Repository;


use App\Models\Ingredient;

class IngredientRepository implements IngredientRepositoryInterface
{
    private Ingredient $ingredientModel;

    public function __construct(Ingredient $ingredientModel)
    {
        $this->ingredientModel = $ingredientModel;
    }

    public function get(int $id)
    {
        return $this->ingredientModel->find($id);
    }

    public function all()
    {
        return $this->ingredientModel->get();
    }

    public function allPaginated()
    {
        return $this->ingredientModel->paginate(10);
    }

    public function filterBy(?string $phrase, ?string $type)
    {
        if ($type) {
            $query = $this->ingredientModel->where('type', $type);
        }

        if ($phrase) {
            $query->whereRaw('name like ? ', ["%$phrase%"]);
        }

        return $query->paginate(10);
    }
}
