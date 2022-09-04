<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Kedaireka</title>
    <style>
        .container{
            width: 40%;
        }
    </style>
  </head>
  <body>

    <div class="container">
    <h1>From Edit Type</h1>
    <form action="{{ route("update", $elektronikTypes->id) }}" method="POST">
    @csrf

    
        <div class="mb-3">
          <label for="nama_type" class="form-label">Type Elektronik</label>
          <input type="text" class="form-control" id="nama_type" name="nama_type" value={{  $elektronikTypes->nama_type}}>
        </div>
        <div class="mb-3">
          <label for="stok" class="form-label">Stok</label>
          <input type="number" class="form-control" id="stok" name="stok" value={{  $elektronikTypes->stok }}>
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="description" name="description" value={{  $elektronikTypes->description}}>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>