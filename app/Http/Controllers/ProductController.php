<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Request $request)
{
    $categories = Category::all(); // Récupère toutes les catégories

    $categoryId = $request->input('category');
    $search = $request->input('search');

    $query = Product::query();

    if ($categoryId) {
        $query->where('categorie_id', $categoryId);
        $category = Category::find($categoryId); // Trouve la catégorie actuelle
    } else {
        $category = null; // Définit $category à null si aucune catégorie n'est sélectionnée
    }

    if ($search) {
        $query->where(function ($q) use ($search) {
            $q->where('name', 'like', "%$search%");
        });
    }

    $products = $query->paginate(12); // Pagination des produits

    return view('products.index', compact('categories', 'products', 'category'));
}



    // Affiche les détails d'un produit spécifique
    public function show(Product $product)
    {
        return response()->json([
            'name' => $product->name,
            'description' => $product->description, // Assurez-vous que ce champ existe dans le modèle
            'image_url' => $product->image_url, // Utilisation de l'accesseur
            'price' => $product->price
        ]);
    }

    // Affiche les produits par catégorie
    public function byCategory(Category $category)
    {
        $products = $category->products()->paginate(12);
        return view('products.index', compact('products', 'category'));
    }
}
