@extends('admin.layouts.app2')
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
              <h1 class="m-0 text-dark">Halaman Product</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                <li class="breadcrumb-item active">Products </li>
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
                            <h3 class="card-title">Ubah Data Produk</h3>
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

						  @foreach ($categories as $category)
						    <form action="{{ route('category.update',$category->category_id) }}" method="POST">
						        @csrf
						        @method('PUT')
						   
						         <div class="row">
						          					
						<div class="row col-sm-12">
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Nama Kategori <b class="text-danger">*</b></strong>
					                <input type="text" name="category_name" class="form-control" placeholder="Masukan kode produk" value="{{ $category->category_name }}">
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-12 col-md-12 text-center"><br />
					                <button type="submit" class="btn btn-primary">Update</button>
					        </div>
					    </div>
						   @endforeach
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