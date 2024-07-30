<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Frontend\UserController;
use App\Http\Controllers\Backend\GeneralController;
use App\Http\Controllers\Backend\ServiceController;
use App\Http\Controllers\Backend\AboutController;
use App\Http\Controllers\Backend\BlogController;
use App\Http\Controllers\Backend\GalleryController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\ProjectController;

use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\FrontendController;





/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('index');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';


Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);
});


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'tech_web_home_index')->name('webview.home.index');
});
Route::controller(FrontendController::class)->group(function () {
    Route::get('/about/details', 'tech_web_about_details')->name('about.details');
    Route::get('/service/details/{id}', 'tech_web_service_details')->name('frontend.service.details');
    Route::post('/store/service/comment/', 'tech_web_service_comment_store')->name('service.comment.store');
    Route::get('/frontend/all/project', 'tech_web_all_project')->name('frontend.all.project');
    Route::get('/project/details/{id}', 'tech_web_project_details')->name('project.details');
    Route::get('/all/blogs/list', 'tech_web_all_blogs_list')->name('frontend.blogs.list');
    Route::get('/blog/details/{id}', 'tech_web_blog_details')->name('blog.details');
});



// backend all routes ////////////////////////////////


// admin all route ..........................................
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/admin/logout', [AdminController::class, 'admin_destroy'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'tec_web_admin_profile'])->name('admin.profile');
    Route::post('/admin/profile/update', [AdminController::class, 'tec_web_admin_profile_update'])->name('admin.profile.update');
    Route::get('/change/password', [AdminController::class, 'tec_web_admin_change_password'])->name('change.password');
    Route::post('/admin/password/update', [AdminController::class, 'tec_web_admin_password_update'])->name('admin.password.update');
});

