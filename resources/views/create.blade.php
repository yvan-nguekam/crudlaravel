@extends('layouts.default')

@section('content')
    <section>
        <div class="container mt-5">
            <h1>Ajoute d'information</h1>
            <div class="row">
                <div class="col-lg-8">
                    <form action="{{ url('/store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Yvan</label>
                            <input type="text" name="nama" class="form-control" placeholder="NAme">
                        </div>
                        <div class="form-group">
                            <label for="nama">NIM *</label>
                            <input type="number" name="nim" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nama">Altama *</label>
                            <textarea class="form-control" name="alamat"> </textarea>
                        </div>
                        <div class="form-group mt-2">
                            <button type="submit" class="btn btn-primary">ok</button>
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
