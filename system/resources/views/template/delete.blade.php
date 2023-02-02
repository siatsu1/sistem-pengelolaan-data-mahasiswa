<form action="{{$url}}" method="post" onsubmit="return confirm('Yakin ingin menghapus data mahasiswa ini?')">
    @csrf
    @method("delete")
    <button class="btn btn-sm btn-danger"> <i class="bi bi-trash-fill"></i> </button>

</form>