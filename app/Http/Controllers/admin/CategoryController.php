<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\user\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $Categories = Category::all();
        return view('admin.category.index', compact('Categories'));
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);

        $category = new Category;
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect(route('category.index'));
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $category=Category::where('id',$id)->first();
        return view('admin.category.edit', compact('category')); 
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name'=>'required',
            'slug'=>'required',
        ]);

        $category = Category::find($id);
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();

        return redirect(route('category.index'));
    }

    public function destroy($id)
    {
        Category::where('id', $id)->delete();
        return redirect()->back();
    }
}
