<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Card;
use Illuminate\Support\Facades\DB;
class CardController extends Controller
{
    public function index(){
        
        return view('Card.index', [
            'Card' => Card::all()
            
        ]);
    }



    public function create(){
        
        return view('Card.create');
    }

    public function SavedData(Request $request){

        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
       
        ]);
        $imageName = time().'.'.$request->image->extension();  
       
        $image= $request->image->move(public_path('images'), $imageName);
    
     
         
      
        $Card = new Card();

        $Card->image = $imageName;
     
       $data= $Card->save();
        if ($data) {
            return redirect()->route('Card-index')

            ->with('success','Product created successfully.');

        } else{
            return back()->with('fail', 'savefail');

        }

    }





    public function edit($id)
    {

        $Card = Card::find($id);
      
        return view('Card.edit')->with(['Card' => $Card]);
    }




    public function update(Request $request, $id)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,JPG,gif,svg|max:2048',
          
        ]);
        $imageName = time().'.'.$request->image->extension();  
       
        $image= $request->image->move(public_path('images'), $imageName);
    
     
        $Card = Card::find($id);

        $Card->image = $imageName;
        $Card->save();
         return redirect()->route('Card-index')->with('success','home Has Been updated successfully');
    }


    public function destroy($id)
    {
        $Card = Card::find($id);
        $Card->delete();
        return redirect()->route('Card-index')->with('success', 'home Data deleted successfully');
    }
  
}
