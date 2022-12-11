<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;

class kasController extends Controller
{
    public function kas()
    {
        $kas = Kas::all();
        return view('kas', [
            'kas' => $kas]);
    }

    public function add()
    {
        return view('add-kas');
    }

    public function store(Request $request)
    {
        $kas = new Kas();
        $kas->tanggal = $request->tanggal;
        $kas->jenis_transaksi = $request->jenis_transaksi;
        $kas->jumlah = $request->jumlah;
        $kas->keterangan = $request->keterangan;
        $kas->save();
        return redirect('/kas');
    }

    public function destroy($id)
    {
        $kas = Kas::find($id);
        $kas->delete();
        return redirect('/kas');
    }
}