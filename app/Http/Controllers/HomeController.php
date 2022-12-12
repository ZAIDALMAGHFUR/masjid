<?php

namespace App\Http\Controllers;

use App\Models\Kas;
use App\Models\Text;
use App\Models\NamaMasjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function sholat()
    {
        $total_pemasukan = Kas::where('jenis_transaksi', 'uang masuk')->sum('jumlah');
        $total_pengeluan = Kas::where('jenis_transaksi', 'uang keluar')->sum('jumlah');
        $d = (int)date('d'); // mengambil hari
        $h = (int)date('H'); // mengambil jam
        $m = (int)date('i'); // mengambil menit
        $y = (int)date('y'); // mengambil tahun
        $response = json_decode(Http::get("https://api.myquran.com/v1/sholat/jadwal/0228/2022/12"));
        $masjids = NamaMasjid::all();
        $text = json_decode(Text::all());
        

        $jadwal = $response->data->jadwal;
        $jam_subuh = (int)substr($jadwal[$d-1]->subuh, 0, 2);
        $jam_dhuha = (int)substr($jadwal[$d-1]->dhuha, 0, 2);
        $jam_dzuhur = (int)substr($jadwal[$d-1]->dzuhur, 0, 2);
        $jam_ashar = (int)substr($jadwal[$d-1]->ashar, 0, 2);
        $jam_maghrib = (int)substr($jadwal[$d-1]->maghrib, 0, 2);
        $jam_isya = (int)substr($jadwal[$d-1]->isya, 0, 2);
        $menit_subuh = (int)substr($jadwal[$d-1]->subuh, 3, 2);
        $menit_dhuha = (int)substr($jadwal[$d-1]->dhuha, 3, 2);
        $menit_dzuhur = (int)substr($jadwal[$d-1]->dzuhur, 3, 2);
        $menit_ashar = (int)substr($jadwal[$d-1]->ashar, 3, 2);
        $menit_maghrib = (int)substr($jadwal[$d-1]->maghrib, 3, 2);
        $menit_isya = (int)substr($jadwal[$d-1]->isya, 3, 2);
        // dd($jadwal);
        // dd($jam_ashar);

//  dd($jam_maghrib);

// $h = $h + 2;
// $m = $m - 31;
        return view('welcome', compact(['response', 'masjids', 'text', 'd','h', 'm', 'y' , 'total_pemasukan', 'total_pengeluan', 'jam_subuh', 'jam_dhuha', 'jam_dzuhur', 'jam_ashar', 'jam_maghrib', 'jam_isya', 'menit_subuh', 'menit_dhuha', 'menit_dzuhur', 'menit_ashar', 'menit_maghrib', 'menit_isya']));
    }
}