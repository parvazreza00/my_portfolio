@extends('frontend.layout')
@section('content')


 <!--================================
        BREADCRUMB START
    =================================-->
    <section
      class="tf__breadcrumb banner mt-3"
      style="background: url({{ asset($about->banner_image) }});background-size: cover;object-fit:cover;
      height: 100%;"
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
         <li><a href="#" class="text-danger fw-bolder">About Us</a></li>
      </ul>
   </div>
</div>
    <!--================================
        BREADCRUMB END
    =================================-->


<section class="about-victoria" style="padding: 25px 0 92px;">
    <div class="container">
        
        <div class="row ">
            <div class="col col-md-6 ">  

                <img src="{{ asset($about->profile_image) }}" style="width: 100%;height:500px; border: 1px solid #ddd;
                border-radius: 8px;" alt="">              
               
            </div>
            <div class="col col-md-6">
                <h2 style="text-align:center;">{{ $about->title_english }}</h2>
                <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;">
                <p style="font-size: 18px;line-height: 32px;margin-bottom: 60px;">{!! $about->details_1_eng !!}</p>
                <br>
                
            </div>

            

        </div>
        <div class="row">
            <div class="col col-md-12 text-center">
                <br>
                <h4 style="">More Information</h4>
                <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;">
                <p style="font-size: 18px;line-height: 32px;margin-bottom: 60px;margin-top:-40px">{!! $about->details_2_eng !!}</p>
            </div>           
        </div>
    </div> <!-- end of container -->
</section>



<section class="fun-fact">
    <h2 class="hidden">Fun Fact</h2>
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col col-xs-6 col-sm-3">
                <i class="flaticon-nature"></i>
                <span class="number" id="happy-clients">1455</span>
                <span class="fact-title playfair">Happy clients</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <i class="flaticon-relax-1"></i>
                <span class="number" id="awards">725</span>
                <span class="fact-title playfair">Awwards Winning</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <i class="flaticon-food-1"></i>
                <span class="number" id="coffee">260</span>
                <span class="fact-title playfair">Cups of Coffee</span>
            </div>
            <div class="col col-xs-6 col-sm-3">
                <i class="flaticon-medical-1"></i>
                <span class="number" id="works">128</span>
                <span class="fact-title playfair">Works Complete</span>
            </div>
        </div> <!-- end of row -->
    </div> <!-- end of container -->
</section> <!-- end of funfact -->

<section class="exparts team" style="background: url({{ asset('frontend/assets/images/about/bg.jpg') }}) !important;
}">
    <div class="container">
        <div class="row">
            <div class="section-title col col-lg-8 col-lg-offset-2">
                <h2 style="text-align: center;margin-top: -70px;margin-bottom: 40px;"><span style="color:#87A700">Meet</span> Our Team</h2>
                <h2 style="font-size: 15px;margin-top:-30px;"><i>Our Exparts</i></h2>
                <p>Spread over two floors, our beautiful spa offer a soothing environment in which you can rest, relax and feel competely rejuvenated</p>
            </div>
        </div>

        
    </div> <!-- end of container -->
</section> <!-- end of expart -->





@endsection