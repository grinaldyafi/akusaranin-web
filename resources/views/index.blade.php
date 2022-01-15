
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
   
    <title>📚 AkuSaranin - Buku </title>
  </head>
  <body>
<main>
@extends('template')

@section('content')
  <section class="py-4 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="font-weight-bold">AkuSaranin - BacaBuku 📚</h1>
        <p class="lead text-muted">Rekombuk merupakan platform koleksi buku rekomendasi. Tidak hanya mencari buku rekomendasi, di sini kamu juga dapat menambah buku yang kamu rekomendasikan.<br><br> <strong>Tunggu apalagi? Kontribusimu sangat kami tunggu 😎👇</strong><p>
          <a href="{{url('/koleksi-buku')}}" class="btn btn-primary my-2">Koleksi Buku</a>
          <a href="{{url('/tambah-buku')}}"class="btn btn-secondary my-2">Kasih Rekomendsi Buku</a>
        </p>
      </div>
    </div>
  </section>

  
@endsection

     </body>
    
</html>