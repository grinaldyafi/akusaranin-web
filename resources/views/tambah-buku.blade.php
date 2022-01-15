<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->

    <title>📚 AkuSaranin - Buku</title>
  </head>
  <body>

@extends('template')
@section('content')
<main>
  <section class="py-3 text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h3 class="font-weight-bold">Mau Kasih Rekomendasi Buku nih? 📙</h3>
        <p class="lead text-muted">Yeay! 🎉 Yuk sedikit lagi kamu bisa nambahin buku rekomendasimu supaya orang lain juga tahu.<br><br><i>Rasulullah Shallallahu’alaihi Wasallam bersabda: “Sebaik Baik Manusia Adalah Yang Paling Bermanfaat Bagi Orang Lain.” </i><br><strong>Langsung aja tambahin di bawah 😎👇</strong><p>
          <a href="{{url('/koleksi-buku')}}" class="btn btn-primary my-2">Koleksi Buku</a>
          <a href="{{url('/tambah-buku')}}"class="btn btn-secondary my-2">Kasih Rekomendasi Buku</a>
        </p>
      </div>
    </div>
  </section>
<div class="album py-5 bg-light">
    <div class="container">
      <form class="d-flex">
        <input class="form-control mx-auto" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-dark" type="submit">Search</button>
      </form>
      <br>
      <div class="container">
      <div class="card">
          <div class="card-header">
              <h3>Kontribusi Buku</h3>
          </div>
          <div class="card-body">
            <a  href="{{route ('tambah-buku.create')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Tambahin Buku </a>
              <br>
              <table class="table table-bordered table-striped">
                 <br>
                  <tr>
                      <th> Judul Buku </th>
                      <th> Genre </th> 
                      <th> Tahun Terbit </th>
                      <th> Aksi </th>
                  </tr>
                  @foreach($tambahbuku as $b)
                  <tr>
                    <td>{{$b->judul_buku}}</td>
                    <td>{{$b->genre}}</td>
                    <td>{{$b->tahun_terbit}}</td>
                    <td>
                      <ul class="nav">
                        <a href="{{route ('tambah-buku.show', $b->id)}}" class="btn btn-success mr-2"> Detail </a>&nbsp;
                        <a href="{{route ('tambah-buku.edit', $b->id)}}" class="btn btn-primary mr-2">Edit </a>&nbsp;
                        <form action="{{route ('tambah-buku.destroy', $b->id)}}" method="POST">&nbsp;
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger"> Delete</button>
                        </form>
                      </ul>
                    </td>
                  </tr>
                  @endforeach
              </table>
            </div>
      </div>
    </div>

    </div>
    </div>
  </div>
</main>
@endsection
     </body>
    
</html>