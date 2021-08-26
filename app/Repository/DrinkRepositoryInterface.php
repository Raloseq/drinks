<?php


namespace App\Repository;


interface DrinkRepositoryInterface
{
    public function get(int $id);
    public function list();
}
