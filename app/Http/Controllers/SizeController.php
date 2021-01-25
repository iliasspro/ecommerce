<?php

namespace App\Http\Controllers;

use App\Interfaces\SizeRepositoryInterface;
use Illuminate\Http\Request;

class SizeController extends Controller
{
    private $sizeRepository;

    public function __construct(SizeRepositoryInterface $sizeRepository)
    {
        $this->sizeRepository = $sizeRepository;
    }
}
