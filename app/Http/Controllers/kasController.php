<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use Illuminate\Http\Request;

class kasController extends Controller
{
    public function kas()
    {
        $total_pemasukan = Kas::where('jenis_transaksi', 'uang masuk')->sum('jumlah');
        $total_pengeluan = Kas::where('jenis_transaksi', 'uang keluar')->sum('jumlah');
        $kas = Kas::all();
        return view('kas', [
            'kas' => $kas, 'total_pemasukan' => $total_pemasukan, 'total_pengeluan' => $total_pengeluan]);
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