<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAnggota;
use App\Http\Requests\StoreAnggotaRequest;
use App\Models\Anggota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

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
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'nama' => 'required',
            'nomor_identifikasi' => 'required',
            'alamat' => 'required',
            'nomor_telepon' => 'required',
            'tanggal_bergabung' => 'required|date',
            'status_keanggotaan' => 'required|string|in:Aktif,Tidak Aktif',
        ]);


        Anggota::create($validatedData);

        SweetAlert::success('success', 'Anggota created successfully');
        return redirect()->route('anggota.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $anggota = Anggota::find($id);
        if (!$anggota) {
            return redirect()->route('anggota.index')->with('error', 'Anggota not found');
        }

        // Pass the specific Anggota record to the view
        return view('pages.anggota.detail', compact('anggota'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $anggota = Anggota::find($id);
        return view('pages.anggota.edit', compact('anggota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $anggota = Anggota::find($id);
        $data = $request->all();

        $anggota->update($data);
        SweetAlert::success('success', 'Anggota updated successfully');
        return redirect()->route('anggota.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $anggota = Anggota::find($id);
        $anggota->delete();
        SweetAlert::success('success', 'Anggota deleted successfully');
        return redirect()->route('anggota.index');
    }
}
