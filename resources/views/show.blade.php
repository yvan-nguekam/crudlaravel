@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Edit information</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/update/' . $data->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Yvan</label>
                            <input type="text" name="nama" class="form-control" placeholder="NAme" value="{{ $data->nama }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM *</label>
                            <input type="number" name="nim" class="form-control" value="{{ $data->nim }}">
                        </div>
                        <div class="form-group">
                            <label for="nama">Altama *</label>
                            <textarea class="form-control" name="alamat"> {{ $data->alamat }}</textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                        <div class="form-group mt-2">
                            <a href="{{ url('/') }}"> <<< Preccédent </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
