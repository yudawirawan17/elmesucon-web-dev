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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active">Edit Image </li>
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
                            <h3 class="card-title">Lihat Produk</h3> 
                        </div>    
                    <div class="card-body">
                        @foreach ($categories as $category)
                    	    <div class="row">
						        <div class="col-lg-12 margin-tb">
						            <div class="pull-left">
						                <h2>{{ $category->category_name }}</h2>
						            </div>
						        </div>
						    </div>

						    <div class="card mb-3">
							  <div class="row g-0">
							    <div class="col-md-6">
							      <table>
							      	<tr align="center">
							      	  <td><img  style="max-width: 500px;max-height: 460px;" src="/images/category/{{$category->image}}" class="img-fluid rounded-start" alt="..."></td>
							      	</tr>
							      	<tr align="center">
							      	  <td></td>
							      	</tr>
							      </table>
							    </div>
							    <div class="col-sm-6 table-responsive">
							      <div class="card-body">

							      	<form action="{{ url('ops/UpdateImageCategory', $category->category_id) }}" method="post" enctype="multipart/form-data">
							      		
							      		@csrf
								      	<div class="row">
								      		<strong>Nama Gambar :</strong>
								      	</div>
								      	<div class="row">
								      		{{ $category->image }}
								      	</div> <br />
								      	<div class="row">
								      		<input type="file" name="image">
								      	</div> <br />
								      	<div class="row">
								      		<button type="submit" class="btn btn-info" ><i class="nav-icon fas fa-edit"></i> Update</button>
								      	</div>
							      	</form>

							      </div>
							    </div>
							  </div>
							</div>

						    @endforeach
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