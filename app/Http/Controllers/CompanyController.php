<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Company;
use Session;

class CompanyController extends Controller
{
   
    public function create(){
        return view('companies.add-company');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            
            'profile' => 'required|max:255',
            'desc' =>'required|max:255',
            'name' => 'required|max:255',
            'type' =>'required|max:255',
            'Location' => 'required|max:255',
            'requirement' =>'required|max:255',
              ]);
        $category = new Company();
        $category->name = request('name');
        $category->desc = request('desc');
        $category->profile = request('profile');
        $category->type = request('type');
        $category->Location = request('Location');
        $category->requirement = request('requirement');
        $category->save();
        Session::flash('success','New Company Details Added Successfully.');
        return redirect('/view-company');
		
    }
    public function index()
    {
	    $category = Company::latest()->paginate(4);
        return view('companies.view-company', ['categories'=>$category]);
    }

    public function editcompany($id)
    {
		$category = Company::find($id);
        return view('companies.edit', compact('category'));
    }

    public function updatecompany(Request $request,$id)
    {
        $this->validate($request, [
            'profile' => 'required|max:255',
            'desc' =>'required|max:255',
            'name' => 'required|max:255',
            'type' =>'required|max:255',
            'Location' => 'required|max:255',
            'requirement' =>'required|max:255',
               ]);
         $categoryData = Company::find($id);
         $categoryData->name = $request->name;
         $categoryData->desc = $request->desc;
         $categoryData->profile = $request->profile;
         $categoryData->type = $request->type;
         $categoryData->Location = $request->Location;
         $categoryData->requirement = $request->requirement;
         $categoryData->save();
         Session::flash('success','Company Details Updated Successfully.');
         return redirect('view-company');
    }

    public function deletecompany($id)
    {
        $categoryData = Company::find($id);
		$categoryData->delete();
        Session::flash('danger','Company Deleted Successfully.');
        return redirect('view-company');
    }
    
}
