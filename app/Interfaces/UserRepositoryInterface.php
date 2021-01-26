<?php

namespace App\Interfaces;

interface UserRepositoryInterface
{
    public function addUser($request);

    public function updateUser($request,$id);

    public function deleteUser($id);
    
    public function searchUser($keyword);

    public function getAllUsers();

    public function getUserById($id);
}