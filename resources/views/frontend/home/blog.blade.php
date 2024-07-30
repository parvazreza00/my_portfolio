<section id="blog" class="tf__blog_2 pt_40 xs_pt_40 pb_40 xs_pb_40 mt-5" style="margin-top:30px;">
    <div class="container">
      <div class="row">
        <div class="col-xl-8 m-auto mb_30">
          <div class="tf__section_heading"> 
            <h5 class="has-animation">my all Blog</h5>
            <hr style="border-top:3px solid #55E6A5;width:100px;margin:auto;margin-top:-10px">
            <h2 class="has-animation">
              Rafting Unique Experiences Inspiring Connections
            </h2>
          </div>
        </div>
      </div>

      <div class="row animation">
  
        @foreach($blogs as $item)
        <div class="col-xl-4 col-md-6">
          <div class="tf__slingle_blog_2 fade_left" data-trigerId="blog">
            <a
              href="{{ route('blog.details',$item->id) }}"
              data-cursor="Read <br> More"
              class="tf__blog_img_2"
            >
              <img
                src="{{ asset($item->main_image) }}"
                alt="blog"
                class="img-fluid w-100">
              
            </a>
            <div class="tf__blog_text_2">
              <ul>
                <li>
                  <i class="fa-sharp fa-solid fa-circle-user"></i> By
                  admin
                </li>                
              </ul>
              
              <a class="title" href="{{ route('blog.details',$item->id) }}"
                >{{ $item->title_english }}</a
              >
              <p>
                {{ Str::words(strip_tags($item->short_des_eng), 20) }}
              </p>
            </div>
            
          </div>
          
        </div>        
        @endforeach

        <div class="d-flex justify-content-center py-5">
          <a href="{{ route('frontend.blogs.list') }}" class="btn " style="border-radius:25px;background:#55E6A5">View All Blog</a>
        </div>
       
      </div>
    </div>
  </section>