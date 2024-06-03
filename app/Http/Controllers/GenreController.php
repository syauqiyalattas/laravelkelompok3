<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storegenre;
use App\Http\Requests\StoregenreRequest;
use App\Models\Genre;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    
    public function create()
    {
        $genre = Genre::all();

        return view('genre.tambah',['genre' => $genre]);
    }

    public function store(Request $request)
    {
        $request->validate([
        'nama' => 'required',

    ]);

    Genre::create([
        'nama_genre' => $request -> nama,
    ]);

    SweetAlert::success('success', 'genre created successfully');
    return redirect()->route('genre.index');
    }

}


