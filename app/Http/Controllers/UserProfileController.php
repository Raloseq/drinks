<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateUserProfile;
use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        return view('profile.profile',[
            'user' => Auth::user()
        ]);
    }

    public function edit()
    {
        return view('profile.edit', [
            'user' => Auth::user()
        ]);
    }

    public function update(UpdateUserProfile $request)
    {
        $user = Auth::user();
        $data = $request->validated();
        $path = null;
        if (!empty($data['avatar'])) {
            $path = $data['avatar']->store('avatars', 'public');

            if ($path == null) {
                $data['avatar'] = $path;
            } else {
                Storage::disk('public')->delete($user->avatar);
                $data['avatar'] = $path;
            }
        }
        $this->userRepository->update($user,$data);

        return redirect()
            ->route('profile.edit')
            ->with('success', 'Profile updated');
    }

    public function delete()
    {

    }
}
