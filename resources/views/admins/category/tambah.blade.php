@extends('admins.layouts.app2')
@section('styles')
<!-- DataTables -->
<link rel="stylesheet" href="{{url('AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.css') }}">
@endsection

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Tambah Kategori Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/ops">Home </a></li>
                <li class="breadcrumb-item "><a href="/ops/product">Category </a></li>
                <li class="breadcrumb-item active">Add Category </li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Informasi Data Kategori Produk</h3>
                        </div>    
                    <div class="card-body">
                        
                    	@if ($errors->any())
					    <div class="alert alert-danger">
					        <strong>Whoops!</strong> There were some problems with your input.<br><br>
					        <ul>
					            @foreach ($errors->all() as $error)
					                <li>{{ $error }}</li>
					            @endforeach
					        </ul>
					    </div>
					@endif
					   
					<form action="{{ route('admin.categories.store') }}" method="POST" enctype="multipart/form-data">
					    @csrf
					  
					     <div class="row col-sm-12">
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Nama Kategori <b class="text-danger">*</b></strong>
					                <input type="text" name="name" class="form-control" placeholder="Masukan Nama Kategori produk" value="{{ old('name') }}">
					            </div>
					        </div>	
					        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br />
					                <button type="submit" class="btn btn-primary">Submit</button>
					        </div>
					    </div>
					   
					</form>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascripts')
<!-- DataTables -->
<script src="{{url('AdminLTE/plugins/datatables/jquery.dataTables.js') }}"></script>
<script src="{{url('AdminLTE/plugins/datatables-bs4/js/dataTables.bootstrap4.js') }}"></script>
<script> 
    $ ( function () {
        $('#datatable').DataTable();
    })
</script>

@endsection