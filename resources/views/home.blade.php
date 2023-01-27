@extends('layouts.apps')

@section('title', 'Dashboard')

@section('content')
<div class="main-content">
    <div class="box-body">
        @if ($user->roles_id == 1)
        <!-- Tampilan Dashboard Admin -->
            Anda Admin
        @elseif ($user->roles_id == 2)
            Anda Mahasiswa
        @else
            Anda User
        @endif
    </div>
</div>

@endsection