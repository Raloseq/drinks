<?php


namespace App\Repository;


use App\Models\User;

interface UserRepositoryInterface
{
    public function update(User $user, array $data);
    public function show(int $userId);
}
