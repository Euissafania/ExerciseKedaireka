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
     </div>
 </div>
</div>

@endsection