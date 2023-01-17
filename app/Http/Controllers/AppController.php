<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\App;
use Illuminate\Support\Facades\DB;
class AppController extends Controller
{
    public function index(){
        
        return view('App.index', [
            'App' => App::all()
            
        ]);
    }



    public function create(){
        
        return view('App.create');
    }

    public function SavedData(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
       
        ]);
        $imageName = time().'.'.$request->image->extension();  
       
        $image= $request->image->move(public_path('images'), $imageName);
    
     
         
      
        $App = new App();

        $App->image = $imageName;
     
       $data= $App->save();
        if ($data) {
            return redirect()->route('App-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $App = App::find($id);
      
        return view('App.edit')->with(['App' => $App]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
          
        ]);
        $imageName = time().'.'.$request->image->extension();  
       
        $image= $request->image->move(public_path('images'), $imageName);
    
     
        $App = App::find($id);

        $App->image = $imageName;
        $App->save();
         return redirect()->route('App-index')->with('success','home Has Been updated successfully');
    }


    public function destroy($id)
    {
        $App = App::find($id);
        $App->delete();
        return redirect()->route('App-index')->with('success', 'home Data deleted successfully');
    }
  
}
