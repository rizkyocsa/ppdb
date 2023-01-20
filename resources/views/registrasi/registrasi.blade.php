@section('content')
<div class="container-fluid">
    <div class= "card card-default">
        <div class= "card-header">{{ __('Pengelolaan Registrasi') }}</div>
            <div class= "card-body">
                <table id="table-data" class="table table-bordered">
                    <thead>
                        <tr class= "text-center">
                            <th>Nama Depan</th>
                            <th>Nama Belakang</th>
                            <th>Alamat</th>
                            <th>Tanggal Lahir</th>
                        </tr>
                    </thead>
                <tbody>
                    #php $no=1; @endphp
                    @foreach ($registrasi as $registrasi)
                        <tr>
                            <td>{{$no++}}</td>
                            <td>{{$registrasi -> nama_depan}}</td>
                            <td>{{$registrasi -> nama_belakang}}</td>
                            <td>{{$registrasi -> alamat}}</td>
                            <td>{{$registrasi -> tanggal_lahir}}</td>
                            <td>
                                @if($registrasi ->cover !== null)
                                <img src="{{asset('storage/cover_registrasi/' .$registrasi ->cover)}}" width="100px"/>
                                @else
                                    [GAMBAR TIDAK TERSEDIA]
                                @endif
                            </td>
                            <td></td>
                        <tr>
                            @endforeac
                    </tbody>
                </table>
            </div>
    </div>
</div>

<div class= "modal fade" id="tambahRegistrasiModal" tabindex="-1"aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class= "modal-dialog">
        <div class= "modal-content">
            <div cass= "modal-header">
            <h5 class = "modal-tittle" id = "exampleModalLabel"> Tambah Data </h5>
            <button type = "button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden= "true">&times; </span>
            </button>
        </div>
    <div class ="modal-body">
        <form method= "post" action="{{ route('admin.registrasi.submit') }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="nama_depan">Nama Depan</label>
                <input type="text" class="form-control" name="nama_depan" id="nama_depan" required/>
            </div>
            <div class="form-group">
                <label for="nama_belakang">Nama Belakang</label>
                <input type="text" class="form-control" name="nama_belakang" id="nama_belakang" required/>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" id="alamat" required/>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="text" class="form-control" name="tanggal_lahir" id="tanggal_lahir" required/>
            </div>
            <div class="form-group">
                <label for="cover">Cover</label>
                <input type="text" class="form-control" name="cover" id="cover" required/>
            </div>
    </div>
    <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
        <button type="button" class="btn btn-primary">Kirim</button>
    </div>
        </form>
    </div>
</div>
</div>
</div>
@stop
@endsection