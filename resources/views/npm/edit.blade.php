@extends('layouts.app')

@section('content')
    <h1>Edit Data NPM</h1>
    <form action="/npm/{{ $npm->id }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="field1">Field 1</label>
            <input type="text" class="form-control" id="field1" name="field1" value="{{ $npm->field1 }}" required>
        </div>
        <div class="form-group">
            <label for="field2">Field 2</label>
            <input type="text" class="form-control" id="field2" name="field2" value="{{ $npm->field2 }}" required>
        </div>
        <!-- Sesuaikan dengan struktur tabel Anda -->
        <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
    </form>
@endsection
