
<!DOCTYPE html>
<html lang="en">
  
<!-- Mirrored from zyan.vercel.app/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2023 07:56:36 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>

   @include('frontend.includes.headlink')

</head>

  <body class="home_2">
    <!--================================
        PRELOADER START
    =================================-->
    {{-- <div class="preloader">
      <svg viewBox="0 0 1000 1000" preserveAspectRatio="none">
        <path id="svg" d="M0,1005S175,995,500,995s500,5,500,5V0H0Z"></path>
      </svg>
      <h5 class="preloader-text">Loading</h5>
    </div> --}}
    <!--================================
        PRELOADER END
    =================================-->

    <!--================================
        SCROLL BUTTON END
    =================================-->
        @include('frontend.includes.header')
    <!--================================
        SCROLL BUTTON END
    =================================-->
    <div class="main">

        @yield('content')

        <!--================================
                CONTACT 2 END
            =================================-->

        <!--================================
                FOOTER 2 START
            =================================-->
            @include('frontend.includes.footer')
        <!--================================
                FOOTER 2 END
            =================================-->

        <!--================================
                SCROLL BUTTON START
            =================================-->
        <div class="progress active">
          <svg
            class="progress-svg"
            width="100%"
            height="100%"
            viewBox="-1 -1 102 102"
          >
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
          </svg>
        </div>
        <!--================================
                SCROLL BUTTON END
            =================================-->
        <!--================================
        CURSOR START
    =================================-->
        <div id="magic-cursor">
          <div id="ball"></div>
        </div>
        <!--================================
        CURSOR END
    =================================-->
        </div>
    </div>

   @include('frontend.includes.script')

  </body>

<!-- Mirrored from zyan.vercel.app/index_2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 25 Oct 2023 07:56:41 GMT -->
</html>
