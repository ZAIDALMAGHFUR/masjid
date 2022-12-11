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
        $response = json_decode(Http::get("https://api.myquran.com/v1/sholat/jadwal/0228/2021/01"));
        $masjids = NamaMasjid::all();
        $text = json_decode(Text::all());
        // dd($response);
        return view('welcome', compact(['response', 'masjids', 'text']));
    }
}