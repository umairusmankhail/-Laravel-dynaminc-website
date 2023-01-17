<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use Illuminate\Support\Facades\DB;
class AboutController extends Controller
{
    public function index(){
        
        return view('about.index', [
            'about' => About::all()
            
        ]);
    }



    public function create(){
        
        return view('about.create');
    }

    public function SavedData(Request $request){

        $request->validate([

           'paragraph_one' => 'required',
           'paragraph_two' => 'required',
           'age' => 'required',
           'website' => 'required',
           'degree' => 'required',
           'phone' => 'required',
           'freelance' => 'required',
           'city' => 'required',
           'birthday' => 'required',
            'email' => 'required',

        ]);
     
    
     
         
      
        $about = new About();
        $about->paragraph_one = $request->paragraph_one;
        $about->paragraph_two =$request->paragraph_two;
        $about->birthday= $request->birthday;
        $about-> website= $request->website;
        $about->age=$request->age;
        $about->degree=$request->degree;
        $about->phone=$request->phone;
        $about->freelance=$request->freelance;
        $about->email=$request->email;
        $about->city=$request->city;
       $data= $about->save();
        if ($data) {
            return redirect()->route('about-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $about = about::find($id);
      
        return view('about.edit')->with(['about' => $about]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
        'paragraph_one' => 'required',
        'paragraph_two' => 'required',
        'age' => 'required',
        'website' => 'required',
        'degree' => 'required',
        'phone' => 'required',
        'freelance' => 'required',
        'city' => 'required',
        'birthday' => 'required',
         'email' => 'required',
        ]); 
        $about = About::find($id);
        $about->paragraph_one = $request->paragraph_one;
        $about->paragraph_two =$request->paragraph_two;
        $about->birthday= $request->birthday;
        $about-> website= $request->website;
        $about->age=$request->age;
        $about->degree=$request->degree;
        $about->phone=$request->phone;
        $about->freelance=$request->freelance;
        $about->email=$request->email;
        $about->city=$request->city;
        $about->save();
         return redirect()->route('about-index')->with('success','about Has Been updated successfully');
    }


    public function destroy($id)
    {
        $about = About::find($id);
        $about->delete();
       
       
        return redirect()->route('about-index')->with('success', 'about Data deleted successfully');
    }

}
