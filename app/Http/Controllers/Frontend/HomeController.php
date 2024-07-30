<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;
use App\Models\Project;
use App\Models\Blog;

class HomeController extends Controller
{
    public function tech_web_home_index()
    {
        
        $services = Service::orderBy('id','ASC')->limit(3)->get();   
        // dd($services);    
        $about = About::latest()->first();      
        $projects = Project::where('status',1)->orderBy('id','ASC')->limit(6)->get();    
        $blogs = Blog::where('status',1)->orderBy('id','ASC')->limit(6)->get();    
       
        return view('frontend.home.index',compact('about','services','projects','blogs'));
    }
}
