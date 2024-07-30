@extends('frontend.layout')
@section('content')



<!--================================
        BREADCRUMB START
    =================================-->
    <section
    class="tf__breadcrumb banner"
    style="background: url({{ asset(App\Models\Blog::latest()->first()->banner_image) }});object-fit:cover">
    <div class="container">
    <div class="row">
        <div class="col-12">
        
        </div>
    </div>
    </div>
</section>

<div class="text-center">
  <div class="">
    <ul class="page-breadcrumb">
         <li>
            <a href="{{ url('/') }}" class="text_hover_animaiton text-danger fw-bolder">Home</a>
         </li>
         <li><a href="#" class="text-danger fw-bolder">All Blog List</a></li>
      </ul>
   </div>
</div>
    <!--================================
        BREADCRUMB END
    =================================-->

<section class="" style="background: url({{ asset('frontend/assets/images/about/bg.jpg') }}) !important;
}">
   

    <div class="container" >
        <div class="row">
            <div class="section-title col col-lg-12 col-md-12 col-lg-offset-2">                
                <h2 style="padding:20px 0 ; text-align:center">All Blogs</h2>
            </div>
        </div>

        <div class="row blog-content">
            @foreach($blogs as $item)
            <div class="col-4 col-md-4 col-lg-4 col-xl-4 py-2">
                <div class="card" style="border:none">
                    <div style="height: 235px">
                        <img src="{{ asset($item->main_image) }}" class="card-img-top" alt="..." >
                    </div>
                    <a href="{{ route('blog.details',$item->id) }}">
                        <div class="card-body" style="background: #09101A">
                        <h5 class="text-white fw-bolder">{{ $item->title_english }}</h5>
                        
                        <p class="">{{ Str::words(strip_tags($item->short_des_eng), 20)}}</p>  
                        </div>
                    </a>
                  </div>            
                </div>
            @endforeach

        </div> <!-- end of row -->
        <div class="row mt-5">
            <div class="col-md-12 col-lg-12 col-xl">
                <div class="" style="margin-left:45%;">
                    {{$blogs->links()}}
                </div>
            </div>
           </div>
        
    </div> <!-- end of container -->
</section> <!-- end of expart -->
<br><br>












@endsection