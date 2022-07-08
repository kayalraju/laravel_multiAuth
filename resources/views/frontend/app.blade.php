 @include('frontend/layout/head')

 @include('frontend/layout/header')
  
  <!-- End header  -->
  <!-- Start menu -->
   @include('frontend/layout/nav')
  <!-- End menu -->
  <!-- Start search box -->
  
  <!-- End search box -->
  <!-- Start Slider -->
  @section('main-content')
  @show
  <!-- End from blog -->

  <!-- Start footer -->
   @include('frontend/layout/footer')