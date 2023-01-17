<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
class CategoryController extends Controller
{
    public function index(){
        
        return view('Category.index', [
            'Category' => Category::all()
            
        ]);
    }



    public function create(){
        
        return view('Category.create');
    }

    public function SavedData(Request $request){

        $request->validate([
            'cat_name' => 'required',
       
        ]);
       
    
     
         
      
        $Category = new Category();

        $Category->cat_name = $request->cat_name;
     
       $data= $Category->save();
        if ($data) {
            return redirect()->route('Category-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $Category = Category::find($id);
      
        return view('Category.edit')->with(['Category' => $Category]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'cat_name' => 'required',
       
        ]);
       
    
     
        $Category = Category::find($id);

        $Category->cat_name = $request->cat_name;
        $Category->save();
         return redirect()->route('Category-index')->with('success','home Has Been updated successfully');
    }


    public function destroy($id)
    {
        $Category = Category::find($id);
        $Category->delete();
        return redirect()->route('Category-index')->with('success', 'home Data deleted successfully');
    }
  
}
