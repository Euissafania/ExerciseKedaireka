@extends('layouts.admin')

@push('style')
  <!-- Custom styles for this page -->
  <link href="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">  
@endpush

@section('content')
 <!-- Page Heading -->
 <h1 class="h3 mb-2 text-gray-800">Tables Type Elektronik</h1>

 <!-- DataTales Example -->
 <div class="card shadow mb-4">
     <div class="card-header py-3">
         <h6 class="m-0 font-weight-bold text-primary">DataTables Type Elektronik</h6>
     </div>
     <div class="card-body">
         <div class="table-responsive">
          <a href="/create_type"><button type="button" class="btn btn-primary mb-3">+ Tambah Data</button></a>
             <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                      <th>No</th>
                      <th>Type Elektronik</th>
                      <th>Stok</th>
                      <th>Description</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
              @foreach ($elektronikTypes as $no => $type)
                    <tr>
                      <td>{{ $no + 1}}</td>
                      <td>{{ $type ->nama_type}}</td>
                      <td>{{ $type ->stok}}</td>
                      <td>{{ $type->description}}</td>
                      <td class="d-flex">
                          <a href="{{ route("edit", $type ->id) }}" class="btn btn-warning mr-2">Ubah</a>
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
         </div>
     </div>
 </div>
</div>
@push('script')

<!-- Page level plugins -->
<script src="{{ asset('assets/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('assets/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>

<!-- Page level custom scripts -->
<script src="{{ asset('assets/js/demo/datatables-demo.js') }}"></script>

@endpush
@endsection