<?php

namespace App\Http\Controllers;

use App\Interfaces\UserRepositoryInterface;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function addUser(Request $request){
        $Action = $this->userRepository->addUser($request);

        if($Action)
        return redirect("/")->with('status','success');
        else
        return redirect("/add")->with('status','Try again');
    }
}
