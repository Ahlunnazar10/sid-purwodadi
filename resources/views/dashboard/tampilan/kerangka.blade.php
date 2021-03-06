<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="icon" type="image/png" href="{{ asset('/img/logo.png') }}" />

    <title>SID | Dashboard</title>   

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">

    {{-- Trix-editor --}}
    <link rel="stylesheet" type="text/css" href="/css/trix.css">
    <script type="text/javascript" src="/js/trix.js"></script>

    <style>
      trix-toolbar [data-trix-button-group = "file-tools"]{
        display: none; 
      }

      #form-input {
        box-shadow: 0 0 1rem 0 rgba(0, 0, 0, 0.2);
        border: 5px;
        border-radius: 15px;
        position: relative;
        z-index: 1;
        background: inherit;
        overflow: hidden;
        padding: 30px;
        color: #055160;
      }
      .h2 {
        color: #055160;
      }
    </style>
  </head>
  <body>
    
@include('dashboard.tampilan.header')

<div class="container-fluid">
  <div class="row">

    @include('dashboard.tampilan.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        @yield('container')
    </main>
  </div>
</div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

    <script src="js/dashboard.js"></script>
  </body>
</html>
