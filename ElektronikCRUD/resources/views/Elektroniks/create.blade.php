<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Form Pengisisan</title>
  </head>
  <body>

<div class="container">
    <h1>Form Pengisian</h1>
    <form action="{{ route("store") }}" method="POST">
    @csrf
        <div class="mb-3">
          <label for="nama_barang" class="form-label">Nama Barang</label>
          <input type="text" class="form-control" id="nama_barang" name="nama_barang">
        </div>
        <div class="mb-3">
          <label for="harga_barang" class="form-label">Harga</label>
          <input type="number" class="form-control" id="harga_barang" name="harga_barang">
        </div>
        <div class="mb-3">
            <label for="stok" class="form-label">stok</label>
            <input type="number" class="form-control" id="stok" name="stok">
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>