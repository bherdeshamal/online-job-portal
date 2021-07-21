<!DOCTYPE html>
<html lang="en">
<head>

     <title>Online Job Portal</title>

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="{{asset('frontend/assets/css/bootstrap.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/assets/css/font-awesome.min.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.carousel.css')}}">
     <link rel="stylesheet" href="{{asset('frontend/assets/css/owl.theme.default.min.css')}}">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="{{asset('frontend/assets/css/style.css')}}">

</head>

    <body>
	
	@include('frontend.frontheader')

    @yield('content')
    
    @include('frontend.frontfooter')


   <!-- SCRIPTS -->
   <script src="{{asset('frontend/assets/js/jquery.js')}}"></script>
     <script src="{{asset('frontend/assets/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('frontend/assets/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('frontend/assets/js/smoothscroll.js')}}"></script>
     <script src="{{asset('frontend/assets/js/custom.js')}}"></script>

</body>
</html>