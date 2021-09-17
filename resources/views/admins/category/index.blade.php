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
              <h1 class="m-0 text-dark">Halaman Kategori Produk</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Categories </li>
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
                            <p class="text-white">a</p> 
                            <a class="btn btn-success col-sm-2" href="{{ route('admin.categories.tambah') }}"><i class="nav-icon fas fa-tags"></i> Tambah Kategori</a>  
                        </div>
                    <div class="card-body">
                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap" id="datatable">
                                <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Nama</th>
                                    <th width="80px">Opsi</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach ($categories as $categorie)
                                    <tr>
                                        <td>{{ $categorie->id }}</td>
                                        <td>{{ $categorie->name }}</td>
                                        <td>
                                                <a class="btn btn-info btn-sm" href="#"><i class="nav-icon fas fa-edit"></i> Show/Edit</a>
                                                <a href="{{ route('admin.categories.delete',['id'=>$categorie->id]) }}" onclick="return confirm('Yakin Hapus data')" class="btn btn-danger btn-sm">
                                                <i class="nav-icon fas fa-trash"></i> Delete</a>
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