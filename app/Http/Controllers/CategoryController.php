<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function Category()
    {
          return view('categories.category');
    }

    public function addCategory(Request $request){
        $this->validate($request,[
            'category' => 'required'
        ]);
        $category = new Category;
        $category->category_name = $request->input('category');
        $category->description = $request->input('description');
        $category->save();
        return redirect('/category')->with('response','Category added Successfully !!');

    }
}
