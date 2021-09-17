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
              <h1 class="m-0 text-dark">Tambah Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                <li class="breadcrumb-item "><a href="/product">Produk </a></li>
                <li class="breadcrumb-item active">Tambah Produk </li>
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
                            <h3 class="card-title">Informasi Data Produk</h3>
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
					   
					<form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data">
					    @csrf
					  
					     <div class="row col-sm-12">
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kode <b class="text-danger">*</b></strong>
					                <input type="text" name="code" class="form-control" placeholder="Masukan kode produk" value="{{ old('code') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kategori <b class="text-danger">*</b></strong>
					                <select class="form-control" name="categories_id">
					                	<option value="categories_id"> Pilih Kategori </option>
                                        @foreach ($categories as $categorie)
                                            <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                                        @endforeach
                                    </select>
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Nama <b class="text-danger">*</b></strong>
					                <input type="text" name="name" class="form-control" placeholder="Masukan nama produk" value="{{ old('name') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Merek <b class="text-danger">*</b></strong>
					                <input type="text" name="brand" class="form-control" placeholder="Masukan merek produk" value="{{ old('brand') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Tipe</strong>
					                <input type="text" name="type" class="form-control" placeholder="Masukan tipe produk" value="{{ old('type') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Kelas</strong>
					                <input type="text" name="class" class="form-control" placeholder="Masukan kelas (ketahanan, ketebalan, bahan)" value="{{ old('class') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Ukuran</strong>
					                <input type="text" name="size" class="form-control" placeholder="Masukan ukuran produk (p*l*t)" value="{{ old('size') }}">
					            </div>
					        </div>
					        <div class="col-sm-6">
					            <div class="form-group col-sm-12">
					                <strong>Warna</strong>
					                <input type="text" name="color" class="form-control" placeholder="Masukan warna produk" value="{{ old('color') }}">
					            </div>
					        </div>
					        <div class="col-sm-3">
					            <div class="form-group col-sm-12">
					                <strong>Harga <b class="text-danger">*</b></strong>
					                <input type="text" name="price" class="form-control" placeholder="Masukan harga produk tanpa '.' atau ','" value="{{ old('price') }}">
					            </div>
					        </div>
					        <div class="col-sm-3">
					            <div class="form-group col-sm-12">
					                <strong>Stok <b class="text-danger">*</b></strong>
					                <input type="text" name="stok" class="form-control" placeholder="Masukan stok barang" value="{{ old('stok') }}">
					            </div>
					        </div>
					        <div class="col-sm-2">
					            <div class="form-group col-sm-12">
					                <strong>Berat <b class="text-danger">*</b></strong>
					                <input type="number" name="weigth" class="form-control" placeholder="dalam (gram)" value="{{ old('weigth') }}">
					            </div>
					        </div>
					        <div class="col-sm-4">
					            <div class="form-group col-sm-12">
					                <strong>Gambar</strong>
					                <input type="file" name="image" class="" value="{{ old('image') }}">
					            </div>
					        </div>	
					        <div class="col-sm-12">
					            <div class="form-group col-sm-12">
					                <strong>Detail <b class="text-danger">*</b></strong>
					                <textarea class="form-control" style="height:150px" name="description" placeholder="Masukan detail deskripsi produk" >{{ old('description') }}</textarea>
					            </div>
					        </div>
					        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
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