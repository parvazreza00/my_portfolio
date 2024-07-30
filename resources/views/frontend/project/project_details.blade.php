@extends('frontend.layout')
@section('content')

 <!--================================
        BREADCRUMB START
    =================================-->
    <section
      class="tf__breadcrumb banner"
      style="background: url({{ asset($project_details->banner_image) }});object-fit:cover"
    >
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
         <li><a href="#" class="text-danger fw-bolder">{{ $project_details->title_english }}</a></li>
      </ul>
   </div>
</div>
    <!--================================
        BREADCRUMB END
    =================================-->

    <!--================================
        BLOG DETAILS START
    =================================-->
    <section class="tf__blog_details pt_120 xs_pt_80 pb_120 xs_pb_80">
      <div class="container">
        
        <div class="row">
          <h1 class="text-center py-3 fw-bold" style="margin-top:-80px;">{{ $project_details->title_english }}</h1>
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="mx-auto d-block mb-3" style="width:740px;height:330px">
              <img src="{{ asset($project_details->main_image) }}" class="img-thumbnail img-fluid " alt="Service">
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12">
            {!! $project_details->short_des_eng !!}
          </div>
        </div>
        <div class="row py-3">
          <div class="col-xl-8 col-lg-8">
            <div class="tf__blog_details_area">
              <div class="tf__blog_details_img py-4 mt-2">
                <img
                  src="{{ asset($project_details->details_image1) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100" 
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $project_details->long_des1_eng !!}
                
              </div>
              <div class="tf__blog_details_img mt-3">
                <img
                  src="{{ asset($project_details->details_image2) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100"
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $project_details->long_des2_eng !!}
                
              </div>
              <div class="tf__blog_details_img mt-3">
                <img
                  src="{{ asset($project_details->details_image3) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100"
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $project_details->long_des3_eng !!}
                
              </div>
            
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">
            <div class="tf__sidebar">
              
              @php
                
                $all_project = App\Models\Project::latest()->limit(3)->get();
              @endphp
             
              <div
                class="tf__sidebar_item tf__sidebar_comments mt_30">              
                <h3>Latest Project</h3>
                <ul>
                    @foreach($all_project as $item)
                    <li>
                      <div class=" ">
                        <img
                          src="{{ asset($item->main_image) }}"
                          alt="comment"
                          class="img-fluid rounded w-100 d-block m-auto"
                        />
                       
                      </div>
                      <div class="text">                        
                        <a href="{{ route('project.details',$item->id) }}"
                            >{{ $item->title_english }}</a
                          >
                       
                      </div>
                    </li>
                    @endforeach
  
                  </ul>
                          
                </div>
                
              </div>
              
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================================
        BLOG DETAILS END
    =================================-->

   

      <!--================================
        FOOTER START
    =================================-->
    @php
    $links = App\Models\WebsiteLink::latest()->first();
  @endphp
  <footer class="footer" id="footer" style="margin-left:250px;">
      <div class="footer-container">
        <div class="pt_20 xs_pt_20 sm_pt_20">
          <div class="container">
            <div class="row">
              <div class="col-lg-4">
                <div
                  class="tf__footer_content fade_right"
                  data-trigerId="footer"
                  data-stagger=".25"
                >
                  <div class="icon">
                    <div class="icon-contianer">
                      <img
                        src="{{ asset('frontend/assets/svg/map.svg')}} "
                        alt="footer"
                        class="img-fluid w-100 svg"
                      />
                    </div>
                  </div>
                  <div class="text">
                    <h3>Address</h3>
                    <p>{{ $links->address_english }}</p>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div
                  class="tf__footer_content fade_right"
                  data-trigerId="footer"
                  data-stagger=".25"
                >
                  <div class="icon">
                    <div class="icon-contianer">
                      <img
                        src="{{ asset('frontend/assets/svg/phone.svg')}}"
                        alt="footer"
                        class="img-fluid w-100 svg"
                      />
                    </div>
                  </div>
                  <div class="text">
                    <h3>Lets talk with us:</h3>
                    <a href="callto:{{ $links->phone }}">(+880) {{ $links->phone }} </a>
                    <a href="callto:{{ $links->phone }}">(+880) {{ $links->phone }}</a>
                  </div>
                </div>
              </div>
              <div class="col-lg-4">
                <div
                  class="tf__footer_content fade_right"
                  data-trigerId="footer"
                  data-stagger=".25"
                >
                  <div class="icon">
                    <div class="icon-contianer">
                      <img
                        src="{{ asset('frontend/assets/svg/envelope.svg')}}"
                        alt="footer"
                        class="img-fluid w-100 svg"
                      />
                    </div>
                  </div>
                  <div class="text">
                    <h3>Send us email</h3>
                    <a href="mailto:{{ $links->email }} "
                      >{{ $links->email }}</a
                    >
                    <a href="mailto:yeasinahmed740@gmail.com">yeasinahmed740@gmail.com</a>
                  </div>
                </div>
              </div>
            </div>
            
          </div>
        </div>
      </div>
    </footer>
      <!--================================
          FOOTER END
      =================================-->





@endsection