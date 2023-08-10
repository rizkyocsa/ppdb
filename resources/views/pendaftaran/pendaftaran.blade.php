@extends('layouts.apps')

@section('title', 'Data Registrasi')

@section('content')
<div class="main-content user">
    <div class="row">
        <div class="col-xl-12">
        <div class="box card-box mb-20">
                <!-- <div class="icon-box bg-color-1">
                    <div class="icon bg-icon-1">
                        <i class='bx bxs-briefcase'></i>
                    </div>
                    <div class="content">
                        <h5 class="title-box fs-15 mt-2">Total Pendaftar</h5>
                        <div class="themesflat-counter fs-14 font-wb color-1">
                            <span class="number" data-from="0" data-to="1225" data-speed="2500" data-inviewport="yes"></span>
                        </div>
                    </div>
                </div>
                <div class="icon-box bg-color-2">
                    <div class="icon bg-icon-2">
                        <i class='bx bx-task'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">Total User</h5>
                        <div class="themesflat-counter fs-14 font-wb color-2">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes"></span>
                        </div>
                    </div>

                </div> -->
                <!-- <div class="icon-box bg-color-3">
                    <div class="icon bg-icon-3">
                        <i class='bx bx-block'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">Mahasiswa Cutik</h5>
                        <div class="themesflat-counter fs-14 font-wb color-3">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">75 +</span>
                        </div>
                    </div>

                </div>
                <div class="icon-box bg-color-5">
                    <div class="icon bg-icon-5">
                        <i class='bx bx-task color-white'></i>
                    </div>
                    <div class="content click-c">
                        <h5 class="title-box fs-15 mt-2">Alumni Mahasiswa</h5>
                        <div class="themesflat-counter fs-14 font-wb color-4">
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">120 +</span>
                        </div>
                    </div>

                </div> -->
            </div>
            <div class="box">
                <!-- <div class="box-body pb-30">
                    <div class="row">
                        <div class="col-md-12 col-xl-10 mb-0">
                            <div class="row">
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">From:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">To:</label>
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text"><i class='bx bx-calendar'></i> </div>
                                            </div><input class="form-control fc-datepicker" placeholder="DD-MM-YYYY" type="text"> </div>
                                    </div>
                                </div>
                                <div class="col-md-12 col-xl-4 mb-0">
                                    <div class="form-group"> <label class="form-label">Select Priority:</label> <select name="attendance" class="form-control custom-select select2 select2-hidden-accessible" data-placeholder="Select Priority" tabindex="-1" aria-hidden="true"
                                            data-select2-id="select2-data-16-akyu"><option label="Select Priority" data-select2-id="select2-data-18-ezae"></option> <option value="1">High</option> <option value="2">Medium</option> <option value="3">Low</option> </select>
                                        <span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="select2-data-17-6y8j" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-attendance-ws-container" aria-controls="select2-attendance-ws-container"><span class="select2-selection__rendered" id="select2-attendance-ws-container" role="textbox" aria-readonly="true" title="Select Priority"></span>
                                        <span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span>
                                        </span>
                                        </span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-xl-2 mb-0">
                            <div class="form-group mt-32"> <a href="#" class="btn bg-primary btn-block color-white">Search</a> </div>
                        </div>
                    </div>
                </div> -->
                <div class="box-body">
                    <div class="table-responsive">
                        <div id="task-profile_wrapper" class="dataTables_wrapper dt-bootstrap5 no-footer">
                            <!-- <div class="row">
                                <div class="col-sm-12 col-md-6">
                                    <div class="dataTables_length" id="task-profile_length"><label>Show <select name="task-profile_length" aria-controls="task-profile" class="form-select form-select-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entries</label></div>
                                </div>
                                <div class="col-sm-12 col-md-6">
                                    <div id="task-profile_filter" class="dataTables_filter"><label><input type="search" class="form-control form-control-sm" placeholder="Search..." aria-controls="task-profile"></label></div>
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-sm-12">
                                    <table class="table table-vcenter text-nowrap table-bordered dataTable no-footer" id="task-profile" role="grid">
                                        <thead>
                                            <tr class="top">
                                                <th class="border-bottom-0 text-center sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 26.6562px;">No</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 222.312px;">Nama</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Tempat & Tanggal Lahir</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Jenis Kelamin</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Agama</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">No HP</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Alamat</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Nama Orang Tua</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Pekerjaan Orang Tua</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 71.875px;">Status</th>
                                                <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($pendaftaran as $data)
                                                <tr class="">
                                                    <td class="text-center">{{ $loop->iteration + $pendaftaran->firstItem() - 1 }}</td>
                                                    <td class="text-left">{{$data->nama_lengkap}}</td>
                                                    <td class="text-left">{{$data->tempat}} , {{$data->tanggal}}</td>
                                                    <td class="text-left">{{$data->jk}}</td>
                                                    <td class="text-left">{{$data->agama}}</td>
                                                    <td class="text-left">{{$data->no_hp}}</td>
                                                    <td class="text-left">{{$data->alamat}}</td>
                                                    <td class="text-center">
                                                        @if($data->nama_ayah !== null)
                                                            Pak {{$data->nama_ayah}}
                                                        @elseif($data->nama_ibu !== null)
                                                            Ibu {{$data->nama_ibu}}
                                                        @else
                                                            {{$data->nama_wali}}
                                                        @endif
                                                    </td>
                                                    <td class="text-center">
                                                        @if($data->pekerjaan_ayah !== null)
                                                            {{$data->pekerjaan_ayah}}
                                                        @elseif($data->pekerjaan_ibu !== null)
                                                            {{$data->pekerjaan_ibu}}
                                                        @else
                                                            {{$data->pekerjaan_wali}}
                                                        @endif
                                                    </td>
                                                    @if($data->status == "lolos")
                                                        <td><span class="badge badge-success">{{$data->status}}</span></td>
                                                    @elseif($data->status == "proses")
                                                        <td><span class="badge badge-warning">{{$data->status}}</span></td>
                                                    @else
                                                     <td><span class="badge badge-danger">Tidak lolos</span></td>
                                                    @endif
                                                    <td>
                                                    
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" id="btn-lolos" data-toggle="modal" class="dropdown-item" data-target="#edit-lolos" data-id="{{$data->id}}"><span class="bx bx-edit mr-5"></span>Lolos</button>
                                                                <button type="button" id="btn-edit" data-toggle="modal" class="dropdown-item" data-target="#edit-pendaftaran" data-id="{{$data->id}}"><span class="bx bx-edit mr-5"></span>Edit</button>
                                                                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Tidak Lolos</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a> -->
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>                                                
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                {{ $pendaftaran->links('vendor.pagination.bootstrap-4')}}
                                <!-- <div class="col-sm-12 col-md-5">
                                    <div class="dataTables_info" id="task-profile_info" role="status" aria-live="polite">Showing 1 to 8 of 8 entries</div>
                                </div>
                                <div class="col-sm-12 col-md-7">
                                    <div class="dataTables_paginate paging_simple_numbers" id="task-profile_paginate">
                                        <ul class="pagination">
                                            <li class="paginate_button page-item previous disabled" id="task-profile_previous"><a href="#" aria-controls="task-profile" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">01</a></li>
                                            <li class="paginate_button page-item active"><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">02</a></li>
                                            <li class="paginate_button page-item "><a href="#" aria-controls="task-profile" data-dt-idx="1" tabindex="0" class="page-link">03</a></li>
                                            <li class="paginate_button page-item next disabled" id="task-profile_next"><a href="#" aria-controls="task-profile" data-dt-idx="2" tabindex="0" class="page-link">Next</a></li>
                                        </ul>
                                    </div>
                                    
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal custom-modal fade" id="edit-lolos" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h5 class="modal-title">Status</h5>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('pendaftaran.status') }}" method="post">
                @csrf
                @method('PATCH')
                    <div class="row">                       
                        <div class="form-group">
                            <label>Apakah pendaftar ini lolos</label>
                            <div class="form-group">
                                <input class="form-control" id="name-pendaftaran"  name="name" type="text">
                            </div>
                            <!-- <div class="form-group">
                                <input class="form-control" id="ayah-pendaftaran"  name="name" type="text">
                            </div> -->
                            <input class="form-control" id="id-pendaftaran"  name="id" type="text" hidden>
                            <input class="form-control" id="byemail-pendaftaran"  name="byemail" type="text" hidden>
                            <input class="form-control" id="status-pendaftaran" value="lolos" name="status" type="text" hidden>
                        </div>
                    </div>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Ya Lolos</button>
                        <button type="button "class="btn btn-primary submit-btn" data-dismiss="modal">Tidak, Dicek Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div class="modal custom-modal fade" id="edit-pendaftaran" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h5 class="modal-title">Edit Data</h5>
                </div>
            </div>
            <div class="modal-body">
                <form action="{{ route('admin.user.update') }}" method="post">
                @csrf
                @method('PATCH')
                    <div class="row">                       
                        <div class="form-group">
                            <label>Nama</label>
                            <div class="form-group">
                                <input class="form-control" id="nama-pendaftaran"  name="nama" type="text">
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Tempat</label>
                                <div class="form-group">
                                    <input class="form-control" id="tempat-pendaftaran"  name="tempat" type="text">
                                </div>
                        </div>
                        <div class="form-group">
                            <label>No HP</label>
                                <div class="form-group">
                                    <input class="form-control" id="noHP-pendaftaran"  name="nohp" type="text">
                                </div>
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                                <div class="form-group">
                                    <input class="form-control" id="alamat-pendaftaran"  name="alamat" type="text">
                                </div>
                        </div>
                        <div class="form-group">
                            <label>Nama Ayah</label>
                                <div class="form-group">
                                    <input class="form-control" id="namaayah-pendaftaran"  name="nama_ayah" type="text">
                                </div>
                        </div>
                    </div>
                    <input class="form-control" id="id-pendaftaran" value="{{ $data->id }}" name="id" type="text" hidden>
                    <input class="form-control" id="email-pendaftaran"  name="byemail" type="text" hidden>
                    <div class="submit-section">
                        <button type="submit" class="btn btn-primary submit-btn">Ya Lolos</button>
                        <button type="button "class="btn btn-primary submit-btn" data-dismiss="modal">Tidak, Dicek Kembali</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection


