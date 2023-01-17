<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;
class ContactController extends Controller
{
    public function index(){
        
        return view('contact.index', [
            'contact' => Contact::all()
            
        ]);
    }



    public function create(){
        
        return view('contact.create');
    }

    public function SavedData(Request $request){

        $request->validate([

           'email' => 'required',
           'contact' => 'required',
           'location' => 'required',

        ]);
     
    
     
         
      
        $contact = new Contact();
        $contact-> contact= $request->contact;
        $contact-> email= $request->email; 
        $contact-> location= $request->location;
   
      
       $data= $contact->save();
        if ($data) {
            return redirect()->route('contact-index')

            ->with('success','Contact created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $contact = Contact::find($id);
      
        return view('contact.edit')->with(['contact' => $contact]);
    }




    public function update(Request $request, $id)
    {
     
        $request->validate([

            'email' => 'required',
            'contact' => 'required',
            'location' => 'required',
 
         ]);
      
        $contact = Contact::find($id);
        $contact-> contact= $request->contact;
        $contact-> email= $request->email; 
        $contact-> location= $request->location;
         $contact->save();
         return redirect()->route('contact-index')->with('success','about Has Been updated successfully');
    }


    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();
       
       
        return redirect()->route('contact-index')->with('success', 'about Data deleted successfully');
    }

}
