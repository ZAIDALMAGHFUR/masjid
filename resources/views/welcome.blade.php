<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
</head>
<style>

.container {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
}

#clock {
    font-family: 'Orbitron', sans-serif;
    font-size: 7rem;
    background-image: linear-gradient(180deg,
        rgba(99,253,136,1) 0%,
        rgba(51,197,142,1) 50%,
        rgba(39,97,116,1) 100%);
    background-clip: text;
    -webkit-background-clip: text;
    -moz-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-text-fill-color: transparent;
}
</style>
<body class="bg-[url({{ asset('/') }}asset/p.jpg)] bg-cover h-screen">
    <div class="flex justify-between">
        <div class="m-5">
            <h1 class="text-white text-2xl flex justify-center items-center">{{ $masjids[0]->nama_masjid }}</h1>
            <h1 class="text-white">{{ $masjids[0]->alamat_masjid }}</h1>
        </div>
        {{-- <div class="m-10">
            <h1 class="text-white">{{ $response->data->lokasi }}</h1>
            <h1 class="text-white">{{ $response->data->daerah }}</h1>
        </div> --}}
        <div class="font-bold text-xl m-5">
            <div class="mr-4">
                <h1 class="text-green-500">Total Pemasukan Rp.{{ $total_pemasukan }}</h1>
            </div>
            <div>
                <h1 class="text-red-600">Total Pengeluaran Rp.{{ $total_pengeluan }}</h1>
            </div>
        </div>
    </div>

<div class="backdrop-blur-lg rounded-lg">
    <section class="container">
        <div id="clock"></div>
        <h1 class="text-white -mt-10">{{ $response->data->jadwal[$d-1]->tanggal }}</h1>
    </section>
</div>
    <script>
        const display = document.getElementById('clock');
function updateTime() {
    const date = new Date();

    const hour = formatTime(date.getHours());
    const minutes = formatTime(date.getMinutes());
    const seconds = formatTime(date.getSeconds());



    display.innerText=`${hour} : ${minutes} : ${seconds}`
}

function formatTime(time) {
    if ( time < 10 ) {
        return '0' + time;
    }
    return time;
}

setInterval(updateTime, 1000);
    </script>
    <div class="flex justify-center items-center">
        <marquee behavior="" direction="" class=" font-semibold text-3xl text-teal-500">{{ $text[0]->text }}</marquee>
    </div>



    <div class="flex justify-center mt-[9rem]">
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white">Subuh</h1>
                <h1 class="text-white">{{ $response->data->jadwal[$d-1]->subuh }}</h1>
                @if ($h <= $jam_subuh && $h >= $jam_isya)
                    @if ($m <= $menit_subuh && $m >= $menit_isya)
                    @else
                        <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                @endif
            </div>
        </div>
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white">Duhah</h1>
                <h1 class="text-white flex justify-center">{{ $response->data->jadwal[$d-1]->dhuha }}</h1>
                @if ($h <= $jam_dhuha && $h >= $jam_dzuhur)
                    @if ($m <= $menit_dhuha && $m >= $menit_dzuhur)
                        <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                @endif
            </div>
        </div>
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white flex justify-center">Dzuhur</h1>
                <h1 class="text-white flex justify-center">{{ $response->data->jadwal[$d-1]->dzuhur }}</h1>
                {{-- <span class="{{ $h <= $jam_dzuhur && $h >= $jam_dhuha ? '' : 'hidden'  $m <= $menit_dzuhur && $m >= $menit_dhuha ? '' : 'hidden' }} text-white">Jadwal selanjutnya</span> --}}
                @if ($h+3 <= $jam_dzuhur && $h >= $jam_dhuha)
                    @if ($m <= $menit_dzuhur && $m >= $menit_dhuha)
                        @else
                        <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                    @else
                    
                @endif
            </div>
        </div>
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white">Ashar</h1>
                <h1 class="text-white">{{ $response->data->jadwal[$d-1]->ashar }}</h1>
                @if ($h <= $jam_ashar && $h >= $jam_maghrib)
                    @if ($m <= $menit_ashar && $m >= $menit_maghrib)
                    <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                @endif
            </div>
        </div>
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white">Maghrib</h1>
                <h1 class="text-white flex justify-center">{{ $response->data->jadwal[$d-1]->maghrib }}</h1>
                @if ($h <= $jam_maghrib && $h >= $jam_ashar)
                    @if ($m <= $menit_maghrib && $m >= $menit_ashar)
                        @else
                        <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                @else
                    
                @endif
            </div>
        </div>
        <div class="backdrop-blur-lg m-5 rounded-lg">
            <div class="m-10 text-xl font-extrabold">
                <h1 class="text-white flex justify-center">Isya</h1>
                <h1 class="text-white">{{ $response->data->jadwal[$d-1]->isya }}</h1>
                @if ($h <= $jam_isya && $h >= $jam_maghrib)
                    @if ($m <= $menit_isya && $m >= $menit_maghrib)
                    @else
                        <span class="text-white">Jadwal selanjutnya</span>
                    @endif
                @endif
            </div>
        </div>
    </div>
    <div class="flex justify-between">
        <div class="backdrop-blur-lg m-5 w rounded-lg-14 rounded-lg ml-5 flex justify-center">
            <a href="login" class="text-white w-20 h-7 flex justify-center">login</a>
        </div>
        <div class="mt-8">
            <h1 class="text-white text-sm">No Handphone : {{ $masjids[0]->no_telp }}</h1>    
        </div>
    </div>
</body>
</html> 