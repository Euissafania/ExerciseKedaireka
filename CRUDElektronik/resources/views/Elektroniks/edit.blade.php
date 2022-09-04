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
    <h1>From Edit Elektronik</h1>
    <form action="{{ route("update_barang", $elektronikC->id) }}" method="POST">
    @csrf

    <div class="mb-3">
      <label for="elektronikType">Type Elektronik</label>
      <select class="custom-select d-block w-100 form-control" id="ElektronikType" name="elektronik_type_id">
          @foreach($elektronikTypes as $elektronikType)
          <option value="{{ $elektronikType->id}}"{{ $elektronikType->id==$elektronikC->id ? "selected" : "" }}>{{ $elektronikType->nama_type }}</option>
          @endforeach
      </select>
  </div>

        <div class="mb-3">
          <label for="nama_elektronik" class="form-label">Nama Barang </label>
          <input type="text" class="form-control" id="nama_elektronik" name="nama_elektronik" value={{ $elektronikC->nama_elektronik }}>
        </div>
        <div class="mb-3">
          <label for="quantity" class="form-label">Quantity</label>
          <input type="number" class="form-control" id="quantity" name="quantity" value={{ $elektronikC->quantity }}>
        </div>
        <div class="mb-3">
            <label for="haga" class="form-label">Harga</label>
            <input type="number" class="form-control" id="harga" name="harga" value={{ $elektronikC->harga }}>
          </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>