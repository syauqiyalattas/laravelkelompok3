<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggota;
use App\Http\Requests\StoreAnggotaRequest;
use App\Models\Anggota;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert As SweetAlert;

class AnggotaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $anggotas = Anggota::all();
        return view('pages.anggota.index', compact('anggotas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $anggotas = Anggota::all();
        return view('pages.anggota.create', compact('anggotas'));
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(StoreAnggotaRequest $request)
{
    try {
        $data = $request->validated();

        Anggota::create($data);
        SweetAlert::success('Success', 'Anggota created successfully');

    } catch (\Exception $e) {
        SweetAlert::error('Error', 'Error creating anggota');
    }

    return redirect()->route('anggota.index');
}

    /**
     * Display the specified resource.
     */
    public function show(Anggota $anggota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Anggota $anggota)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Anggota $anggota)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Anggota $anggota)
    {
        //
    }
}
