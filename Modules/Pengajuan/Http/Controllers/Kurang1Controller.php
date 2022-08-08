<?php

namespace Modules\Pengajuan\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Modules\Pengajuan\Entities\Role;
use Modules\Pengajuan\Entities\Kurang1;


class Kurang1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view('pengajuan::formp.kurang1jt', [
            'role' => $role->role_id,
            'kurang1s' => Kurang1::all(),
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
        // dd($request->all());
        Kurang1::create([
            'keterangan' => $request->keterangan,
            'jumlah' => $request->jumlah,
            'tanggal' => $request->tanggal,
            'divisi' => $request->divisi,
            'catatan' => $request->catatan,

        ]);

        $role = Role::select()->where('user_id', Auth::user()->id)->get()->first();
        return view(
            'pengajuan::rekape.lihatpengajuanstaf',
            [

                'role' => $role->role_id,
                'kurang1s' => Kurang1::all(),
            ]
        );
        // redirect()->back()->with('success','Data Pengajuan Kurang dari 1 Juta sudah terinput');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //     return view('pengajuan::rekape.lihatpengajuanstaf',[
        //         'kurang1s'=> Kurang1::all();
        //     ]);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
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
