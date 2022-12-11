<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<style>
    body,html {
    margin: 0;
    padding: 0;
    background-color: #12181B;
}

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

.controls {
    margin-top: 16px;
}

.button {
    font-weight: bold;
    border-radius: 5px;
    border: none;
    color: white;
    padding: 4px 8px;
    margin-left: 4px;
    cursor: pointer;
}

.set-alarm {
    background-color: #498AFB;
}

.clear-alarm {
    background-color: #FF3860;
}
</style>
<body class="bg-[url({{ asset('/') }}asset/p.jpg)] bg-cover h-screen">
    <div class="flex justify-between">
        <div class="m-10">
            <h1 class="text-white text-2xl flex justify-center items-center">{{ $masjids[0]->nama_masjid }}</h1>
            <h1 class="text-white">{{ $masjids[0]->alamat_masjid }}</h1>
        </div>
        <div class="m-10">
            <h1 class="text-white">{{ $response->data->lokasi }}</h1>
            <h1 class="text-white">{{ $response->data->daerah }}</h1>
        </div>
    </div>

    <section class="container">
        <div id="clock"></div>
    </section>
    <script>
        const display = document.getElementById('clock');
const audio = new Audio('https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3');
audio.loop = true;
let alarmTime = null;
let alarmTimeout = null;

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

function setAlarmTime(value) {
    alarmTime = value;
}

function setAlarm() {
    if(alarmTime) {
        const current = new Date();
        const timeToAlarm = new Date(alarmTime);

        if (timeToAlarm > current) {
            const timeout = timeToAlarm.getTime() - current.getTime();
            alarmTimeout = setTimeout(() => audio.play(), timeout);
            alert('Alarm set');
        }
    }
}

function clearAlarm() {
    audio.pause();
    if (alarmTimeout) {
        clearTimeout(alarmTimeout);
        alert('Alarm cleared');
    }
}

setInterval(updateTime, 1000);
    </script>
    <div class="flex justify-center items-center">
        <marquee behavior="" direction="" class=" font-semibold text-3xl text-teal-500">{{ $text[0]->text }}</marquee>
    </div>

    <div class="flex justify-center mt-[9.8rem]">
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Subuh</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->subuh }}</h1>
        </div>
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Duhah</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->dhuha }}</h1>
        </div>
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Dzuhur</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->dzuhur }}</h1>
        </div>
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Ashar</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->ashar }}</h1>
        </div>
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Maghrib</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->maghrib }}</h1>
        </div>
        <div class="m-16 text-xl font-extrabold">
            <h1 class="text-white">Isya</h1>
            <h1 class="text-white">{{ $response->data->jadwal[0]->isya }}</h1>
        </div>
    </div>
    <div>
        <h1 class="text-white text-2xl text-end font-extraboldt">No Handphone : {{ $masjids[0]->no_telp }}</h1>    
    </div>
</body>
</html> 