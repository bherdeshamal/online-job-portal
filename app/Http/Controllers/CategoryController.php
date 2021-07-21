<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Session;

class CategoryController extends Controller
{
    
    public function create(){
        return view('categories.add-category');
    }

    public function storeDevice(Request $request)
    {
        $this->validate($request, [
            'profile' => 'required|max:255',
            'desc' =>'required|max:255',
              ]);
        $category = new Category();
        $category->profile = request('profile');
        $category->desc = request('desc');
        $category->save();
        return redirect('/view-category')->with('success','New Profile Successfully Created');
		
    }
    public function indexc()
    {
	    $category = Category::latest()->paginate(4);
        return view('categories.view-category', ['categories'=>$category]);
    }

    public function edit($id)
    {
		$category = Category::find($id);
        return view('categories.edit', compact('category'));
    }

    public function updatec(Request $request,$id)
    {
        $this->validate($request, [
            'profile' => 'required|max:255',
            'desc' =>'required|max:255',
               ]);
         $categoryData = Category::find($id);
         $categoryData->profile = $request->profile;
         $categoryData->desc = $request->desc;
         $categoryData->save();
         return redirect('view-category')->with('success','Profile Updated successfully');
    }

    public function delete($id)
    {
        $categoryData = Category::find($id);
		$categoryData->delete();
        return redirect('view-category')->with('danger','Profile deleted successfully');
    }
    
}

