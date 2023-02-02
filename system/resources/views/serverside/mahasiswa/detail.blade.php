@extends('template.base')
@section('content')

<div class="row">
  <div class="col-lg-12">
    <!--breadcrumbs start -->
    <nav aria-label="breadcrumb">
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="{{url('admin/beranda')}}"><i class="fa fa-home"></i> Beranda</a></li>
        <li class="breadcrumb-item"><a href="{{url('admin/mahasiswa')}}"><i class="fa fa-home"></i>Mahasiswa </a></li>
        <li class="breadcrumb-item"><a href="#">Detail Mahasiswa</a></li>
      </ol>
    </nav>
    <!--breadcrumbs end -->
  </div>
</div>


<div class="card" style="width: fit-content !important;">
    <div calass="card-header">
        <h4 class="py-4 px-4 text-center">MAHASISWA</h4>
    </div>
    <div calass="card-body mt-5 pb-5" >
        <div class="mx-3 d-flex pb-3">
            <img src="{{url('public/app/mahasiswa/', $detailMahasiswa->foto)}}" class="" alt="" style="width: 200px; height: auto;">

            <div class=" mx-5 mt-3">
                <table class="ml-5">
                    <tbody>
                        <tr>
                            <td style="width:155px;">
                                <h4>Nama</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->nama}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Prodi</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->prodi}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Semester</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->semester}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Kelas</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->kelas}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Angkatan</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->angkatan}}</h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4>Created By</h4>
                            </td>
                            <td>
                                <h4>: {{$detailMahasiswa->created_by->username}}</h4>
                            </td>
                        </tr>
                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection