<?php


namespace App\Repository;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function update(User $user, array $data)
    {
        $user->name = $data['name'] ?? $user->name;
        $user->avatar = $data['avatar'] ?? $user->avatar;

        $user->save();
    }

    public function show(int $userId)
    {
        return User::find($userId);
    }
}
