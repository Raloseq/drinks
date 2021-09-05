<?php


namespace App\Http\Controllers;


use App\Repository\UserRepositoryInterface;
use Illuminate\Support\Facades\Gate;

class UserController extends Controller
{
    private UserRepositoryInterface $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        Gate::authorize('admin');

        return view('users.users', [
           'users' => $this->userRepository->allPaginated()
        ]);
    }

    public function show(int $userId)
    {
        return view('users.show', [
            'user' => $this->userRepository->show($userId)
        ]);
    }

    public function destroy(int $userId)
    {
        $this->userRepository->destroy($userId);

        return redirect()
            ->route('users')
            ->with('success', 'User deleted');
    }
}
