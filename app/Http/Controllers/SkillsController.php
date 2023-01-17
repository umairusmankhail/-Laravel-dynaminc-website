<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\DB;
class SkillsController extends Controller
{
    public function index(){
        
        return view('skill.index', [
            'skill' => Skill::all()
            
        ]);
    }



    public function create(){
        
        return view('skill.create');
    }

    public function SavedData(Request $request){

        $request->validate([

           'skill_name' => 'required',
           'skill_progress' => 'required',
          

        ]);
     
    
     
         
      
        $skill = new Skill();
        $skill-> skill_name= $request->skill_name;
        $skill->skill_progress=$request->skill_progress;
   
      
       $data= $skill->save();
        if ($data) {
            return redirect()->route('skill-index')

            ->with('success','skill created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $skill = Skill::find($id);
      
        return view('skill.edit')->with(['skill' => $skill]);
    }




    public function update(Request $request, $id)
    {
     
        $request->validate([

            'skill_name' => 'required',
            'skill_progress' => 'required',
           
 
         ]);
      
        $skill = Skill::find($id);
        $skill-> skill_name= $request->skill_name;
        $skill->skill_progress=$request->skill_progress;
         $skill->save();
         return redirect()->route('skill-index')->with('success','about Has Been updated successfully');
    }


    public function destroy($id)
    {
        $skill = Skill::find($id);
        $skill->delete();
       
       
        return redirect()->route('skill-index')->with('success', 'about Data deleted successfully');
    }

}
