@include('site.layouts.header_scripts')




<div class="page-wrapper">

    <!-- Preloader -->
    {{-- <div class="preloader"></div> --}}
    <!-- End Main Header -->
    @include('site.layouts.header')
    @yield('content')
</div>
<!--Main Footer-->
@include('site.layouts.footer')


<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-angle-up"></span></div>

<!--Search Popup-->
@include('site.layouts.search')
<!-- sidebar cart item -->
@include('site.layouts.sidebar')
<!-- END sidebar widget item -->

<!--Scroll to top-->
@include('site.layouts.scripts_footer')
