@extends('frontend.layout')
@section('content')

<section class="photo-gallery-title">
    <div class="container">
        <div class="row section-title">
            <span class="playfair">Spa &amp; Wellness</span>
            <h2>Photo Gallery</h2>
        </div>
    </div>
</section>

<div class="page-breadcrumb">
    <div class="container">
        <div class="row">
            <div class="col col-xs-1 col-sm-1 col-md-1">
                <p>Gallery</p>
            </div>
            <div class="col col-xs-8 col-sm-8 col-md-9">
                <ol class="playfair breadcrumb">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li class="active">Gallery</li>
                </ol>
            </div>
            <div class="filt-btn col col-xs-3 col-sm-3 col-md-2">
                <button class="btn btn-default">
                    <i class="flaticon-app"></i>
                </button>
                <button class="active btn btn-default">
                    <i class="flaticon-squares-1"></i>
                </button>
                <button class="btn btn-default">
                    <i class="flaticon-three-1"></i>
                </button>
            </div>
           
        </div>
    </div> <!-- end of container -->
</div> <!-- end of page-breadcrumb -->

<section class="gallery-content">
    <h2 class="hidden">Gallery</h2>
    <div class="container">
        <div class="row my-gallery gallery-2">
            @foreach($img_gallery as $item)
            <div class="col col-xs-6">
                <div class="thumbnail">
                    <div>
                        <div class="hover-content">
                            <div>
                                {{-- <img src="{{ asset('frontend/assets/images/water-mark.png') }}" alt> --}}
                                {{-- <h3>Aromateraphy Massage</h3> --}}
                                <a href="{{ asset($item->image) }}"  data-lightbox-gallery="gallery1">View</a>                                          
                            </div>
                        </div>
                        <img src="{{ asset($item->image) }}"  style="width:100%" alt="Image description" class="img img-responsive" />
                    </div>
                </div>
            </div>
            @endforeach
           
        </div> <!-- end of my-gallery -->
        
    </div> <!-- end of container -->
</section> <!-- end of service -->










@endsection