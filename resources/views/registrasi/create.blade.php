@extends('layouts.apps')

@section('title', 'Registrasi')

@section('content')
<div class="main-content project">
    <div class="row">
        <div class="col-12">
            @php $email=Auth::user()->email; $ada=false; @endphp
            @foreach($registrasi as $registrasi)
                @if($registrasi->byemail === $email)
                    @php $ada=true; @endphp
                @endif
            @endforeach
            @if($ada)
                Anda sudah mendaftar
            @else
            <div class="box">
                <form action="{{ route('create.registrasi') }}" method="post" enctype="multipart/form-data">
                @csrf
                    <div class="box-body">
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Nama</label> 
                                    <input class="form-control" placeholder="Nama" name="name" id="name" required/>  
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Asal Sekolah</label> 
                                    <input class="form-control" placeholder="Asal Sekolah"  name="asal_sekolah" id="asal_sekolah" required/> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 mb-24">
                                <div class="form-group"> 
                                    <label class="form-label">Jurusan</label> 
                                    <input class="form-control" placeholder="Jurusan"  name="minat_jurusan" id="minat_jurusan" required/> 
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group"> <label class="form-label">Nilai UN:</label>
                                    <div class="input-group file-browser"> 
                                        <input type="text" class="form-control border-end-0 browse-file" placeholder="choose" id="placeUN" readonly="true"> 
                                        <label class="input-group-append mb-0"> <span class="btn ripple btn-light"> Browse 
                                        <input type="file" class="file-browserinput" style="display: none;" multiple="" name="nilaiUN" id="nilaiUN" onclick="alertnilaiUN()" required/> </span> </label>                                            </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group"> <label class="form-label">Photo:</label>
                                    <div class="input-group file-browser"> 
                                        <input type="text" class="form-control border-end-0 browse-file" placeholder="choose" id="placephoto" readonly=""/> 
                                        <label class="input-group-append mb-0"> <span class="btn ripple btn-light"> Browse 
                                        <input type="file" class="file-browserinput" style="display: none;" multiple="" name="photo" id="photo" onclick="alertphoto()" required/> </span> </label>                                            </div>
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
    $(document).ready(function(){
        $('input[id="nilaiUN"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('input[id="placeUN"]').attr("placeholder", fileName);
        });
    });
    $(document).ready(function(){
        $('input[id="photo"]').change(function(e){
            var fileName = e.target.files[0].name;
            $('input[id="placephoto"]').attr("placeholder", fileName);
        });
    });
</script>
@endsection