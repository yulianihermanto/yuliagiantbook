<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    {{-- My CSS --}}
    <link rel="stylesheet" href="/css/style.css">

    {{-- fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap" rel="stylesheet">

    <style>
      body {
        font-family: 'Montserrat', sans-serif;
      }
    </style>

    <title>Yulia Giant Book Store</title>

    {{-- @vite(['resources/js/app.js']) --}}
  </head>



  <body>

    <!-- {{-- Header --}} -->
    <div class="row">
        <div class="col-md-12 text-center text-light bg-info bg-gradient py-3 mb-3">
            <h1 style="font-family: 'Libre+Baskerville', sans-serif"><b>Yulia Giant Book Store</b></h1>
        </div>
    </div>

    <!-- {{-- Navigation Bar --}} -->
    <div class="row">
        <div class="col-md-12 d-flex justify-content-center">
            
            <button type="button" class="btn btn-primary m-2">
                <a href="/" class="text-decoration-none text-light"><strong>Home</strong> </a>
            </button>

            <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle m-2" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                 <strong>Category</strong> 
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">

                  @foreach ($categories as $c)

                    <li><a class="dropdown-item" href="/category?id={{ $c->id }}">{{ $c->name }}</a></li>
                 
                  @endforeach

                </ul>
              </div>

            <button type="button" class="btn btn-primary m-2">
                <a href="/publisher" class="text-decoration-none text-light"><strong>Publisher</strong> </a>
            </button>
            <button type="button" class="btn btn-primary m-2">
                <a href="/contact" class="text-decoration-none text-light"><strong>Contact</strong> </a>
            </button>
        </div>
    </div>


    <!-- Content -->
    <div class="container" style="min-height:70vh">
        @yield('content')
    </div>



    <!-- {{-- Footer --}} -->
    <div class="row mt-3">
        <div class="col-md-12 text-center text-light bg-info">
            <h5>©Happy Book Store 2022</h5>
        </div>
    </div>

   
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>