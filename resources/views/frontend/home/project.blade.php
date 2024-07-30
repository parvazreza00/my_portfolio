<section id="blog" class="tf__blog_2 pt_40 xs_pt_40 pb_20 xs_pb_40">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 m-auto mb_30">
          <div class="tf__section_heading">
            <h5 class="has-animation">my all project</h5>
            <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;margin-top:-10px">
            <h2 class="has-animation">
              Rafting Unique Experiences Inspiring Connections
            </h2>
          </div>
        </div>
      </div>

      <div class="row animation">

        @foreach($projects as $item)
        <div class="col-xl-4 col-md-6">
          <div class="tf__slingle_blog_2 fade_left" data-trigerId="blog">
            <a
              href="{{ route('project.details',$item->id) }}"
              data-cursor="Read <br> More"
              class="tf__blog_img_2"
            >
              <img
                src="{{ asset($item->main_image) }}"
                alt="blog"
                class="img-fluid w-100">
              
            </a>
            <div class="tf__blog_text_2">
              
              <a class="title" href="{{ route('project.details',$item->id) }}"
                >{{ $item->title_english }}</a
              >
              <p>
                {{ Str::words(strip_tags($item->short_des_eng), 20) }}
              </p>
            </div>
            <div class="d-flex justify-content-around mt-2">
              <a href="#" class="btn btn-outline-success" style="border-radius:25px;">Live View</a>
              <a href="#" class="btn btn-outline-primary" style="border-radius:25px;">Github Link </a>
            </div>
            
          </div>
          
        </div>        
        @endforeach

        <div class="d-flex justify-content-center py-5">
          <a href="{{ route('frontend.all.project') }}" class="btn " style="border-radius:25px;background:#55E6A5">View All Project</a>
        </div>
       
       

       
      </div>
    </div>
  </section>