@extends('layouts.apps')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="box-body">
    
    @php $email=Auth::user()->email; $ada=false; $status=""; @endphp
        @if ($user->roles_id == 1)
        <!-- Tampilan Dashboard Admin -->
        
            <!-- Anda Admin -->
            <div class="box card-box mb-20">
                <div class="icon-box bg-color-1">
                    <div class="icon bg-icon-1">
                        <i class='bx bxs-briefcase'></i>
                    </div>
                    <div class="content">
                        <h5 class="title-box fs-15 mt-2">Total Pendaftar</h5>
                        <div class="themesflat-counter fs-14 font-wb color-1">
                            <span class="number" data-from="0" data-to="1225" data-speed="2500" data-inviewport="yes">{{ $daftar }}</span>
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
                            <span class="number" data-from="0" data-to="309" data-speed="2500" data-inviewport="yes">{{ $users }}</span>
                        </div>
                    </div>

                </div>
            </div>   
        @elseif ($user->roles_id == 2)
            Anda Mahasiswa
        @else
            @foreach($pendaftaran as $pendaftaran)
                @if($pendaftaran->by_email === $email)
                    @php $ada=true; $status = $pendaftaran->status; @endphp
                @endif
            @endforeach
            @if($ada)
                @if($status==='proses')
                    @php echo("Pendaftaran anda dalam " . $status); @endphp
                @elseif($status==='lolos')
                    @php echo("Anda dinyatakan " . $status . " tunggu proses selesai menjadi mahasiswa"); @endphp
                @elseif($status==='tidak lolos')
                    @php echo("Anda dinyatakan " . $status); @endphp
                @endif
            @else
            Silahkan lakukan pendaftaran pada menu pendaftaran
            @endif
        @endif
    </div>
</div>

@endsection