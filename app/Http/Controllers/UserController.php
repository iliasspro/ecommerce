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
     return $this->userRepository->addUser($request);
    }

    public function getAllUsers(){
     return $this->userRepository->getAllUsers();
    }

    public function updateUser(Request $request,$id){
        return $this->userRepository->updateUser($request,$id);
    }

    public function deleteUser($id){
        return $this->userRepository->deleteUser($id);
    }
    
    public function searchUser($id){
        return $this->userRepository->searchUser($id);
    }

    public function getUserById($id){
        return $this->userRepository->getUserById($id);
    }
}
