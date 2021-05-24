<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    </head>
    <body class="antialiased">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Kegiatan Praktikum KCBV</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{url('/home111')}}">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/Artikel111')}}">Artikel</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="{{url('/Contac111')}}">Contact us</a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <table class="table">
                                <thead>
                                  <tr>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Kontak</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Sosial Media</th>
                                    <th scope="col">Foto Saya</th>
                                  </tr>
                                  
                                </thead>
                                <tbody>
                                  <tr>
                                    <th scope="row">Muhammad Ilham Hidayatullah</th>
                                    <td>087846101513</td>
                                    <td>milhamh99@gmail.com</td>
                                    <td>m_iiilhamm</td>
                                    <td><img src="{{url('/storage/foto_saya.jpg')}}"></td>
                                    </head>
                                  </tr>
                                  <tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>