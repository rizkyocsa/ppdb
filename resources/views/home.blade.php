@extends('layouts.apps')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="box-body">
    @php $email=Auth::user()->email; $ada=false; $status=""; @endphp
        @if ($user->roles_id == 1)
        <!-- Tampilan Dashboard Admin -->
            Anda Admin
        @elseif ($user->roles_id == 2)
            Anda Mahasiswa
        @else
            @foreach($registrasi as $registrasi)
                @if($registrasi->byemail === $email)
                    @php $ada=true; $status = $registrasi->status; @endphp
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
            Silahkan lakukan registrasi pada menu registrasi
            @endif
        @endif
    </div>
</div>

@endsection