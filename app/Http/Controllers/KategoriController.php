<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kategori;
use App\Http\Controllers\Controller; // Pastikan ini di-import

class KategoriController extends Controller
{
    public function index()
    {
        return Kategori::all();
    }

    public function store(Request $request)
    {
        $request->validate(['nama_kategori' => 'required']);
        $kategori = Kategori::create($request->all());
        return response()->json($kategori, 201);
    }
}
