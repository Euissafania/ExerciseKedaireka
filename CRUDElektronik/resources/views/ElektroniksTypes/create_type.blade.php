@extends('layouts.admin')

@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Form Type Elektronik</h1>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         {{-- <h6 class="m-0 font-weight-bold text-primary">Form Elektronik</h6> --}}
     </div>
     <div class="card-body">
         <div class="table-responsive">
          <form action="{{ route("store_type") }}" method="POST">
            @csrf
                <div class="mb-3">
                  <label for="nama_type" class="form-label">Nama Jenis </label>
                  <input type="text" class="form-control" id="nama_type" name="nama_type">
                </div>
                <div class="mb-3">
                  <label for="stok" class="form-label">Stok</label>
                  <input type="number" class="form-control" id="stok" name="stok">
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Description</label>
                  <input type="text" class="form-control" id="description" name="description">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
         </div>
     </div>
 </div>
</div>

@endsection