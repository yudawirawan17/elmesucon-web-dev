@extends('admin/layouts.app2')
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
              <h1 class="m-0 text-dark">Detail Produk</h1>
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
                            <h3 class="card-title">Informasi Produk</h3> 
                        </div>    
                    <div class="card-body">
                        @foreach ($products as $product)
                    	    <div class="row">
						        <div class="col-lg-12 margin-tb">
						            <div class="pull-left">
						                <h2>{{ $product->name }}</h2>
						            </div>
						        </div>
						    </div>

						    <div class="card mb-3">
							  <div class="row g-0">
							    <div class="col-md-4">
							      <table>
							      	<tr align="center">
							      	  <td><img  style="max-width: 350px;max-height: 260px;" src="/images/product/{{$product->image}}" class="img-fluid rounded-start" alt="..."></td>
							      	</tr>
							      	<tr align="center">
							      	  <td><a class="btn btn-link col-sm-12" href="{{ url('ops/EditImage',$product->id) }}"><i class="nav-icon fas fa-camera"></i> Ubah Gambar </a></td>
							      	</tr>
							      </table>
							    </div>
							    <div class="col-sm-8">
							      <div class="card-body">
							      	
							        <table>
							        	<tr>
							        		<td width="70px"><strong>Kode</strong></td>
							        		<td width="10px"><strong>:</strong></td>
						            		<td width="470px">{{ $product->product_code }}</td>
						            		<td width="80px" align="right"></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Kategori</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->category_name }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Merek</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->brand }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Tipe</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->type }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Kelas</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->class }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Ukuran</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->size }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Warna</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->color }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Harga</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>Rp {{ number_format($product->price) }}</td>
						            		<td></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Berat</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>Rp {{ number_format($product->price) }}</td>
						            		<td><a class="btn btn-info position-absolute top-0 end-100 translate-middle" href="{{ route('product.edit',$product->id) }}"><i class="nav-icon fas fa-edit"></i> Edit</a></td>
							        	</tr>
							        	<tr>
							        		<td><strong>Stok</strong></td>
							        		<td><strong>:</strong></td>
						            		<td>{{ $product->stock }}</td>
						            		<td></td>
							        	</tr>
							        </table>

							      </div>
							    </div>
							  </div>
							</div>

						    <div class="card mb-3">  	
						        <div class="col-sm-12 table-responsive ">
						            <table>
						            	<tr>
						            		<td width="100px"><strong>Deskripsi:</strong></td>
						            		<td width="810px"></td>
						            		<td ></td>
						            	</tr>
						            	<tr align="top">
						            		<td rowspan="3" colspan="2" height="100px" valign="top">{{ $product->detail }}</td>
						            	</tr>
						            	<tr>
						            		<td></td>
						            	</tr>
						            	<tr>
						            		<td valign="top" align="right"><a class="btn btn-info position-absolute top-0 end-100 translate-middle" href="{{ route('product.edit',$product->id) }}"><i class="nav-icon fas fa-edit"></i> Edit</a></td>
						            	</tr>
						            </table>
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