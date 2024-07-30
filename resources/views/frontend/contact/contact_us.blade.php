<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from html.themexriver.com/victoria-spa/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 11:29:15 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="html template">
    <meta name="keyword" content="your keyword goes to here">
    <meta name="author" content="themexriver">
    <title> {{ App\Models\Logo::latest()->first()->site_name_english }} </title>
    <link href="{{ App\Models\Logo::latest()->first()->favicon_image }}" rel="icon">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:800,700,600,300' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400italic' rel='stylesheet' type='text/css'>
    <link href="{{ asset('frontend/assets/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/flat-icon/flaticon.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/jquery-ui.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/css/responsive.css') }}" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="http://maps.googleapis.com/maps/api/js"></script>
</head>

@php
    $links = App\Models\WebsiteLink::latest()->first();
@endphp

<body id="contact">
    <div class="pre-loder">
        <div class="loding"> </div>
    </div> <!-- end of pre-loder -->

    @include('frontend.includes.header')

   
        <div class="row" height="400px">
            <div class="col-12 col-md-12">
                {!! $links->map_link !!}
            </div>
            
        </div>
        {{-- <h2 class="hidden">Map</h2>
        <div id="googleMap"></div> <!-- google map --> --}}
        
   

    

    <section class="keep-in-touch">
        <div class="container">
            <div class="section-title row">
                <div class="col col-md-8 col-md-offset-2">
                    <h2 style="margin-top:-40px">Keep in touch</h2>
                </div>
            </div>

            <div class="content row">
                <div class="col col-sm-4">
                    <span><i class="flaticon-technology"></i></span>
                    <h3>Phone</h3>
                    <p>Phone: (+880) {{ $links->phone }} </p>
                    <p>Phone: (+880) {{ $links->phone }} </p>
                </div>
                <div class="col col-sm-4">
                    <span><i class="flaticon-pin"></i></span>
                    <h3>Address</h3>
                    <p>{{ $links->address_english }}</p>
                </div>
                <div class="col col-sm-4">
                    <span><i class="flaticon-interface-3"></i></span>
                    <h3>Email</h3>
                    <p> {{ $links->email }}</p>
                    <p>(+880) {{ $links->phone }}</p>
                </div>
            </div>

           
        </div> <!-- end of container -->
    </section> <!-- end of keep-in-touch -->

    <section class="leave-message">
        <div class="row">
            <div class="left-col col col-sm-6">
                <div class="overlay"></div>
                <div class="content">
                    {{-- <img src="{{ asset('frontend/assets/images/contact/water-mark.png') }}" alt class="hidden-xs">
                    <img src="{{ asset('frontend/assets/images/contact/water-mark-sm.png') }}" alt class="hidden-lg hidden-md-hidden-sm"> --}}
                    <p>Begin your Journey</p>
                </div>
            </div>

            <div class="right-col col col-sm-6">

               

                <div class="section-title">
                    <h2>Leave a <span>message</span></h2>
                    <p class="playfair">Beautiful spa resort offer soothing environtment</p>
                    <div>
                        <ul class="social-links">
                            <li><a href="{{ $links->facebook }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ $links->twitter }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ $links->instagram }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ $links->linkedin }}"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
               

                <form class="form-inline" action="{{ route('contactdata.store') }}" method="post">
                    @csrf
                    
                    <div class="col col-sm-4 form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name_english" required>
                    </div>
                    <div class="col col-sm-4 form-group">
                        <label for="phone">Phone </label>
                        <input type="text" class="form-control"  name="phone" required>
                    </div>
                    <div class="col col-sm-4 form-group" style="float:right ">
                        <label for="email">Email</label>
                        <input type="email" class="form-control"  name="email" required>
                    </div>
                    <div class="col col-sm-12 form-group">
                        <label for="message">Message</label>
                        <textarea  name="message_english" class="form-control" rows="3" required></textarea>
                    </div>
                    <div>
                        <input type="submit" value="Send email">
                    </div>
                    {{-- <div class="clearfix"></div> --}}
                </form>
            </div>
        </div> <!-- end of row -->
    </section> <!-- leave-message -->

    @include('frontend.includes.footer')

    

    <script src="{{ asset('frontend/assets/js/jquery-1.11.3.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/common-script.js') }}"></script>
    <script src="{{ asset('frontend/assets/js/contact-script.js') }}"></script>

    <script src="{{ asset('frontend/assets/js/jquery-1.11.3.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery-ui.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/assets/js/index-2-script.js') }}"></script>

<script src="{{ asset('frontend/assets/js/jquery.animateNumber.min.js') }}"></script>

<script src="{{ asset('frontend/assets/js/common-script.js') }}"></script>

<script src="{{ asset('frontend/assets/js/about-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/service-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/about-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/gallery-2-script.js') }}"></script>
<script src="{{ asset('frontend/assets/js/contact-script.js') }}"></script>
</body>

<!-- Mirrored from html.themexriver.com/victoria-spa/contact.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 11:29:16 GMT -->
</html>
