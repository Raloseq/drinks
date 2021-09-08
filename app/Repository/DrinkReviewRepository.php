<?php


namespace App\Repository;


class DrinkReviewRepository implements DrinkReviewRepositoryInterface
{
    public function add($drinkReview)
    {
        $drinkReview->save();
    }
}
