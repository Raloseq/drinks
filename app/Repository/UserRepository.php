<?php


namespace App\Repository;


use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    private User $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function update(User $user, array $data)
    {
        $user->name = $data['name'] ?? $user->name;
        $user->avatar = $data['avatar'] ?? $user->avatar;

        $user->save();
    }
}