@section('script')

<script>
    $(function(){
        $(document).on('click','#btn-lolos', function(){
            let id = $(this).data('id');

            $.ajax({
                type: "get",
                url : "{{url('admin/pendaftaran/ajax/data')}}/"+id,
                dataType: 'json',
                success : function(res){
                    $('#id-pendaftaran').val(res.id);
                    $('#name-pendaftaran').val(res.nama_lengkap);
                    // $('#ayah-pendaftaran').val(res.nama_ayah);
                    $('#byemail-pendaftaran').val(res.by_email);  
                    console.log(res);
                },
            });
        });
    });

    $(function(){
        $(document).on('click','#btn-edit', function(){
            let id = $(this).data('id');

            $.ajax({
                type: "get",
                url : "{{url('admin/pendaftaran/ajax/data')}}/"+id,
                dataType: 'json',
                success : function(res){
                    $('#id-pendaftaran').val(res.id);
                    $('#nama-pendaftaran').val(res.nama_lengkap);
                    $('#tempat-pendaftaran').val(res.tempat);
                    $('#tanggal-pendaftaran').val(res.tgl);
                    $('#jl-pendaftaran').val(res.jk);
                    $('#agama-pendaftaran').val(res.agama);
                    $('#noHP-pendaftaran').val(res.no_hp);
                    $('#alamat-pendaftaran').val(res.alamat);
                    $('#namaayah-pendaftaran').val(res.nama_ayah);
                    $('#kerjaayah-pendaftaran').val(res.pekerjaan_ayah);
                    $('#namaibu-pendaftaran').val(res.nama_ibu);
                    $('#kerjaibu-pendaftaran').val(res.pekerjaan_ibu);
                    $('#fotokk-pendaftaran').val(res.foto_kk);
                    $('#namawali-pendaftaran').val(res.nama_wali);
                    $('#kerjawali-pendaftaran').val(res.pekerjaan_wali);
                    $('#alamatwali-pendaftaran').val(res.alamat_wali);
                    $('#fotokkwali-pendaftaran').val(res.foto_kk_wali);
                    $('#email-pendaftaran').val(res.by_email);  
                    console.log(res.nama_lengkap);
                },
            });
        });
    });
</script>

@endsection