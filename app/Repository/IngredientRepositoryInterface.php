<?php


namespace App\Repository;


interface IngredientRepositoryInterface
{
    public const DEFAULT_TYPE  = 'all';
    public const TYPES = ['all','spirits', 'liqueurs','wines&champagnes','beers','ciders','syrups','softdrinks','barstock','fruits','home'];

    public function get(int $id);
    public function all();
    public function allPaginated();
    public function filterBy(?string $phrase, string $type);
}
