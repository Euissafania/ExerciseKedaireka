<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Elektronik Type</title>
    <style>
        .container{
            width: 80%;
            margin-top: 3%;
        }
    </style>
  </head>
  <body>

<div class="container">

  <div class="dropdown">
    <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
      Pilih Tabel
    </button>
    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
      <li><a class="dropdown-item" href="/">Tabel Elektronik</a></li>
      <li><a class="dropdown-item" href="/index_type">Tabel Type Elektronik</a></li>
    </ul>
  </div>

    <h1>Tabel Type</h1>
    <a href="{{ route("create") }}"><button type="button" class="btn btn-primary">+ ADD Type</button></a>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Type Elektronik</th>
            <th scope="col">Stok</th>
            <th scope="col">Description</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
    @foreach ($elektronikTypes as $no => $type)
          <tr>
            <td>{{ $no + 1}}</td>
            <td>{{ $type ->nama_type}}</td>
            <td>{{ $type ->stok}}</td>
            <td>{{ $type->description}}</td>
            <td>
                <a href="{{ route("edit", $type ->id) }}" class="btn btn-warning">Ubah</a>
                <form action="{{ route("destroy",$type ->id)}}" method="POST">
                    @csrf
                    @method("DELETE")
                    <button type="submit" class="btn btn-danger">Hapus</button>
                </form>
            </td>
          </tr>
    @endforeach
        </tbody>
      </table>

      {{ $elektronikTypes->links()}}
</div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>