<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view(view: "Category.index");
    }

    public function create(){
        return view("Category.create");
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => "required"
        ]);

        Category::create($validated);

        return view("Category.index");
    }

    public function destroy(Int $id){
        Category::delete();

        return view("Category.index");
    }

    public function update(){
        return view("Category.update");
    }

    public function edit(Request $request, Int $id){
        $validated = $request->validate([
            "nome" => "required "
        ]);

        Category::update($validated);

        return view("Category.index");
    }

    public function show(){

    }
}
