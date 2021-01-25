<?php

namespace App\Http\Controllers;

use App\Interfaces\ColorRepositoryInterface;
use Illuminate\Http\Request;

class ColorController extends Controller
{
    private $colorRepository;

    public function __construct(ColorRepositoryInterface $colorRepository)
    {
        $this->colorRepository = $colorRepository;
    }
}
