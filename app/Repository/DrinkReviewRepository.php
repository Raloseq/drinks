<?php


namespace App\Repository;


use App\Models\DrinkReview;

class DrinkReviewRepository implements DrinkReviewRepositoryInterface
{
    public function get(int $id)
    {
        return DrinkReview::where('drink_id', $id)->get();
    }

    public function add($drinkReview)
    {
        $drinkReview->save();
    }

    public function all()
    {
        return DrinkReview::all();
    }
}
