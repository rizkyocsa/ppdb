@section('content')
<div class="container-fluid">
    <div class="card card-default">
        <div class="card-header">
            {{ __('Pengelolaan Mahasiswa')}}
        </div>
        <div class="card-body">
            <table id="table-data" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                        <th>NPM</th>
                        <th>Nama</th>
                        <th>Kelas</th>
                        <th>Angkatan</th>
                        <th>Prodi</th>
                    </tr>
                </thead>
                <tbody>
                    @php $no=1; @endphp
                    @foreach($mahasiswa as $mahasiswa)
                    <tr>
                        <td>{{$npm++}}</td>
                        <td>{{$nama}}</td>
                        <td>{{$kelas}}</td>
                        <td>{{$angkatan}}</td>
                        <td>{{$prodi}}</td>
                        <td>
                            @if($mahasiswa->cover !== null)
                                <img src="{{ asset('storage/cover_mahasiswa/'.$mahasiswa->cover) }}" width="100px"/>
                            @else
                                [Gambar tidak tersedia]
                            @endif
                        </td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal fade" id="tambahMahasiswaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Mahasiswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="{{ route('mahasiswa.book.submit') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="npm">NPM</label>
                        <input type="text" class="form-control" name="npm" id="npm" required/>
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" required/>
                    </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" class="form-control" name="kelas" id="kelas" required/>
                    </div>
                    <div class="form-group">
                        <label for="angkatan">Angkatan</label>
                        <input type="text" class="form-control" name="angkatan" id="angkatan" required/>
                    </div>
                    <div class="form-group">
                        <label for="prodi">Prodi</label>
                        <input type="text" class="form-control" name="prodi" id="prodi" required/>
                    </div>
                    <div class="form-group">
                        <label for="cover">Cover</label>
                        <input type="file" class="form-control" name="cover" id="cover" required/>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
@endsection