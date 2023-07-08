@extends('adminlte::page')

@section('title', 'Home Penggajian')

@section('content_header')
    <h1 class="m-0 text-dark">Dashboard</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <p class="mb-0">Selamat datang <b>{{ Auth::user()->name }}</b> di Sistem Penggajian</p>
                </div>
            </div>
        </div>
    </div>
@stop
