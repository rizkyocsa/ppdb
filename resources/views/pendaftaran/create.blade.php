@extends('layouts.apps')

@section('title', 'Pendaftaran')

@section('content')
<div class="main-content project">
    <div class="row">
        <div class="col-12">
            @php $email=Auth::user()->email; $ada=false; @endphp
            @foreach($pendaftaran as $pendaftaran)
                @if($pendaftaran->by_email === $email)
                    @php $ada=true; @endphp
                @endif
            @endforeach
            @if($ada)
                Anda sudah mendaftar tunggu hasilnya pada menu dashboard
            @else
            <div class="box">
                <form action="{{ route('create.pendaftaran') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Nama Lengkap</label> 
                                    <input class="form-control" placeholder="Nama" name="nama_lengkap" id="nama_lengkap" required/>  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Tempat Lahir</label> 
                                    <input class="form-control" placeholder="Tempat"  name="tempat" id="tempat" required/> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Tanggal Lahir</label> 
                                    <input class="form-control " type="date" name="tanggal" id="tanggal" required/>
                                    <!-- <input class="form-control" placeholder="Jurusan"  name="tanggal" id="tanggal" required/>  -->
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group">
                                    <label>Jenis Kelamin</label>
                                    <select class="select" name="jk" id="jk">
                                        <option value="">-- Jenis Kelamin --</option>
                                        <option value="L">Laki - Laki </option>
                                        <option value="P">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group">
                                    <label>Agama</label>
                                    <select class="select" name="agama" id="agama">
                                        <option value="">-- Agama --</option>
                                        <option value="Budha">Budha</option>
                                        <option value="Islam">Islam</option>
                                        <option value="Khonghucu">Khonghucu</option>
                                        <option value="Katolik">Kristen Katolik</option>
                                        <option value="Protestan">Kristen Protestan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">No HP</label> 
                                    <input class="form-control" placeholder="No HP"  name="no_hp" id="no_hp" required/> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Alamat</label> 
                                    <input class="form-control" placeholder="Alamat"  name="alamat" id="alamat" required/> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Nama Ayah</label> 
                                    <input class="form-control" placeholder="Nama Ayah"  name="nama_ayah" id="nama_ayah" /> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Pekerjaan Ayah</label> 
                                    <input class="form-control" placeholder="Pekerjaan Ayah"  name="pekerjaan_ayah" id="pekerjaan_ayah" /> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Nama Ibu</label> 
                                    <input class="form-control" placeholder="Nama Ibu"  name="nama_ibu" id="nama_ibu" /> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Pekerjaan Ibu</label> 
                                    <input class="form-control" placeholder="Pekerjaan Ibu"  name="pekerjaan_ibu" id="pekerjaan_ibu" /> 
                                </div>
                            </div>
                        </div>
                    </div>
                    <input class="form-control" value="proses" placeholder=""  name="status" id="status" hidden/> 
                    <input class="form-control" value="{{{Auth::user()->email }}}" placeholder=""  name="byemail" id="byemail" hidden/> 
                    <div class="gr-btn mt-15">
                        <button type="submit" class="btn btn-primary btn-lg fs-16">SUBMIT</button>
                    </div>
                </form>       
            </div>
            @endif
            
        </div>
    </div>
@endsection

@section('script')
<script>
    // $(document).ready(function(){
    //     $('input[id="nilaiUN"]').change(function(e){
    //         var fileName = e.target.files[0].name;
    //         $('input[id="placeUN"]').attr("placeholder", fileName);
    //     });
    // });
    // $(document).ready(function(){
    //     $('input[id="photo"]').change(function(e){
    //         var fileName = e.target.files[0].name;
    //         $('input[id="placephoto"]').attr("placeholder", fileName);
    //     });
    // });
</script>
@endsection