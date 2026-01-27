<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function index(){
        return view("Tag.index");
    }

    public function create(){
        return view("Tag.create");
    }

    public function store(Request $request){
        $validated = $request->validate([
            "name" => "required"
        ]);

        Tag::create($validated);

        return view("Tag.index");
    }

    public function destroy(Int $id){
        Tag::delete();

        return view("Tag.index");
    }

    public function update(){
        return view("Tag.update");
    }

    public function edit(Request $request, Int $id){
        $validated = $request->validate([
            "nome" => "required "
        ]);

        Tag::update($validated);

        return view("Tag.index");
    }

    public function show(){
        return view( "Tag.show");
    }
}
