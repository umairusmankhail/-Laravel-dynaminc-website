<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Category;

use Illuminate\Support\Facades\DB;
class ImageController extends Controller
{
    public function index(){
        $Image =Category::with('category')->get();
        return view('Image.index')->with(['Image'=>$Image]);
    }



    public function create(){
           
        $category = Category::all();
        return view('Image.create')->with(['category'=>$category]);
    }

    public function SavedData(Request $request){

        $request->validate([
            'cat_id'=> 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
         
       
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $image= $request->image->move(public_path('images'), $imageName);      
        $data = new Image();
        $data->category_id = $request->cat_id;
        $data->image = $imageName;
     
        $result= $data->save();
        if ($result) {
            return redirect()->route('Image-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $Image = Image::find($id);
      
        return view('Image.edit')->with(['Image' => $Image]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
            'cat_id' => 'required',
        ]);
        $imageName = time().'.'.$request->image->extension();  
       
        $image= $request->image->move(public_path('images'), $imageName);
    
     
        $Image = Image::find($id);
        $Image->category_id= $request->cat_id;
        $Image->image = $imageName;
        $Image->save();
         return redirect()->route('Image-index')->with('success','home Has Been updated successfully');
    }


    public function destroy($id)
    {
        $Image = Image::find($id);
        $Image->delete();
        return redirect()->route('Image-index')->with('success', 'home Data deleted successfully');
    }
  
}
