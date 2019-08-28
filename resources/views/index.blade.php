<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e069917fb0.js"></script>
    <title>SIPEMA UNJ - Sistem Pencari Makanan UNJ</title>
  </head>
  <body>
    <div class ="container-fluid">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand py-0" href="#"><p style="font-size:40px"><span class="badge badge-sucess"><i class="fas fa-utensils"></i> SIPEMA</span></p></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/about"><i class="fas fa-info"></i> Tentang</a>
        <a class="nav-item nav-link" href="/add"><i class="fas fa-plus-circle"></i> Tambah Data</a>
        </div>
    </div>
    </nav>
    <div class ="row">
      <div class="col-md-6">
        <img src="{{ asset('images/street_food.png') }}" width="500" height="250" alt="" class="img-fluid float-right">
      </div>
      <div class="col-md-6">
        <br><p>
        <div class ="sipema-text" style="font-size: 60px;">SIPEMA UNJ</div>
        <div class ="sipema-text" style="font-size: 25px;">Sistem Pencarian Makanan di Sekitar UNJ</div>
      </div>
      </div>
    <div class="row">
        <div class ="col-md-4 text-center">
          <p class ="text-center" style="font-size: 25px">Jumlah Data</p>
          <hr>
          <p>Jumlah data makanan saat ini: {{ $jumlah }}</p>
          <button type="button" class="btn btn-primary"><a style="color:white;" href="/add">Tambah Data</a></button>
          <br>
          <br>
        </div>
        <div class ="col-md-4">
            <p class ="text-center" style="font-size: 25px">Cari Makanan 🍔🍟🍕</p>
            <hr>
            <form method="post" action="/" class="form-inline justify-content-center">
            @csrf
                <input class="form-control mr-md-2" type="text" id="search" name="search" placeholder="Nasi goreng" aria-label="Search">
                <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Search</button>
            </form>
        @isset ($food)
        @if ( count($food) > 0 )
        <table class="table my-3">
        <thead class="thead-dark">
          <tr>
              <th scope="col">Nama Makanan</th>
              <th scope="col">Nama Kantin</th>
              <th scope="col">Harga</th>
          </tr>
        </thead>
        <tbody>
        @foreach ( $food as $foods )
        <tr>
          <td> {{ $foods->nama_makanan }}</td>
          <td> {{ $foods->nama_kantin }}</td>
          <td> {{ $foods->harga }}</td>
        </tr>
        </tbody>
        @endforeach
        </table>
        @else

        <div class="alert alert-danger my-2" role="alert" id="index">
          Maaf, makanan yang kamu dicari tidak ditemukan.
        </div>

        @endif
        @endisset
        </div>
        <div class ="col-md-4">
          <p style="font-size: 25px" class="text-center">Pencarian Terakhir:
          <hr>
            <div class="alert alert-secondary" role="alert" id="index">
              Nasi goreng<br>
              Ayam bakar<br>
              Soto<br>
              Ayam penyet<br>
              Sate<br>
            </div>
        </p>
        </div>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>