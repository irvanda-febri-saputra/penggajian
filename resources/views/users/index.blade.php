@extends('adminlte::page')

@section('title', 'Data User')

@section('content_header')
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header bg-dark">
                    <h3><strong>Data Pengguna</strong> <a href="{{ route('users.create') }}"
                            class="btn btn-lg float-right btn-primary">Tambah</a></h3>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>NO</th>
                                <th>Nama Pengguna</th>
                                <th>Email</th>
                                <th>Aksi</th>
                            </tr>
                            @php
                                $no = 1;
                            @endphp

                            @foreach ($users as $u)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $u->name }}</td>
                                    <td>{{ $u->email }}</td>
                                    <td>
                                        <form action="{{ route('users.destroy', $u->id) }}" method="post">
                                            @method('DELETE')
                                            @csrf
                                            <a href="" class="btn btn-md btn-warning">Edit</a>
                                            <button type="submit" class="btn btn-md btn-danger">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@stop
