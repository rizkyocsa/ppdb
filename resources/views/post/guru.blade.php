@extends('layouts.apps')

@section('title', 'Data Registrasi')

@section('content')
<div class="main-content user">
    <div class="row">
        <div class="col-xl-12">   
            <div class="box">
                <div class="row">
                <div class="card-options">
                            <div class="btn-list d-flex">
                                <a href="#" class="btn text-primary border-primary d-flex align-items-center mr-5" data-toggle="modal" data-target="#tambahGuru" ><i class="bx bx-plus-circle mr-5"></i>Tambah Guru</a>
                                <div class="content d-flex align-items-center">
                                    <h5 class="color-white">Create New Project</h5>
                                </div>
                            </a>
                            </a>
                            </div>
                        </div>
                </div>
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
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Jabatan</th>
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 87.9844px;">Foto</th>
                                                <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($guru as $data)
                                                <tr class="">
                                                    <td class="text-center">{{ $loop->iteration + $guru->firstItem() - 1 }}</td>
                                                    <td class="text-left">{{$data->judul}}</td>
                                                    <td class="text-left">{{$data->sub-judul}}</td>
                                                    <td class="text-left">
                                                        @if($data->image !== null)
                                                            <img src="{{ asset('storage/post/'.$data->image) }}" width="100px"/>
                                                        @else
                                                            [Gambar tidak tersedia]
                                                        @endif
                                                    </td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <button type="button" id="btn-lolos" data-toggle="modal" class="dropdown-item" data-target="#edit-lolos" data-id="{{$data->id}}"><span class="bx bx-edit mr-5"></span>Lolos</button>
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
                                {{ $guru->links('vendor.pagination.bootstrap-4')}}
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

<!-- <div id="tambahGuru" class="modal custom-modal fade" style="display: block;" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Create Project</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="row">
                        <div class="col-sm-6 mb-0">
                            <div class="form-group">
                                <label>Project Name</label>
                                <input class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="col-sm-6 mb-0">
                            <div class="form-group">
                                <label>Client</label>
                                <select class="select">
                                    <option>Client 1</option>
                                    <option>Client 2</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 mb-0">
                            <div class="form-group">
                                <label>Start Date</label>
                                <div class="cal-icon">
                                    <input class="form-control " type="date">
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-0">
                            <div class="form-group">
                                <label>End Date</label>
                                <div class="cal-icon">
                                    <input class="form-control" type="date">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-3 mb-0">
                            <div class="form-group">
                                <label>Rate</label>
                                <input placeholder="$50" class="form-control" value="" type="text">
                            </div>
                        </div>
                        <div class="col-sm-3 mb-0">
                            <div class="form-group">
                                <label>&nbsp;</label>
                                <select class="select">
                                    <option>Hourly</option>
                                    <option selected="">Fixed</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-0">
                            <div class="form-group">
                                <label>Priority</label>
                                <select class="select">
                                    <option selected="">High</option>
                                    <option>Medium</option>
                                    <option>Low</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea rows="4" class="form-control" placeholder="Enter your message here"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Upload Files</label>
                        <input class="form-control" type="file">
                    </div>
                    <div class="submit-section">
                        <button class="btn btn-primary submit-btn">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div> -->

<div class="modal custom-modal fade" id="tambahGuru" role="dialog">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body">
                <div class="form-header">
                    <h5 class="modal-title">Tambah Guru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            <div class="modal-body">
                <form action="" method="post">
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
                },
            });
        });
    });
</script>

@endsection