<?php

namespace App\Http\Controllers;

use App\Interfaces\CategorieRepositoryInterface;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    private $categorieRepository;

    public function __construct(CategorieRepositoryInterface $categorieRepository)
    {
        $this->categorieRepository = $categorieRepository;
    }
}
