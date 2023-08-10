@extends('layouts.apps')

@section('title', 'Data Registrasi')

@section('content')
<div class="main-content user">
    <div class="row">
        <div class="col-xl-12">
            
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
                                                <th class="border-bottom-0 sorting fs-14 font-w500" tabindex="0" aria-controls="task-profile" rowspan="1" colspan="1" style="width: 84.8281px;">Email</th>
                                                <th class="border-bottom-0 sorting_disabled fs-14 font-w500" rowspan="1" colspan="1" style="width: 145.391px;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @php $no=1; @endphp
                                            @foreach($users as $data)
                                                <tr class="">
                                                    <td class="text-center">{{ $loop->iteration + $users->firstItem() - 1 }}</td>
                                                    <td class="text-left">{{$data->name}} {{$data->id}}</td>
                                                    <td class="text-left">{{$data->email}}</td>
                                                    <td>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0);" class="btn-link" data-bs-toggle="dropdown" aria-expanded="false">
                                                                <i class='bx bx-dots-horizontal-rounded'></i>
                                                            </a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <!-- <button type="button" id="btn-lolos" data-toggle="modal" class="dropdown-item" data-target="#edit-lolos" data-id="{{$data->id}}"><span class="bx bx-edit mr-5"></span>Lolos</button> -->
                                                                <button type="button" id="btn-edit" data-toggle="modal" class="dropdown-item" data-target="#modalEdit" data-id="{{$data->id}}"><span class="bx bx-edit mr-5"></span>Edit</button>
                                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="bx bx-trash"></i> Delete</a>
                                                                <!-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="bx bx-edit mr-5"></i>Edit</a> -->
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
                                {{ $users->links('vendor.pagination.bootstrap-4')}}
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

<div class="modal custom-modal fade" id="modalEdit" role="dialog">
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
                                <input class="form-control" id="name-user"  name="name" type="text">
                            </div>
                            <label>Email</label>
                            <div class="form-group">
                                <input class="form-control" id="email-user"  name="email" type="text">
                            </div>
                            <input class="form-control" id="id-user" value="{{ $data->id }}" name="id" type="text" hidden>
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
        $(document).on('click','#btn-edit', function(){
            let id = $(this).data('id');
            console.log(id);
            $.ajax({
                type: "get",
                url : "{{url('admin/user/ajax/data')}}/"+id,
                dataType: 'json',
                success : function(res){
                    $('#id-user').val(res.id);
                    $('#name-user').val(res.name);
                    $('#email-user').val(res.email);
                    console.log(res);
                    console.log(res.id);
                    console.log(res.name);
                    console.log(res.email);
                    // $('#byemail-pendaftaran').val(res.by_email);  
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(xhr.status);
                    alert(thrownError);
                }
            });
        });
    });
</script>

@endsection