@extends('layouts.app')

@section('content')
    <h1>Data NPM</h1>
    <a href="/npm/create" class="btn btn-primary">Tambah Data</a>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Field 1</th>
                <th>Field 2</th>
                <!-- Sesuaikan dengan struktur tabel Anda -->
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($npms as $npm)
                <tr>
                    <td>{{ $npm->id }}</td>
                    <td>{{ $npm->field1 }}</td>
                    <td>{{ $npm->field2 }}</td>
                    <!-- Sesuaikan dengan struktur tabel Anda -->
                    <td>
                        <a href="/npm/{{ $npm->id }}/edit" class="btn btn-primary">Edit</a>
                        <form action="/npm/{{ $npm->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Hapus</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
