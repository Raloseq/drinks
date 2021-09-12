<?php


namespace App\Repository;


interface DrinkReviewRepositoryInterface
{
    public function get(int $id);
    public function add($drinkReview);
    public function all();
}
