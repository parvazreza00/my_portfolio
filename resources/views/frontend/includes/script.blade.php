<script src="{{ asset('frontend/assets/js/plugin.js') }}"></script>
<!--scroll button js-->
<script src="{{ asset('frontend/assets/js/scroll_button.js') }}"></script>
<!--sticky sidebar js-->
<script src="{{ asset('frontend/assets/js/sticky_sidebar.js') }}"></script>
<!-- Gsap -->
<script src="{{ asset('frontend/assets/js/animation.js') }}"></script>
<!--main/custom js-->
<script src="{{ asset('frontend/assets/js/main.js') }}"></script>
 {{-- js form validation --}}
 <script src="{{ asset('frontend/assets/js/validate.min.js') }}"></script>
 {{-- toastr js --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script>
     @if(Session::has('message'))
     var type = "{{ Session::get('alert-type','info') }}"
     switch(type){
        case 'info':
        toastr.info(" {{ Session::get('message') }} ");
        break;
    
        case 'success':
        toastr.success(" {{ Session::get('message') }} ");
        break;
    
        case 'warning':
        toastr.warning(" {{ Session::get('message') }} ");
        break;
    
        case 'error':
        toastr.error(" {{ Session::get('message') }} ");
        break; 
     }
     @endif 
    </script>