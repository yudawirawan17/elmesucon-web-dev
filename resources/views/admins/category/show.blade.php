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
              <h1 class="m-0 text-dark">Kategori Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Categories</a></li>
                <li class="breadcrumb-item active">Detail </li>
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
                            <h3 class="card-title">Detail kategori</h3> 
                        </div>    
                    <div class="card-body">
                        @foreach ($categories as $category)
                    	    <div class="row">
						        <div class="col-lg-12 margin-tb">
						            <div class="pull-left">
						                <h2></h2>
						            </div>
						        </div>
						    </div>

						    <div class="card mb-3">
							  <div class="row g-0">
							    <div class="col-md-4">
							      <table>
							      	<tr align="center">
							      	  <td><img  style="max-width: 350px;max-height: 260px;" src="/images/category/{{$category->image}}" class="img-fluid rounded-start" alt="..."></td>
							      	</tr>
							      	<tr align="center">
							      	  <td><a class="btn btn-link col-sm-12" href="{{ url('ops/EditImageCategory',$category->category_id) }}"><i class="nav-icon fas fa-camera"></i> Ubah Gambar </a></td>
							      	</tr>
							      </table>
							    </div>
							    <div class="col-sm-8 table-responsive">
							      <div class="card-body">
							      	
							        <table>
							        	<tr>
							        		<td width="70px"><strong>Id</strong></td>
							        		<td width="10px"><strong>:</strong></td>
						            		<td width="470px">{{ $category->category_id }}</td>
						            		<td width="80px" align="right"></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Nama</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $category->category_name }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr height="150px">
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong></strong></td>
							        		<td><strong></strong></td>
						            		<td></td>
						            		<td><a class="btn btn-info position-absolute top-0 end-100 translate-middle" href="{{ route('category.edit',$category->category_id) }}"><i class="nav-icon fas fa-edit"></i> Edit</a></td>
							        	</tr>
							        </table>

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