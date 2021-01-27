<?php

namespace App\Repositories;

use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function addUser($request){
            
        $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "username" => "required",
        ]);

        $user = new User();

        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->photo = $request->get("photo");
        $user->save();
    }

    public function updateUser($request,$id){
        
        $user = User::findOrFail($id);

        $user->name = $request->get("name");
        $user->email = $request->get("email");
        $user->username = $request->get("username");
        $user->password = $request->get("password");
        $user->photo = $request->get("photo");
        $user->role = $request->get("photo");
        $user->save();
    }

    public function deleteUser($id){
        $user = User::findOrFail($id);
        $user->delete();
    }
    
    public function searchUser($id){
        $user = User::where('id', $id)->get();
        return response()->json([
            'data' => $user
        ]);
    }

    public function getAllUsers(){

        $users = User::all();

        return $users;

    }

    public function getUserById($id){
        $user = User::findOrFail($id);
        return $user;
    }
}