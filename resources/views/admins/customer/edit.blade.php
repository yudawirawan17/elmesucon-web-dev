@extends('layouts.app2')
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

						  @foreach ($products as $product)
						    <form action="{{ route('product.update',$product->id) }}" method="POST">
						        @csrf
						        @method('PUT')
						   
						         <div class="row">
						          					
						<div class="row col-sm-12">
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kode <b class="text-danger">*</b></strong>
					                <input type="text" name="product_code" class="form-control" placeholder="Masukan kode produk" value="{{ $product->product_code }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kategori <b class="text-danger">*</b></strong>
					                <select class="form-control" name="category_id">
                                        @foreach ($categories as $category)
                                            <option 
                                            	value="{{$category->category_id}}"
	                                            	@if ($category->category_id === $product->category_id)
	                                            		selected
	                                            	@endif
                                            	>
                                            	{{$category->category_name}}
                                            </option>
                                        @endforeach
                                    </select>
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Nama <b class="text-danger">*</b></strong>
					                <input type="text" name="name" class="form-control" placeholder="Masukan nama produk" value="{{ $product->name }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Merek <b class="text-danger">*</b></strong>
					                <input type="text" name="brand" class="form-control" placeholder="Masukan merek produk" value="{{ $product->brand }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Tipe</strong>
					                <input type="text" name="type" class="form-control" placeholder="Masukan tipe produk" value="{{ $product->type }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kelas</strong>
					                <input type="text" name="class" class="form-control" placeholder="Masukan kelas (ketahanan, ketebalan, bahan)" value="{{ $product->class }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Ukuran</strong>
					                <input type="text" name="size" class="form-control" placeholder="Masukan ukuran produk (p*l*t)" value="{{ $product->size }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Warna</strong>
					                <input type="text" name="color" class="form-control" placeholder="Masukan warna produk" value="{{ $product->color }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Harga <b class="text-danger">*</b></strong>
					                <input type="text" name="price" class="form-control" placeholder="Masukan harga produk tanpa '.' atau ','" value="{{ $product->price }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Stok <b class="text-danger">*</b></strong>
					                <input type="text" name="stock" class="form-control" placeholder="Masukan stok barang" value="{{ $product->stock }}">
					            </div>
					        </div>
					        <div class="col-sm-12">
					            <div class="form-group col-sm-12">
					                <strong>Detail <b class="text-danger">*</b></strong>
					                <textarea class="form-control" style="height:150px" name="detail" placeholder="Masukan detail deskripsi produk" value="{{ $product->detail }}"><?php echo $product->detail ?></textarea>
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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