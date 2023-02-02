@extends('template.base')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <!--breadcrumbs start -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{url('admin/mahasiswa')}}"><i class="fa fa-home"></i> Mahasiswa</a></li>
        <li class="breadcrumb-item"><a href="#">Edit Data Mahasiswa</a></li>
      </ol>
    </nav>
    <!--breadcrumbs end -->
  </div>
</div>


<div class="row">
  <div class="col-sm-12">
    <section class="card">
      <header class="card-header text-uppercase">
        <div class="card-header d-flex flex-column justify-content-center text-center align-items-center">
        <img src="{{url('public/app/images')}}/toga.png" class="img-fluid mb-3" alt="" style="width:100px" />

          <h5 class="mt-2">Edit Data Mahasiswa {{$mahasiswa->nama}}</h5>
        </div>

      </header>
      <div class="card-body">

     
      <form action="{{url('admin/mahasiswa/edit/store', $mahasiswa->id )}}" method="post" enctype="multipart/form-data" >
          @csrf
          @method("PUT")
          <div class="row">
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Nama Mahasiswa</label>
                    <input type="text" name="nama" class="form-control"  value="{{$mahasiswa->nama}}">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Program Studi</label>
                    <input type="text" name="prodi" class="form-control"  value="{{$mahasiswa->prodi}}">
                </div>
            </div>          
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Semester</label>
                    <input type="text" name="semester" class="form-control"  value="{{$mahasiswa->semester}}">
                </div>
            </div>            
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Kelas</label>
                    <input type="text" name="kelas" class="form-control"  value="{{$mahasiswa->kelas}}">
                </div>
            </div>
            
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Angkatan</label>
                    <input type="text" name="angkatan" class="form-control"  value="{{$mahasiswa->angkatan}}">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <label class="form-label">Foto</label>
                    <input class="form-control form-control-sm" id="formFileSm" type="file" name="foto"  accept=".jpeg,.jpg,.png">
                </div>
            </div>
            <div class="col-12">
                <div class="mb-3">
                    <button class="btn btn-primary">Simpan</button>                
                </div>
            </div>
          </div>
        </form>
      </div>
    </section>
  </div>
</div>

@endsection