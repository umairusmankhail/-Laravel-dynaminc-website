<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    public function index(){
        
        return view('home.index', [
            'home' => Home::all()
            
        ]);
    }



    public function create(){
        
        return view('home.create');
    }

    public function SavedData(Request $request){

        $request->validate([
            'bgimage' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
            'name' => 'required',
        ]);
        $imageName = time().'.'.$request->bgimage->extension();  
       
        $image= $request->bgimage->move(public_path('images'), $imageName);
    
     
         
      
        $home = new Home();
        $home->name = $request->name;
        $home->home_description =$request->home_description;
        $home->bgimage = $imageName;
     
       $data= $home->save();
        if ($data) {
            return redirect()->route('home-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $home = Home::find($id);
      
        return view('home.edit')->with(['home' => $home]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'bgimage' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
            'name' => 'required',
        ]);
        $imageName = time().'.'.$request->bgimage->extension();  
       
        $image= $request->bgimage->move(public_path('images'), $imageName);
    
     
        $home = Home::find($id);
        $home->name = $request->name;
        $home->home_description=$request->home_description;
        $home->bgimage = $imageName;
        $home->save();
         return redirect()->route('home-index')->with('success','home Has Been updated successfully');
    }


    public function destroy($id)
    {
        $home = Home::find($id);
        $home->delete();
       
       
        return redirect()->route('home-index')->with('success', 'home Data deleted successfully');
    }
    public function show(){
        $home = DB::table('homes')->get();
       
        return view('website.page')->with(['home' => $home]);
    }
}
