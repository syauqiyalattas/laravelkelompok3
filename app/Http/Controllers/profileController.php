<?php

namespace App\Http\Controllers;

use App\Http\Requests\Storeprofile;
use App\Http\Requests\StoreprofileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use RealRashid\SweetAlert\Facades\Alert as SweetAlert;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $profiles = Profile::all();
        return view('profile.index', compact('profiles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $profiles = Profile::all();
        return view('profile.create', compact('profiles'));
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
            'status_keprofilean' => 'required|string|in:Aktif,Tidak Aktif',
        ]);


        Profile::create($validatedData);

        SweetAlert::success('success', 'profile created successfully');
        return redirect()->route('profile.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

        $profile = Profile::find($id);
        if (!$profile) {
            return redirect()->route('profile.index')->with('error', 'profile not found');
        }

        // Pass the specific profile record to the view
        return view('profile.detail', compact('profile'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $profile = Profile::find($id);
        return view('profile.edit', compact('profile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $profile = Profile::find($id);
        $data = $request->all();

        $profile->update($data);
        SweetAlert::success('success', 'profile updated successfully');
        return redirect()->route('profile.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $profile = Profile::find($id);
        $profile->delete();
        SweetAlert::success('success', 'profile deleted successfully');
        return redirect()->route('profile.index');
    }
}
