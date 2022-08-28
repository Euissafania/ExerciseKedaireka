<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>ElektronikCRUD</title>
  </head>
  <body>

  <div class="container">
    <h1>TABEL ELEKTRONIK</h1>

  <a class="add" href="{{ route("create") }}"><button type="button" class="btn btn-info"><i class="bi bi-plus-circle"></i>&nbsp;New</button></a>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama Barang</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($elektronikC as $no => $elektronikc)
        <tr>
          <th>{{ $no + 1}}</th>
          <td>{{ $elektronikc->nama_barang}}</td>
          <td>{{ $elektronikc->harga_barang}}</td>
          <td>{{ $elektronikc->stok}}</td>
          <td>
            <a href="{{ route("edit", $elektronikc->id) }}" class="btn btn-warning" id="ubah"> Ubah</a>
            <form action="{{ route("destroy",$elektronikc->id)}}" method="POST">
                @csrf
                @method("DELETE")
                <button type="submit" class="btn btn-danger" id="ubah">Hapus</button>
            </form>
        </td>
        </tr>
      @endforeach
      </tbody>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>