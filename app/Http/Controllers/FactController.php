<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fact;
use Illuminate\Support\Facades\DB;
class FactController extends Controller
{
    public function index(){
        
        return view('fact.index', [
            'fact' => Fact::all()
            
        ]);
    }



    public function create(){
        
        return view('fact.create');
    }

    public function SavedData(Request $request){

        $request->validate([

           'fact_paragraph' => 'required',
           'happy_client' => 'required',
           'project' => 'required',
           'workers' => 'required',
           'hours_support' => 'required',
          

        ]);
     
    
     
         
      
        $fact = new Fact();
        $fact->fact_paragraph = $request->fact_paragraph;
        $fact->happy_client =$request->happy_client;
        $fact->project= $request->project;
        $fact-> workers= $request->workers;
        $fact->hours_support=$request->hours_support;
   
      
       $data= $fact->save();
        if ($data) {
            return redirect()->route('fact-index')

            ->with('success','Fact created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $fact = Fact::find($id);
      
        return view('fact.edit')->with(['fact' => $fact]);
    }




    public function update(Request $request, $id)
    {
     
        $request->validate([

            'fact_paragraph' => 'required',
            'happy_client' => 'required',
            'project' => 'required',
            'workers' => 'required',
            'hours_support' => 'required',
           
 
         ]);
        $fact = Fact::find($id);
        $fact->fact_paragraph = $request->fact_paragraph;
        $fact->happy_client =$request->happy_client;
        $fact->project= $request->project;
        $fact-> workers= $request->workers;
        $fact->hours_support=$request->hours_support;
        $fact->save();
         return redirect()->route('fact-index')->with('success','about Has Been updated successfully');
    }


    public function destroy($id)
    {
        $fact = Fact::find($id);
        $fact->delete();
       
       
        return redirect()->route('fact-index')->with('success', 'about Data deleted successfully');
    }

}
