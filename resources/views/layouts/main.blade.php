<!DOCTYPE html>
<html>

<head>
  @include('includes.head')

</head>

<body>

  <!-- header section strats -->
  @include('includes.header')
  <!-- end header section -->

  <!-- slider section -->
  @include('includes.slider')
  <!-- end slider section -->

 @yield('product')

  <!-- footer section -->
  @include('includes.footer')
  <!-- footer section -->


  <!-- jQery -->
  @include('includes.footerJs')
  </body>

</html>