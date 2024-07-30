<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use Carbon\Carbon;
use Intervention\Image\Facades\Image;

class ProjectController extends Controller
{
    public function tech_web_all_project(){
        $projects = Project::orderBy('id','DESC')->get();
        return view('backend.project.all_project',compact('projects'));
    }

    public function tech_web_add_project()
    {
        return view('backend.project.add_project');
    } //end method--------------------------

    public function tech_web_project_store(Request $request)
    {
        if ($request->hasFile('main_image')) {
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->resize(335, 235)->save('backend/project/main_image/' . $main_image_name);
            $main_image_url = 'backend/project/main_image/' . $main_image_name;
        }
        if ($request->hasFile('banner_image')) {
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->resize(1920, 920)->save('backend/project/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/project/banner_image/' . $banner_image_name;
        }
        if ($request->hasFile('details_image1')) {
            $details_image1 = $request->file('details_image1');
            $details_image1_name = hexdec(uniqid()) . '.' . $details_image1->getClientOriginalExtension();
            Image::make($details_image1)->resize(690, 440)->save('backend/project/details_images/' . $details_image1_name);
            $details_image1_url = 'backend/project/details_images/' . $details_image1_name;
        }
        if ($request->hasFile('details_image2')) {
            $details_image2 = $request->file('details_image2');
            $details_image2_name = hexdec(uniqid()) . '.' . $details_image2->getClientOriginalExtension();
            Image::make($details_image2)->resize(870, 370)->save('backend/project/details_images/' . $details_image2_name);
            $details_image2_url = 'backend/project/details_images/' . $details_image2_name;
        }
        if ($request->hasFile('details_image3')) {
            $details_image3 = $request->file('details_image3');
            $details_image3_name = hexdec(uniqid()) . '.' . $details_image3->getClientOriginalExtension();
            Image::make($details_image3)->resize(870, 370)->save('backend/project/details_images/' . $details_image3_name);
            $details_image3_url = 'backend/project/details_images/' . $details_image3_name;
        }

        Project::insert([
            'title_english' => $request->title_english,
            'title_bangla' => $request->title_bangla,

            'short_des_eng' => $request->short_des_eng,
            'short_des_bng' => $request->short_des_bng,
            'long_des1_eng' => $request->long_des1_eng,
            'long_des1_bng' => $request->long_des1_bng,
            'long_des2_eng' => $request->long_des2_eng,
            'long_des2_bng' => $request->long_des2_bng,
            'long_des3_eng' => $request->long_des3_eng,
            'long_des3_bng' => $request->long_des3_bng,

            'main_image' => $main_image_url ?? null,
            'banner_image' => $banner_image_url ?? null,
            'details_image1' => $details_image1_url ?? null,
            'details_image2' => $details_image2_url ?? null,
            'details_image3' => $details_image3_url ?? null,
            'created_at' => Carbon::now(),
        ]);
        $notification = array(
            'message' => 'Project inserted Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.project')->with($notification);
    } //end method---------------------------------------------

    public function tec_web_edit_project($id)
    {
        $edit_project = Project::findOrFail($id);
        return view('backend.project.edit_project', compact('edit_project'));
    } //end method------------------------------------------

    public function tec_web_project_update(Request $request)
    {
        $id = $request->id;
        $image = Project::findOrFail($id);
        $data = array();

        if ($request->hasFile('main_image')) {
            @unlink($image->main_image);
            $main_image = $request->file('main_image');
            $main_image_name = hexdec(uniqid()) . '.' . $main_image->getClientOriginalExtension();
            Image::make($main_image)->resize(335, 235)->save('backend/project/main_image/' . $main_image_name);
            $main_image_url = 'backend/project/main_image/' . $main_image_name;
            $data['main_image'] = $main_image_url;
        }
        if ($request->hasFile('banner_image')) {
            @unlink($image->banner_image);
            $banner_image = $request->file('banner_image');
            $banner_image_name = hexdec(uniqid()) . '.' . $banner_image->getClientOriginalExtension();
            Image::make($banner_image)->resize(1920, 920)->save('backend/project/banner_image/' . $banner_image_name);
            $banner_image_url = 'backend/project/banner_image/' . $banner_image_name;
            $data['banner_image'] = $banner_image_url;
        }
        if ($request->hasFile('details_image1')) {
            @unlink($image->details_image1);
            $details_image1 = $request->file('details_image1');
            $details_image1_name = hexdec(uniqid()) . '.' . $details_image1->getClientOriginalExtension();
            Image::make($details_image1)->resize(690, 440)->save('backend/project/details_images/' . $details_image1_name);
            $details_image1_url = 'backend/project/details_images/' . $details_image1_name;
            $data['details_image1'] = $details_image1_url;
        }
        if ($request->hasFile('details_image2')) {
            @unlink($image->details_image2);
            $details_image2 = $request->file('details_image2');
            $details_image2_name = hexdec(uniqid()) . '.' . $details_image2->getClientOriginalExtension();
            Image::make($details_image2)->resize(870, 370)->save('backend/project/details_images/' . $details_image2_name);
            $details_image2_url = 'backend/project/details_images/' . $details_image2_name;
            $data['details_image2'] = $details_image2_url;
        }
        if ($request->hasFile('details_image3')) {
            @unlink($image->details_image3);
            $details_image3 = $request->file('details_image3');
            $details_image3_name = hexdec(uniqid()) . '.' . $details_image3->getClientOriginalExtension();
            Image::make($details_image3)->resize(870, 370)->save('backend/project/details_images/' . $details_image3_name);
            $details_image3_url = 'backend/project/details_images/' . $details_image3_name;
            $data['details_image3'] = $details_image3_url;
        }


        $data['title_english'] = $request->title_english;
        $data['title_bangla'] = $request->title_bangla;
        $data['short_des_eng'] = $request->short_des_eng;
        $data['short_des_bng'] = $request->short_des_bng;
        $data['long_des1_eng'] = $request->long_des1_eng;
        $data['long_des1_bng'] = $request->long_des1_bng;
        $data['long_des2_eng'] = $request->long_des2_eng;
        $data['long_des2_bng'] = $request->long_des2_bng;
        $data['long_des3_eng'] = $request->long_des3_eng;
        $data['long_des3_bng'] = $request->long_des3_bng;
        $data['updated_at'] = Carbon::now();

        Project::findOrFail($id)->update($data);

        $notification = array(
            'message' => 'Project Updated Successfully!',
            'alert-type' => 'success'
        );
        return redirect()->route('all.project')->with($notification);
    } //end method------------------------------

    public function tec_web_delete_project($id)
    {
        $blog_image = Project::findOrFail($id);
        // $image = $service_image->banner_image;
        @unlink($blog_image->main_image);
        @unlink($blog_image->banner_image);
        @unlink($blog_image->details_image1);
        @unlink($blog_image->details_image2);
        @unlink($blog_image->details_image3); //delete banner_image from local path_folder

        Project::findOrFail($id)->delete();
        $notification = array(
            'message' => 'Project Data Deleted Successfully!',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    } //end method------------------------------------

    // service status active inactive method start ------------
    public function tec_web_project_inactive($id)
    {
        Project::findOrFail($id)->update(['status' => '0']);
        return redirect()->back();
    }
    public function tec_web_project_active($id)
    {
        Project::findOrFail($id)->update(['status' => '1']);
        return redirect()->back();
    }
    // service status active inactive method end ------------
}
