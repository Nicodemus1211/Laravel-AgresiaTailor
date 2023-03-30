<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include('include.style')

    <title>@yield('title')</title>


</head>

<body>

    <!-- navbar  -->
    @include('include.navbar')
    <!-- end of navbar  -->

    <!-- header -->
   @yield('content')
    <!-- end of get connected -->

    <!-- footer -->
   @include('include.footer')
    <!-- end of footer  -->


   @include('include.script')
</body>

</html>