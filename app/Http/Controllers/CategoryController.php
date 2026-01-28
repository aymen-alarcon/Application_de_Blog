<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view( "Category.index", compact("categories"));
    }

    public function create(){
        return view("Category.create");
    }

    public function store(Request $request){
        $validated = $request->validate([
            "nom" => "required",
            "description" => "required"
        ]);

        Category::create($validated);

        return redirect()->route("categories.index");
    }

    public function destroy(Category $category){
        Category::delete();

        return view("Category.index");
    }

    public function edit(Category $category){
        return view("Category.edit", compact("category"));
    }

    public function update(Request $request, Category $category){
        $validated = $request->validate([
            "nom" => "required",
            "description" => "required"
        ]);

        $category->update($validated);

        return redirect()->route("categories.index");
    }

    public function show(){

    }
}
