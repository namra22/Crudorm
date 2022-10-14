<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Http\Controllers\Input;
class controllerCategory extends Controller
{
    public function index(){
        $categories=Category::get();
        return view('categories.list',['categories'=>$categories]);

    }
    
    public function view(){
        $categories=Category::get();
        return view('categories.view',['categories'=>$categories]);

    }
    public function create(){
        return view('categories.new');
    }
    public function store(Request $request){
        
        $img=$request->file('Image')->getClientOriginalName();
        $request->file('Image')->move(public_path('images'),$img);
        $request->validate(['Title'=>"required|unique:categories|max:255"]);
        $request->validate(['Price'=>"required:categories"]);
        $category=new Category;
        $category->Title=$request->Title;
        $category->Price=$request->Price;
        $category->Image=$img;
        $category->save();
        return redirect('/');
    }

    public function edit( $id){
        $category=Category::where('id',$id)->first();
        return view('categories.edit',['category'=>$category]);
    }
    public function update(Request $request, $id){
if(empty($request->file('Image'))){
    $img= $request->f;
}
else {
    $img=$request->file('Image')->getClientOriginalName();
        $request->file('Image')->move(public_path('images'),$img);
}
        $category=Category::where('id',$id)->first();
        $category->Title= $request->Title;
        $category->Price= $request->Price;
        $category->Image=$img;
        $category->save();
        return redirect('/');
    }
    public function delete( $id){
        $category=Category::where('id',$id)->first();
        $category->delete();
        return redirect('/');
    }
}