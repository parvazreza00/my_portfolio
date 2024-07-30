@php
  $my_cv = App\Models\Cvfile::where('status',1)->latest()->first();
@endphp   
<nav class="main_menu_2">
     <span class="menu_2_icon">
      <i class="fa-light fa-bars bar_icon-staggered bar_icon"></i>
      <i class="fa-light fa-xmark close_icon"></i>
    </span>

    {{-- <a class="logo_2 text-center py-2" href="{{ url('/') }}">
      <img src="{{ asset('frontend/assets/images/own_logo.png') }}" alt="PARVAZ" class="img-fluid img-thumbnail rounded-circle w-50 h-50">
    </a> --}}

    <ul id="list-example" class="list-group">
      {{-- <li class="d-flex justify-content-between">
       
       <div class="rounded-circle px-2 py-1" style="background: #55E6A5"><i class="fa-brands fa-facebook-f"></i></div>
       <div class="rounded-circle px-2 py-1" style="background: #55E6A5"><i class="fa-brands fa-github"></i></div>      
       <div class="rounded-circle px-2 py-1" style="background: #55E6A5"><i class="fa-brands fa-instagram"></i></div>
       <div class="rounded-circle px-2 py-1" style="background: #55E6A5"><i class="fa-brands fa-twitter"></i></div>
       <div class="rounded-circle px-2 py-1" style="background: #55E6A5"><i class="fa-brands fa-linkedin-in"></i></div>
          
      </li> --}}
      <li>
        @if($my_cv)
        <a class=""  href="{{ asset($my_cv->cv_file) }}" target="_blank"
          ><i class="fa-solid fa-arrow-down-to-line" style="color:gray;margin-right:5px;background:#55E6A5;font-size:25px;padding:16px 20px;border-radius:5px"></i
            >  Resume
          </a>
          @endif
      </li>
      
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="{{ url('/') }}"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/home-2.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span
          >Home
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="{{ route('about.details') }}"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/clipboard.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span
          >About Me
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="#service"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/briefcase.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span>
          Service
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="#skills"
        >
          <span
            ><img src="{{ asset('frontend/assets/svg/path.svg') }}" alt="icon" class="img-fluid w-100 svg"></span>
          skills
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="{{ route('frontend.all.project') }}"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/messages-1.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span>
          portfolio
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="{{route('frontend.blogs.list')}}"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/quote-down-square.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span>
          blog
        </a>
      </li>
      <li>
        <a
          class="list-group-item list-group-item-action text_hover_animaiton"
          href="#contact"
        >
          <span
            ><img
              src="{{ asset('frontend/assets/svg/user-square.svg') }}"
              alt="icon"
              class="img-fluid w-100 svg"></span>
          Contact
        </a>
      </li>
    </ul>
  </nav>