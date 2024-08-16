<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <link href={{asset('css/style.css')}} rel="stylesheet">
    <title>Pre Doc | @yield('title')</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200..1000&family=Krona+One&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">  
</head>
  <style>
    *{
        font-family: "Cairo", sans-serif;
    }
    .nav-link{
      color: white !important;
      font-family: "Cairo", sans-serif;
    }
    .krona-one-regular {
  font-family: "Krona One", sans-serif;
  font-weight: 400;
  font-style: normal;


}
.cairo-bold {
  font-family: "Cairo", sans-serif;
  font-weight: 700;
  font-style: normal;


}
.myl{
  --bs-btn-bg: #f8f9fa00;
  --bs-btn-color: #fff;
  border: 0px !important;
}
    .list-g{
        background-color: #ffffff00;
        border: 0;
    }
  </style>

<body class="p-0 m-0 border-0 bd-example m-0 border-0">


@yield('header')


    @yield('content')
    
    @yield('footer')

  </body>
