<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\About;
use App\Models\Project;
use App\Models\Blog;
use App\Models\ServiceComment;

class FrontendController extends Controller
{
    public function tech_web_about_details(){
        $about = About::latest()->first();
        return view('frontend.about.about_details',compact('about'));
    }//end method------------------------

    public function tech_web_service_details($id){
        $service = Service::findOrFail($id);
        return view('frontend.service.service_details',compact('service'));
    }//end method------------------------

    public function tech_web_service_comment_store(Request $request){
        $service_id = $request->service_id;
        $request->validate([
            'name_english' => 'required',
            'email' => 'required|max:255|unique:service_comments,email',
            'service_comment_english' => 'required',
        ],
        [
            'name_english.required' => 'Enter Your Name Please',
            'email.required' => 'Enter Your Email Please',
            'email.unique' => 'Email is already Exists',
            'service_comment_english.required' => 'Write Your Own Comment Please',
        ]
        );

        $data = new ServiceComment();
        $data->service_id = $service_id;
        $data->name_english = $request->name_english;
        $data->email = $request->email;
        $data->service_comment_english = $request->service_comment_english;
        $data->image = fake()->imageUrl('60','60');
        $data->save();
        $notification = array(
            'message' => 'Your Comment Received and Admin will be Approved',
            'alert-type' => 'success',
        );
        return redirect()->back()->with($notification);

    }//end method---------------------------

    // proje t all mehtod
    public function tech_web_all_project(){
        $all_project = Project::where('status',1)->paginate(6);
        return view('frontend.project.all_project',compact('all_project'));
    }
    // project details all method
    public function tech_web_project_details($id){
        $project_details = Project::find($id);
        return view('frontend.project.project_details',compact('project_details'));
    }//end method----------------------------

    // Blog Frontend site===================================================
    public function tech_web_all_blogs_list(){
        $blogs = Blog::where('status',1)->paginate(6);
        return view('frontend.blog.blog_list',compact('blogs'));
    }//end method ------------------------------------------

    public function tech_web_blog_details($id){
        $blog_details = Blog::find($id);
        return view('frontend.blog.blog_details',compact('blog_details'));
    }
}
