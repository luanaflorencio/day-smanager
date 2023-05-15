@extends('layouts.main')
@section('content')

  <div class="container menu">
    <nav class="row navbar navbar-expand-lg">
      <div class="container-fluid">
        <a class="navbar-brand" id="text" href="#">DAY'S MANAGER</a>
        <button class="navbar-toggler bg-body-tertiary" type="button" data-bs-toggle="collapse"
          data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          @if (Route::has('login'))
            <ul class="navbar-nav me-auto mb-2 mb-lg-0 items">
              @auth
                <li class="nav-item">
                  <a class="nav-link" style="color: white;" href="{{ url('/dashboard') }}">Dashboard</a>
                </li>
              @else
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" id="about">About Us</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('register') }}" id="contact">Contact</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('login') }}" id="login">Login</a>
                </li>

                @if (Route::has('register'))
                  <a class="nav-link" href="{{ route('register') }}" id="reg">Register</a>
                @endif
              @endauth
            </ul>
          @endif
        </div>
    </nav>
    <div class="row d-flex justify-content-center">
      <div class="col content">
        <div class="col-12">
          <h1 class="title">WELCOME</h1>
        </div>
        <div class="col">
          <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sit eaque doloremque nemo, labore voluptatum quam
            quod
            fuga corrupti alias ab natus illum provident ipsum quisquam quae dignissimos temporibus illo magni!</p>
        </div>
        <div class="div-button d-flex justify-content-center">
            <button style="--bs-btn-padding-y: 2rem; --bs-btn-padding-x: 2rem; --bs-btn-font-size: 18pt;" type="button" class="btn btn-outline-secondary btn-lg">READ MORE</button>


        </div>


      </div>
    </div>
    <div class="row dive">
      <div class="col elipse">

      </div>
    </div>
  </div>


@endsection