Route::middleware(['auth', 'role:admin'])->group(function () {
      //general setting all route start
    Route::controller(GeneralController::class)->group(function () {
        //banner and title all route
        Route::get('/general/setting', 'tech_web_general_settings')->name('general.setting');
        Route::post('/banner/title/store', 'tech_web_banner_title_store')->name('banner.title.store');
        Route::get('/edit/banner/title/{id}', 'tech_web_edit_banner_title')->name('edit.banner.title');
        Route::post('/banner/title/update', 'tech_web_banner_title_update')->name('banner.title.update');
        Route::get('/delete/banner/title/{id}', 'tech_web_delete_banner_title')->name('delete.banner.title');
        Route::get('/banner/title/inactive/{id}', 'tec_web_banner_title_inactive')->name('banner.title.inactive');
        Route::get('/banner/title/active/{id}', 'tec_web_banner_title_active')->name('banner.title.active');

        // logo setting route
        Route::post('/logo/store', 'tec_web_logo_store')->name('logo.store');
        // website link setting route
        Route::post('/websitelink/store', 'tec_web_websitelink_store')->name('websitelink.store');
        // Cv/Resume setting route
        Route::post('/cv/store', 'tec_web_cv_store')->name('cv.store');
        Route::get('/cv/inactive/{id}', 'tec_web_cv_inactive')->name('cv.inactive');
        Route::get('/cv/active/{id}', 'tec_web_cv_active')->name('cv.active');
        // website banner setting route
        Route::post('/website/banner/store', 'tec_web_website_banner_store')->name('website.banner.store');
        Route::get('/edit/website/banner/{id}', 'tec_web_edit_website_banner')->name('edit.website.banner');
        Route::post('/website/banner/update', 'tec_web_website_banner_update')->name('website.banner.update');
        Route::get('/website/banner/delete/{id}', 'tec_web_website_banner_delete')->name('delete.website.banner');
        Route::get('/website/banner/inactive/{id}', 'tec_web_website_banner_inactive')->name('website.banner.inactive');
        Route::get('/website/banner/active/{id}', 'tec_web_website_banner_active')->name('website.banner.active');
        // footer data setting route
        Route::post('/footer/store', 'tec_web_footer_store')->name('footer.store');
    });
    //general setting all route end

    //Service setting all route
    Route::controller(ServiceController::class)->group(function () {
        Route::get('/all/services', 'tech_web_all_services')->name('all.services');
        Route::get('/add/services', 'tech_web_add_services')->name('add.services');
        Route::post('/service/store', 'tech_web_service_store')->name('service.store');
        Route::get('/edit/service/{id}', 'tec_web_edit_service')->name('edit.service');
        Route::post('/update/store', 'tec_web_update_store')->name('update.store');
        Route::get('/delete/service/{id}', 'tec_web_delete_service')->name('delete.service');
        Route::get('/service/inactive/{id}', 'tec_web_service_inactive')->name('service.inactive');
        Route::get('/service/active/{id}', 'tec_web_service_active')->name('service.active');
    });

    //Blogs setting all route
    Route::controller(BlogController::class)->group(function () {
        Route::get('/all/blog', 'tech_web_all_blogs')->name('all.blog');
        Route::get('/add/blog', 'tech_web_add_blogs')->name('add.blog');
        Route::post('/blog/store', 'tech_web_blogs_store')->name('blog.store');
        Route::get('/edit/blog/{id}', 'tec_web_edit_blogs')->name('edit.blog');
        Route::post('/update/blog', 'tec_web_update_blogs')->name('update.blog');
        Route::get('/delete/blog/{id}', 'tec_web_delete_blogs')->name('delete.blog');
        Route::get('/blog/inactive/{id}', 'tec_web_blogs_inactive')->name('blog.inactive');
        Route::get('/blog/active/{id}', 'tec_web_blogs_active')->name('blog.active');
    });

    //Service setting all route end
    Route::controller(AboutController::class)->group(function () {
        Route::get('/about/setting', 'tech_web_about_setting')->name('about.setting');       
        Route::post('/about/update/store', 'tech_web_about_store_and_update')->name('about.update.store');
    });

    //video or Image Gallery setting all route
    Route::controller(GalleryController::class)->group(function () {
        Route::get('/all/image', 'tech_web_all_image')->name('all.image');
        Route::get('/add/image', 'tech_web_add_image')->name('add.image');
        Route::post('/image/store', 'tech_web_image_store')->name('image.store');
        Route::get('/image/edit/{id}', 'tec_web_edit_image')->name('edit.image');
        Route::post('/image/update', 'tec_web_image_update')->name('image.update');
        Route::get('/image/delete/{id}', 'tec_web_delete_image')->name('delete.image');
        Route::get('/image/inactive/{id}', 'tec_web_image_inactive')->name('image.inactive');
        Route::get('/image/active/{id}', 'tec_web_image_active')->name('image.active');
    });

    //slider setting all route
    Route::controller(SliderController::class)->group(function(){
        Route::get('/slider/setting', 'tech_web_slider_setting')->name('all.slider'); 
        Route::get('/slider/add', 'tech_web_add_slider')->name('add.slider'); 
        Route::post('/slider/store', 'tech_web_slider_store')->name('slider.store'); 
        Route::get('/edit/slide/{id}r', 'tech_web_slider_edit')->name('edit.slider'); 
        Route::post('/update/slider', 'tech_web_slider_update')->name('slider.update'); 
        Route::get('/delete.slider/{id}', 'tech_web_slider_delete')->name('delete.slider'); 
        Route::get('/slider/inactive/{id}', 'tec_web_slider_inactive')->name('slider.inactive');
        Route::get('/slider/active/{id}', 'tec_web_slider_active')->name('slider.active');       
    });

    // //Project setting all route
    Route::controller(ProjectController::class)->group(function () {
        Route::get('/all/project', 'tech_web_all_project')->name('all.project');
        Route::get('/add/project', 'tech_web_add_project')->name('add.project');
        Route::post('/project/store', 'tech_web_project_store')->name('project.store');
        Route::get('/project/edit/{id}', 'tec_web_edit_project')->name('edit.project');
        Route::post('/project/update', 'tec_web_project_update')->name('update.project');
        Route::get('/project/delete/{id}', 'tec_web_delete_project')->name('delete.project');
        Route::get('/project/inactive/{id}', 'tec_web_project_inactive')->name('project.inactive');
        Route::get('/project/active/{id}', 'tec_web_project_active')->name('project.active');
    });



});

// frontend all routes--------------------------------------

//
// Route::get('/about/details',[AboutController::class, 'tech_web_about_details'])->name('about.details');
// Route::get('/contact/us',[ContactController::class, 'tech_web_contact_us'])->name('contact.us');
// Route::post('/contactdata/store',[ContactController::class, 'tech_web_contactdata_store'])->name('contactdata.store');
// Route::get('/packages',[ServiceController::class, 'tech_web_packages'])->name('packages');
// Route::get('/gallery/page',[GalleryController::class, 'tech_web_gallery_page'])->name('gallery.page');


