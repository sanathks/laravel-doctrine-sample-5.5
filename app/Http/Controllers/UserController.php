<?php

namespace App\Http\Controllers;

use App\Entities\User;
use App\Repositories\UserRepository;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
        $user = new User();
        $user->setName("Sam");
        $user->setMail("sam@xyz.com");

        \EntityManager::persist($user);
        \EntityManager::flush();
    }

    public function repo()
    {
        /** @var UserRepository $userRepository */
        $userRepository = \EntityManager::getRepository(User::class);
        dd($userRepository->findAll());
    }
}
