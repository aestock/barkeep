<?php

namespace App\Http\Controllers;

use App\Category;
use App\Flavor;
use App\Spirit;
use Illuminate\Http\Request;

use App\Http\Requests;

class ProfileController extends Controller
{
    public function getWords()
    {
        return view('home',
            ['flavors' => Flavor::all(),
            'categories' =>  Category::all(),
            'spirits' => Spirit::all()]);
    }
}
