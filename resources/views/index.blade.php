@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <div class="row">
                <div class="col-lg-8">
                    <h1>CRUD LARAVEL</h1>
                    <a href="{{ url('create') }}" class="btn btn-primary">+ create</a>
                </div>
                <div class="col-lg-8 mt-5">
                    <table class="table-bordered">
                        <tr>
                            <th>N°</th>
                            <th>Name</th>
                            <th>NUM</th>
                            <th>Altama</th>
                            <th>Action</th>
                        </tr>
                        @foreach ($data as $dataMahasiswa)
                            <tr>
                                <td>{{ $dataMahasiswa->id }}</td>
                                <td>{{ $dataMahasiswa->nama }}</td>
                                <td>{{ $dataMahasiswa->nim }}</td>
                                <td>{{ $dataMahasiswa->alamat }}</td>
                                <td>
                                    <a href="{{ url('/show/'. $dataMahasiswa->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ url('/destroy/'. $dataMahasiswa->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </section>
@endsection
