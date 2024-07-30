@extends('frontend.layout')
@section('content')


    <div
      data-bs-spy="scroll"
      data-bs-target="#list-example"
      data-bs-smooth-scroll="true"
      class="scrollspy-example"
      tabindex="0"
    >
      <!--================================
              BANNER 2 START
          =================================-->
          {{-- 'frontend/assets/images/portfolio/1.jpg' --}}
      @include('frontend.home.banner')
      <!--================================
              BANNER 2 END
          =================================-->

      <!--================================
              ABOUT 2 START
          =================================-->
      @include('frontend.home.about')
      <!--================================
              ABOUT 2 END
          =================================-->

      <!--================================
              SERVICE 2 START
          =================================-->
      @include('frontend.home.service')
      <!--================================
              SERVICE 2 END
          =================================-->

      <!--================================
              SKILLS 2 START
          =================================-->
      @include('frontend.home.skill')
      <!--================================
              SKILLS 2 END
          =================================-->

      <!--================================
              PORTFOLIO 2 START
          =================================-->
     @include('frontend.home.recent_project')
      <!--================================
              PORTFOLIO 2 END
          =================================-->

      <!--================================
              BRAND START
          =================================-->
      <div class="tf__brand mt_120 xs_mt_80">
        <div class="row">
          <div class="col-12">
            <div class="marquee_animi">
              <ul>
                <li>* Development</li>
                <li>* PHP</li>
                <li>* Laravel</li>
                <li>* Javascript</li>
                <li>* Vue</li>
                <li>* jQuery</li>
                <li>* HTML5</li>
                <li>* CSS3</li>
                <li>* Development</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!--================================
              BRAND END
          =================================-->

      <!--================================
              all project START
          =================================-->
      @include('frontend.home.project')
      <!--================================
             End all project END
          =================================-->
      <!--================================
              BLOG 2 START
          =================================-->
      @include('frontend.home.blog')
      <!--================================
              BLOG 2 END
          =================================-->

      <!--================================
              CONTACT 2 START
          =================================-->
          @include('frontend.home.contact')

      @include('frontend.cv_modal')

@endsection
