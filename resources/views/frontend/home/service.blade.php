<section id="service" class="tf__service_2  animation">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 col-lg-9 m-auto">
          <div class="tf__section_heading mb_40">
            <h5 class="has-animation">MY serivce</h5>
            <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;margin-top:-10px">
          </div>
        </div>
      </div>

      <div class="row">
        @foreach($services as $key=>$item)
        @if($key == 0 )
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div
            class="tf__single_service_2 fade_left"
            data-trigerId="service"
          >
            <div class="text">
              <span>
                <img
                  src="{{ asset('frontend/assets/svg/mobile-programming.svg') }}"
                  alt="service"
                  class="img-fluid w-100 svg">
                <i class="icon-app-development"></i>
              </span>
              <h3>{{ $item->title_english }}</h3>
              <p>
                {!! Str::words($item->des_sm_eng,20) !!}
              </p>
            </div>
            <a href="{{ route('frontend.service.details',$item->id) }}">Read More</a>
          </div>
        </div>
        @endif

        @if($key == 1)
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div
            class="tf__single_service_2 fade_left active"
            data-trigerId="service"
          >
            <div class="text">
              <span>
                <img
                  src="{{ asset('frontend/assets/svg/pen-tool-2.svg') }}"
                  alt="service"
                  class="img-fluid w-100 svg">
              </span>
              <h3>{{ $item->title_english }}</h3>
              <p>
                {!! Str::words($item->des_sm_eng,20) !!}
              </p>
            </div>
            <a href="{{ route('frontend.service.details',$item->id) }}">Read More</a>
          </div>
        </div>
        @endif

        @if($key == 2)
        <div class="col-xl-4 col-md-6 col-lg-4">
          <div
            class="tf__single_service_2 fade_left"
            data-trigerId="service"
          >
            <div class="text">
              <span>
                <img
                  src="{{ asset('frontend/assets/svg/database.svg') }}"
                  alt="service"
                  class="img-fluid w-100 svg">
              </span>
              <h3>{{ $item->title_english }}</h3>
              <p>
                {!! Str::words($item->des_sm_eng,20) !!}
              </p>
            </div>
            <a href="{{ route('frontend.service.details',$item->id) }}">Read More</a>
          </div>
        </div>
        @endif
        @endforeach
      </div>
      <div class="d-flex justify-content-center">
        <a href="" class="btn text-dark px-5" style="border-radius:25px;background:#55E6A5">ALL Services <i class="fa-solid fa-arrow-right text-white"></i></a>
      </div>
    </div>
  </section>