<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Review;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $featuredProducts = Product::all();
        $latestPosts = Product::latest()->take(3)->get();

        return view('accueil', compact('featuredProducts', 'latestPosts'));
    }
}
