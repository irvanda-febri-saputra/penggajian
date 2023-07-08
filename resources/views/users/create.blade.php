@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
    <h1 class="m-0 text-dark">Data Pengguna
    </h1>
@stop

@section('content')

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="card card-dark">
                        <div class="card-header">
                            <h3 class="card-title">Tambah User</h3>
                        </div>
                        <form action="{{ route('users.store') }}" method="POST">
                            @csrf
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="name">Nama Pengguna</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Enter username..." name="name">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="exampleInputEmail1"
                                            placeholder="Enter email" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="exampleInputPassword1"
                                            placeholder="Password" name="password">
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="{{ route('users.index') }}" class="btn btn-danger">Batal</a>
                                    </div>
                        </form>
                    </div>
                </div>

            </div>

        </div>
    </div>

@stop
