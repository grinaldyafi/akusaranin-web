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
      <br>
      <div class="container">
      <div class="card">
          <div class="card-header">
              <h3>Detail Buku</h3>
          </div>
          <div class="card-body"> 
            <a  href="{{route ('koleksi-buku.index')}}" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Home</a>
            <a  href="{{route ('tambah-buku.index')}}" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Kembali</a>
           
              <br><br>
              <div class="row ml-2">
              <h4 class="col-12 text-center"> Judul Buku  : {{$tambahbuku->judul_buku}}</h4>
              </div>
              <div class="row ml-2">
              <h4 class="col-12 text-center">Genre : {{$tambahbuku->genre}}</h4>
              </div>
              <div class="row ml-2">
              <h4 class="col-12 text-center"> Tahun Terbit : {{$tambahbuku->tahun_terbit}}</h4>
              </div>
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