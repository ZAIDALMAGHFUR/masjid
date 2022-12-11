<?php

namespace App\Http\Controllers;

use App\Models\NamaMasjid;
use Illuminate\Http\Request;

class masjidController extends Controller
{
    public function infomasi()
    {
        $masjids = NamaMasjid::all();
        return view('informasi', ['masjids' => $masjids]);
    }

    public function edit($id)
    {
        $masjids = NamaMasjid::find($id);
        return view('edit-nama', ['masjids' => $masjids]);
    }

    public function update(Request $request, $id)
    {
        $masjids = NamaMasjid::find($id);
        $masjids->nama_masjid = $request->nama_masjid;
        $masjids->alamat_masjid = $request->alamat_masjid;
        $masjids->no_telp = $request->no_telp;
        $masjids->save();
        return redirect('/infomasi');
    }

    public function destroy($id)
    {
        $masjids = NamaMasjid::find($id);
        $masjids->delete();
        return redirect('/infomasi');
    }
}