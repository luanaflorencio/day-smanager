<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Day's Manager</title>

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

  {{-- Bootstrap Style --}}
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

  {{-- Bootstrap Script using defer --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous" defer>
  </script>

  <!-- Styles -->
  <style>
    body {
      background-image: url('/assets/img/GalaxyBackground.svg');
      background-repeat: no-repeat;
      background-position: end;
      background-size: cover;
      background-color: #000211
    }

    .menu {
      margin-top: 2rem;
    }

    .content {
      max-width: 614px;
      margin-top: 128px;
    }

    .elipse {
      position: absolute;
      box-shadow: inset 0px 25px 50px rgba(103, 6, 178, 0.28);
      background: #000211;
      /* top: 84%; */
      /*left: 50%; */
      /* transform: translate(-50%, -50%); */
      border-radius: 50% 50% 0 0;
      /* border-radius: 50%; */
      height: 150px;
      width: 100%;
    }

    .dive {
      display: flex;
      align-items: flex-end;
      justify-content: center;
      height: 52vh;
      overflow: hidden;
    }

    .box-text {
      display: flex;
      justify-content: flex-end;
      margin-top: 2%;
    }

    #about {
      /* margin-right: 20px; */
      color: white;
      text-decoration-line: none;
      font-size: 18px;
      font-weight: bold;
    }

    #contact {
      color: white;
      text-decoration-line: none;
      font-size: 18px;
      font-weight: bold;
    }

    #login {
      /* margin-right: 20px; */
      color: white;
      text-decoration-line: none;
      font-size: 18px;
      font-weight: bold;
    }

    #reg {
      margin-right: 20px;
      color: white;
      text-decoration-line: none;
      font-size: 18px;
      font-weight: bold;

    }

    #text {
      font-size: 25px;
      color: #ff8e01;
      flex-wrap: nowrap;
    }
    .items{
        display: flex;
        justify-content: flex-end;
        width: 100%;
    }

    h1 {
      color: white;
      text-align: center;
      font-size: 70px;
      font-weight: bold;
      margin-top: 5%;
    }

    p {
      color: white;
      text-align: center;
      font-weight: normal;

    }

    .btn-outline-secondary{
        border: 1px solid #ff8e01;
        color:#ff8e01;
    }

    .btn-outline-secondary:hover{
        background: #ff8e01;
    }

  </style>

</head>

<body class="antialiased">
  @yield('content')

</body>

</html>
