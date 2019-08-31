<!doctype html>
<html lang="en">
  <head>
    <link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway&display=swap" rel="stylesheet">
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/font.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/e069917fb0.js"></script>
    <title>SIPEMA UNJ - Tentang</title>
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
        <a class="nav-item nav-link" href="/"><i class="fas fa-home"></i> Home <span class="sr-only">(current)</span></a>
        <a class="nav-item nav-link" href="/about"><i class="fas fa-info"></i> Tentang</a>
        <a class="nav-item nav-link active" href="/add"><i class="fas fa-plus-circle"></i> Tambah Data</a>
        </div>
    </div>
    </nav>
    <div class ="row">
        <div class="col-md-6 mx-5">
            <div class="text-center">
            <p style="font-size: 40px;">Tambah Makanan</p>
            <hr>
            <p style="font-size: 20px;">Buat permintaan untuk menambahkan makanan! silahkan isi data berikut:</p>
            </div>
        <form>
            <div class="form-group">
                <label for="nama_makanan">Nama makanan:</label>
                <input type="text" class="form-control" id="nama_makanan" name="nama_makanan" placeholder="sate taichan">
            </div>

            <div class="form-group">
                <label for="nama_kantin">Nama kantin:</label>
                <input type="text" class="form-control" id="nama_kantin" name="nama_kantin" placeholder="kantin blok M">
            </div>

            <div class="form-group">
                <label for="harga">Harga:</label>
                <input type="number" class="form-control" id="harga" name="harga" placeholder="10000">
            </div>

            <div class="form-group">
                <label for="exampleFormControlFile1">Bukti menu (<b>untuk validasi bahwa makanan memang benar ada</b>):</label>
                <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>

            <button type="submit" class="btn btn-primary">Submit data</button>
        </form>
        </div>

    </div>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>