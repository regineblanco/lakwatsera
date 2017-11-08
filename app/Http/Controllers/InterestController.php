<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Interest;

class InterestController extends Controller
{

    public function view()
    {
    	$categories = Category::all();

    	return view('questions.second', compact('categories'));
    }
}
