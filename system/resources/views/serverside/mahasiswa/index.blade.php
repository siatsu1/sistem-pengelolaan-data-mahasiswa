@extends('template.base')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <!--breadcrumbs start -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item"><a href="#">Mahasiswa</a></li>
      </ol>
    </nav>
    <!--breadcrumbs end -->
  </div>
</div>


<div class="card">
  
    <div class="row">
        <div class="col-sm-12">
            <section class="card">
                <header class="card-header text-uppercase">
                    <div class="card-header d-flex flex-column justify-content-center text-center">
                    <h5 class="mt-2">Data Mahasiswa Universitas ABC</h5>
                    </div>

                </header>
                <div class="card-body">

                    <div class="adv-table">
                    <div class="d-flex justify-content-end mb-2">
                        <a class="btn btn-primary btn-sm" href="{{url('admin/mahasiswa/create')}}">
                        <i class="fa fa-plus"></i> Tambah Mahasiswa
                        </a>
                    </div>
                    <div class="table-responsive">
                        <table id="example2" class="table table-striped table-bordered">
                        <thead>
                            <tr class="text-center text-uppercase">
                                <th>AKSI</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                                <th>Semester</th>
                                <th>Kelas</th>
                                <th>Angkatan</th>
                                                                
                            </tr>
                        </thead>
                        <tbody>


                            @foreach($mahasiswa as $data)
                            <tr class="gradeA">
                                <td class="text-center d-flex justify-content-center">
                                    <!-- tombol edit -->
                                    <a href="{{url('admin/mahasiswa/edit', $data->id)}}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-fill"></i>
                                    </a>
                                    <!-- tombol detail -->
                                    <a href="{{url('admin/mahasiswa/detail', $data->id)}}" class="btn btn-secondary btn-sm">
                                        <i class="bi bi-eye-fill"></i>
                                    </a>
                                    <!-- tombol hapus -->
                                    @include('template.delete', ['url' => url('admin/mahasiswa/delete', $data->id)])
                                </td>
                                <td>{{$data->nama}}</td>
                                <td>{{$data->prodi}}</td>
                                <td>{{$data->semester}}</td>
                                <td>{{$data->kelas}}</td>
                                <td>{{$data->angkatan}}</td>
                            </tr>
                            @endforeach
                           


                        </tbody>
                        </table>

                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

@endsection