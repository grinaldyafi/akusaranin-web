<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>📚 AkuSaranin | Platform Rekomendasi</title>
      <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
  </head>
  <body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand font-weight-bold" href="{{url('/koleksi-buku')}}">AkuSaranin - BacaBuku 📚</a>

<div class="dropdown">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
    AkuSaranin
  </button>
   <ul class="dropdown-menu dropdown-menu-end">
    <li><button class="dropdown-item" type="button">BacaBuku</button></li>
    <li><button class="dropdown-item" type="button">LiatFilm</button></li>
    <li><button class="dropdown-item" type="button">COMING SOON</button></li>
  </ul>
</div>

  </div>
</nav>



<main>
 @yield('content')
{{-- 

  <div class="album py-5 bg-light">
    <div class="container">
     
    </div>
  </div> --}}

</main>
<footer class="text-muted py-5">
  <div class="container text-center">
    <p class="float-end mb-1">
    </p>
    <p class="mb-4">Made with ❤️ by grinaldyafi <br> &copy;Bootstrap @camp404</p>
   </div>
</footer>

     </body>
    
</html>