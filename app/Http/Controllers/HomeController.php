<?php

namespace App\Http\Controllers;

use App\Models\Text;
use App\Models\NamaMasjid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function sholat()
    {
        $d = (int) date('d'); // mengambil hari
        $h = (int) date('h'); // mengambil jam
        $m = (int) date('m'); // mengambil menit
        $y = (int) date('y'); // mengambil tahun
        $response = json_decode(Http::get("https://api.myquran.com/v1/sholat/jadwal/0228/2022/12"));
        $masjids = NamaMasjid::all();
        $text = json_decode(Text::all());

        // dd($response);
        return view('welcome', compact(['response', 'masjids', 'text', 'd','h', 'm', 'y']));
    }
}