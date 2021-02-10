<!-- Title -->
<title> Valex - Premium dashboard ui bootstrap rwd admin html5 template </title>
<!-- Favicon -->
<link rel="icon" href="{{URL::asset('assets/img/brand/favicon.png')}}" type="image/x-icon" />
<!-- Icons css -->
<link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet">
<!--  Custom Scroll bar-->
<link href="{{URL::asset('assets/plugins/mscrollbar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />
<!--  Sidebar css -->
<link href="{{URL::asset('assets/plugins/sidebar/sidebar.css')}}" rel="stylesheet">
<!-- Sidemenu css -->

@yield('css')
<!--- Style css -->

<!--- Dark-mode css -->
@if (App::getLocale() == 'ar')
<link rel="stylesheet" href="{{URL::asset('assets/css-rtl/sidemenu.css')}}">
<link href="{{URL::asset('assets/css-rtl/style.css')}}" rel="stylesheet">


@else
<link rel="stylesheet" href="{{URL::asset('assets/css/sidemenu.css')}}">
<link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet">
@endif


<link href="{{URL::asset('assets/css-rtl/style-dark.css')}}" rel="stylesheet">
<!---Skinmodes css-->
<link href="{{URL::asset('assets/css-rtl/skin-modes.css')}}" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css"
    integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g=="
    crossorigin="anonymous" />
