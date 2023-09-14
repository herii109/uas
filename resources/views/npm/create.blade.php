@extends('layouts.app')

@section('content')
    <h1>Tambah Data NPM</h1>
    <form action="/npm" method="POST">
        @csrf
        <div class="form-group">
            <label for="field1">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" required>
        </div>
        <div class="form-group">
            <label for="field2">Field 2</label>
            <input type="text" class="form-control" id="field2" name="field2" required>
        </div>
        <!-- Sesuaikan dengan struktur tabel Anda -->
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
@endsection
