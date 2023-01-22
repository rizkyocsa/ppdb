@extends('layouts.apps')

@section('title', 'Home')


@section('sidebar')
    <li>
        <a href="{{ route('login') }}">
            <i class='bx bxs-dashboard'></i>
            <span>Dashboard</span>
        </a>
    </li>
    <li>
        <a href="{{ route('register') }}">
            <i class='bx bx-calendar'></i>
            <span>Register</span>
        </a>
    </li>
    <li>
        <a href="{{ route('Mahasiswa') }}">
            <i class='bx bx-calendar'></i>
            <span>Mahasiswa</span>
        </a>
    </li>
@endsection


@section('content')
<div class="main-content">
    <div class="box-body">
        @if ($user->roles_id == 1)
        <!-- Tampilan Dashboard Admin -->
            Anda Admin
        @elseif ($user->roles_id == 2)
            
        @else
            
        @endif
    </div>
</div>

@endsection