<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PortfolioController extends Controller
{
    public function index(){

        $portfolioImages = File::files(public_path('images/portfolio'));

        $imageFiles = array_map(function ($file) {
           return $file->getFilename();
        }, $portfolioImages);

        return view('portfolio.view', compact('imageFiles'));
    }
}
