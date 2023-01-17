<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use App\Models\Home;
use App\Models\Fact;
use App\Models\About;
use App\Models\Skill;
use App\Models\App;
use App\Models\Image;
use App\Models\Card;
use App\Models\Category;


class WebController extends Controller
{
    public function index(){
        $contact = Contact::all();
        $skill = Skill::all();
        $home = Home::all();
        $fact = Fact::all();
        $about = About::all();
      
        $Image =Category::with('category')->get();
        return view('website.page')->with(['contact'=>$contact,'skill'=>$skill,'home'=>$home,'fact'=>$fact,'about'=>$about,'Image'=>$Image]);
    
    }
}
