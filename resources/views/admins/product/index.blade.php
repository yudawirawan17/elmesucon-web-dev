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
                            <h3 class="card-title col-sm-7">Daftar Produk</h3> 
                        </div><br/> 
                        <div class="row col-lg-12">
                            <p class="text-white">aa</p>   
                            <a class="btn btn-success col-sm-2" href="{{ route('admin.product.tambah') }}"><i class="nav-icon fas fa-cube"></i> Tambah Produk</a>
                        </div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Kode</th>
                                    <th>Nama</th>
                                    <th>Merek</th>
                                    <th>Kategori</th>
                                    <th>Stok</th>
                                    <th width="80px">Opsi</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                    <tr>
                                        <td>{{ $product->id }}</td>
                                        <td>{{ $product->code }}</td>
                                        <td>{{ $product->name }}</td>
                                        <td>{{ $product->brand }}</td>
                                        <td>{{ $product->nama_kategori }}</td>
                                        <td>{{ $product->stok }}</td>
                                        <td>
                               
                                                <a class="btn btn-info btn-sm" href="{{ route('admin.product.edit',['id'=>$product->id]) }}"><i class="nav-icon fas fa-edit"></i> Show/Edit</a>
                                                <a href="{{ route('admin.product.delete',['id'=>$product->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                                    <i class="nav-icon fas fa-trash"></i>Delete
                                                  </a>
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