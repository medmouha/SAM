<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories= Category::all();

        return view('category.index',compact('categories'));
    }

    public function create()
    {        
        return view('category.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        $category = new Category();
        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];

        $category->save();

        return redirect()->route('category.index')->with('success', 'Category created successfully.');
    }

    public function update($id)
    {
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Category not found.');
        }

        return view('category.update', compact('category'));
    }

    public function edit(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
        ]);

        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Category not found.');
        }

        $category->name = $validatedData['name'];
        $category->description = $validatedData['description'];
        
        $category->save();

        return redirect()->route('category.index')->with('success', 'Category updated successfully.');
    }

    public function delete($id)
    {
        $category = Category::find($id);
        
        if (!$category) {
            return redirect()->route('category.index')->with('error', 'Category not found.');
        }

        $category->delete();

        return redirect()->route('category.index')->with('success', 'Category deleted successfully.');
    }
}
