@extends('frontend.layout')
@section('content')

 <!--================================
        BREADCRUMB START
    =================================-->
    <section
      class="tf__breadcrumb banner"
      style="background: url({{ asset($service->banner_image) }})"
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
         <li><a href="#" class="text-danger fw-bolder">Service Details</a></li>
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
          <h1 class="text-center py-3 fw-bold" style="margin-top:-80px;">{{ $service->title_english }}</h1>
          <div class="col-xl-12 col-lg-12 col-md-12">
            <div class="mx-auto d-block mb-3" style="width:740px;height:330px">
              <img src="{{ asset($service->main_image) }}" class="img-thumbnail img-fluid " alt="Service" >
            </div>
          </div>
          <div class="col-xl-12 col-lg-12 col-md-12">
            {!! $service->des_sm_eng !!}
          </div>
        </div>
        <div class="row py-3">
          <div class="col-xl-8 col-lg-8">
            <div class="tf__blog_details_area">
              <div class="tf__blog_details_img py-4 mt-2">
                <img
                  src="{{ asset($service->detais_image_1) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100" 
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $service->long_des1_eng !!}
                
              </div>
              <div class="tf__blog_details_img mt-3">
                <img
                  src="{{ asset($service->detais_image_2) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100"
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $service->long_des2_eng !!}
                
              </div>
              <div class="tf__blog_details_img mt-3">
                <img
                  src="{{ asset($service->detais_image_3) }}"
                  alt="blog"
                  class="img-fluid img-thumbnail rounded w-100"
                />
              </div>
              
              <div class="tf__blog_details_text mt-3">                
                {!! $service->long_des3_eng !!}
                
              </div>
             
              
             
              <div class="tf__input_comment mt_90">
                <h2 class="has-animation">Leave a comment</h2>

                <form id="myForm" action="{{ route('service.comment.store') }}" method="post">
                  @csrf

                  <input type="hidden" name="service_id" value="{{ $service->id }}">

                  <div class="row">
                    <div class="form-group col-xl-6">
                      <input type="text" name="name_english" class="form-control @error('name_english') is-invalid @enderror" placeholder="Your Name" />
                      @error('name_english')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group col-xl-6">
                      <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Your Email" />
                      @error('email')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-group col-xl-12">
                      <textarea
                        rows="6" name="service_comment_english" class="form-control @error('service_comment_english') is-invalid @enderror"
                        placeholder="Write your Message here"
                      ></textarea>  
                      @error('service_comment_english')
                          <p class="text-danger">{{ $message }}</p>
                      @enderror                   
                    </div>
                    <button class="common_btn" type="submit">
                      Post comment now
                    </button>
                  </div>
                </form>

              </div>
            </div>
          </div>
          <div class="col-xl-4 col-lg-4">
            <div class="tf__sidebar">
              
              @php
                $gallery = App\Models\ImageGallery::all();
              @endphp
             
              <div
                class="tf__sidebar_item tf__sidebar_gallery mt_30 gallery_popup">              
                <h3>Photo gallery</h3>
                <ul>
                  @foreach($gallery as $item)
                  <li>
                    <a href="{{ asset($item->image) }}">
                      <img
                        src="{{ asset($item->image) }}"
                        alt="gallery1"
                        class="img-fluid w-100"
                      />
                      <div class="gal_img_overlay">
                        <i class="fa-sharp fa-solid fa-eye"></i>
                      </div>
                    </a>
                  </li>
                  @endforeach
                 
                </ul>
              </div>
              <div class="tf__sidebar_item tf__sidebar_comments mt_30">
                @php
                  $comments = App\Models\ServiceComment::where('service_id',$service->id)->get();
                  // dd($comments);
                @endphp
                <h3>Client Comments</h3>
                <ul>
                  @foreach($comments as $item)
                  <li>
                    <div class="img">
                      <img
                        src="{{ asset($item->image) }}"
                        alt="comment"
                        class="img-fluid rounded w-100"
                      />
                    </div>
                    <div class="text">
                      <div class="d">
                        <span>{{ $item->name_english }}</span><br>
                        <span>{{ date('d-M-Y',strtotime($item->created_at)) }}</span>
                        <span> {{ date('h:i A',strtotime($item->created_at)) }}</span>
                      </div>
                      <a href="blog_details.html"
                        >{!! $item->service_comment_english !!}</a
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
    <footer class="footer" id="footer">
        <div class="footer-container">
          <div class="pt_120 xs_pt_80 sm_pt_80">
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