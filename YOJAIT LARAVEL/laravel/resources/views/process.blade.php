<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>YOJAIT</title>

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
  <link rel="stylesheet" href="assets\css\style.css">
  <link rel="icon" href="assets\img\logo.png">
  <link rel="stylesheet" href="{{asset('css')}}style.css">

<body>
  <nav class="navbar navbar-expand-lg navbar-light py-1">
    <div class="container-fluid">
      <img src="assets\img\logo.png" alt="" width="50" height="50">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" style="font-size: large;">PROCESS</a>
          </li>
          <li class="nav-item">
            <i class="fas fa-shopping-basket" style="color : white;"></i>
          </li>
      </div>
    </div>
  </nav>
  <div class="container">
    <h2>Table</h2>
    <table class="table">
      <thead>
        <tr>
          <th>#</th>
          <th>Model Baju</th>
          <th>Nama</th>
          <th>Alamat</th>
          <th>Start Date</th>
          <th>End Date</th>
          <th>Status</th>
          <th>Type</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        @php
          $i = 1;
        @endphp
        @foreach ($data as $item)
          <tr>
            <th scope="row"> {{ $i++ }} </th>
            <td><img height="100px" src="{{url('')}}/{{$item->photo}}" class="rounded" alt=""></td>
            <td>{{ $item->nama }}</td>
            <td>{{ $item->alamat }}</td>
            <td>{{ $item->start_date }}</td>
            <td>{{ $item->end_date }}</td>
            <td>{{ $item->status }}</td>
            <td>{{ $item->type }}</td>
            <th>
              <a href="{{ route('view.booking.delete', $item->id) }}" class="btn btn-primary">Cancel</a>
            </th>
          </tr>
            
        @endforeach
        
      </tbody>
    </table>
  </div>
  <div class="buton text-center">
    <div class="mb-2">
      <a class="btn btn-outline-primary" href="done.html" role="button">DONE</a>
    </div>
    <section id="">
      <!--
    <div class="container text-center">
        <div class="row" style="margin-top: 60px;">
            <div class="col" style="margin-left: 80px;">
                <div class="card" style="width: 13rem;">
                    <img src="img/asset/Screenshot (299).png" class="card-img-top" alt="">
                    <p class="card-text">Top or Shirt</p>
                </div>
            </div>
-->