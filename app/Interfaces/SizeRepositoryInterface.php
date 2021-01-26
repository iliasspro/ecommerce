<?php

namespace App\Interfaces;

interface SizeRepositoryInterface
{
    //admin
    public function addSize($request);

    public function updateSize($request,$id);

    public function deleteSize($id);

    public function searchSize($keyword);

    public function getAllSizes();

    public function getSizeById($id);
}