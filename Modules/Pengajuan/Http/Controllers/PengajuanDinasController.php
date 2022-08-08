<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Pengajuan\Entities\PengajuanDinas;

class PengajuanDinasController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view('pengajuan::formp.pengajuanDinas', [
            'role' => $role->role_id,
            'pengajuandinass' => PengajuanDinas::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('pengajuan::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        PengajuanDinas::create([
            'no_surat' => $request->no_surat,
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'divisi' => $request->divisi,
            'catatan' => $request->catatan,
            'tambahlampiran' => $request->file('tambahlampiran')->store('lampiran'),

        ]);

        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view(
            'pengajuan::rekape.lihatPengajuanBiasa',
            [

                'role' => $role->role_id,
                'pengajuandinass' => PengajuanDinas::all(),
            ]
        );
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('pengajuan::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('pengajuan::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
