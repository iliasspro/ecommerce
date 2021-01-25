<?php

namespace App\Http\Controllers;

use App\Interfaces\PhotoRepositoryInterface;
use Illuminate\Http\Request;

class PhotoController extends Controller
{
    private $photoRepository;

    public function __construct(PhotoRepositoryInterface $photoRepository)
    {
        $this->photoRepository = $photoRepository;
    }
}
