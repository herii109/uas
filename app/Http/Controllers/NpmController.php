<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NpmController extends Controller
{
    //
}
use App\Models\Npm;

public function index()
{
    $npms = Npm::all();
    return view('npm.index', compact('npms'));
}

public function create()
{
    return view('npm.create');
}

public function store(Request $request)
{
    // Validasi data input
    $validatedData = $request->validate([
        'field1' => 'required',
        'field2' => 'required',
        // Sesuaikan dengan struktur tabel Anda
    ]);

    Npm::create($validatedData);

    return redirect('/npm');
}

public function edit($id)
{
    $npm = Npm::findOrFail($id);
    return view('npm.edit', compact('npm'));
}

public function update(Request $request, $id)
{
    // Validasi data input
    $validatedData = $request->validate([
        'field1' => 'required',
        'field2' => 'required',
        // Sesuaikan dengan struktur tabel Anda
    ]);

    Npm::whereId($id)->update($validatedData);

    return redirect('/npm');
}

public function destroy($id)
{
    Npm::findOrFail($id)->delete();
    return redirect('/npm');
}
