<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></sc
  <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="bg-[url({{ asset('/') }}asset/q.jpg)] bg-cover h-screen">
    <style type="text/css">
    *{
    margin: 0;
    padding: 0;
    font-family: 'Poppins', sans-serif;
  }
  body {
  font-family: "Open Sans", -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Oxygen-Sans, Ubuntu, Cantarell, "Helvetica Neue", Helvetica, Arial, sans-serif; 
}
  .wrapper{
    height: 100px;
    width: 360px;
    position: relative;
    background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0);
    border-radius: 10px;
    cursor: default;
    animation: animate 1.5s linear infinite;
  }
  .wrapper .display,
  .wrapper span{
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
  }
  .wrapper .display{
    z-index: 999;
    height: 85px;
    width: 345px;
    background: #1b1b1b;
    border-radius: 6px;
    text-align: center;
  }
  .display #time{
    line-height: 85px;
    color: #fff;
    font-size: 50px;
    font-weight: 600;
    letter-spacing: 1px;
    background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: animate 1.5s linear infinite;
  }
  @keyframes animate {
    100%{
      filter: hue-rotate(360deg);
    }
  }
  .wrapper span{
    height: 100%;
    width: 100%;
    border-radius: 10px;
    background: inherit;
  }
  .wrapper span:first-child{
    filter: blur(7px);
  }
  .wrapper span:last-child{
    filter: blur(20px);
  }
        h1,h2,h3,h4,p,a{
            font-family: sans-serif;
            font-weight: normal;
        } 
        .jam_analog {
            width: 25rem;
            height: 25rem;
            border: 12px solid #f28000;
            border-radius: 50%;
            padding: 14px;
            margin: 14px auto;
        } 
        .xxx {
            height: 100%;
            width: 100%;
            position: relative;
        }
        .jarum {
            position: absolute;
            width: 50%;
            background: #232323;
            top: 50%;
            transform: rotate(90deg);
            transform-origin: 100%;
            transition: all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1);
        }
        .lingkaran_tengah {
            width: 20px;
            height: 20px;
            background: #232323;
            border: 4px solid #f28000;
            position: absolute;
            top: 50%;
            left: 50%;
            margin-left: -14px;
            margin-top: -14px;
            border-radius: 50%;
        }
        .jarum_detik {
            height: 2px;
            border-radius: 1px;
            background: #F0C952;
        }
        .jarum_menit {
            height: 4px;
            border-radius: 4px;
        } 
        .jarum_jam {
            height: 8px;
            border-radius: 4px;
            width: 35%;
            left: 15%;
        }
    </style>
    <div class="flex justify-between">
        <div class="m-2 ml-8">
            <h1 class="text-white text-2xl flex justify-center items-center">{{ $masjids[0]->nama_masjid }} {{ $response->data->lokasi }}</h1>
            <h1 class="text-white">{{ $masjids[0]->alamat_masjid }}</h1>
        </div>
        <div class="m-2 mr-8">
            <h1 class="text-black font-bold text-lg">Total Pemasukan Rp.{{ $total_pemasukan }}</h1>
            <h1 class="text-red-500 font-bold text-lg">Total Pengeluaran Rp.{{ $total_pengeluan }}</h1>
            {{--<h1 class="text-black font-bold text-lg">Jumlah Kas Akhir Rp.{{ $jumblah_akhir }}</h1>--}}
            <a href="login" class="flex items-center">
                <box-icon type='solid' name='cog'></box-icon> 
                <span class="ml-3">Setting</span> 
            </a>
        </div>
    </div>
    <div class="mt-[10rem]">
        <div class="mr-[48rem] flex  ">
            <div class="jam_analog backdrop-blur-lg">
                <div class="xxx">
                    <div class="jarum jarum_detik"></div>
                    <div class="jarum jarum_menit"></div>
                    <div class="jarum jarum_jam"></div>
                    <div class="lingkaran_tengah"></div>
                </div>
            </div>
        <div class="ml-[10rem]">
            <div class="wrapper">
                <div class="display">
                <div id="time"></div>
                </div>
            </div>
            <p class="text-white flex justify-center items-center font-extrabold text-lg">{{$response->data->jadwal[$d-1]->tanggal}}</p>
        </div>
        </div>
    </div>
    <div class="-mt-[17rem]">
        <div class="flex justify-center items-center">
            <div class=" flex items-center m-10">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-14"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Subuh</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->subuh }}</h1>
                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_subuh}} && minutes == {{$menit_subuh}}) {
                                                console.log('berhasil_subuh');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    // var el = document.createElement("button");
                                                    // el.innerHTML = "Play";
                                                    // el.addEventListener("click", function(){play.apply(audio, args);});
                                                    // this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_shubuh');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_subuh || $h >= $jam_isya)
                    @if ($h == $jam_subuh && $m >= $menit_subuh )
                            @if ($h == $jam_subuh &&  $m == $menit_subuh) 
                                        <script>
                                let timerInterval 
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 300000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                                </script>
                            @endif
                        @else
                        <span class="text-white font-extrabold text-xl m-10">Jadwal selanjutnya</span>
                    @endif
                @endif
            </div>
                </div>
            </div>


            <div class=" flex items-center m-10">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-14"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Dhuha</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->dhuha }}</h1>
                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_dhuha}} && minutes == {{$menit_dhuha}}) {
                                                console.log('berhasil_dhuha');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    // var el = document.createElement("button");
                                                    // el.innerHTML = "Play";
                                                    // el.addEventListener("click", function(){play.apply(audio, args);});
                                                    // this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_dhuha');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_dhuha && $h >= $jam_subuh)
                        @if ($h = $jam_dhuha && $m >= $menit_dhuha )
                            @if ($h == $jam_dhuha && $m == $menit_dhuha)
                                <script>
                                let timerInterval 
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 300000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                                </script>
                            @endif
                            @else
                            <span class="text-white font-extrabold text-xl m-7">Jadwal selanjutnya</span>
                        @endif
                    @endif
            </div>
                </div>
            </div>

            <div class=" flex items-center ">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-14"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Dzuhur</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->dzuhur }}</h1>
                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_dzuhur}} && minutes == {{$menit_dzuhur}}) {
                                                console.log('berhasil_dzuhur');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    var el = document.createElement("button");
                                                    el.innerHTML = "Play";
                                                    el.addEventListener("click", function(){play.apply(audio, args);});
                                                    this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_dzuhur');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_dzuhur && $h >= $jam_dhuha)
                        @if ($h == $jam_dzuhur && $m >= $menit_dzuhur )
                            @if ($h == $jam_dzuhur && $m == $menit_dzuhur)
                                <script>
                                let timerInterval 
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 300000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                                </script>
                            @endif
                            @else
                            <span class="text-white font-extrabold text-xl m-7">Jadwal selanjutnya</span>
                        @endif
                    @endif
            </div>
                </div>
            </div>
        </div>



        <div class="flex justify-center items-center">
            <div class="flex items-center m-10">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-14"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Ashar</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->ashar }}</h1>
                                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_ashar}} && minutes == {{$menit_ashar}}) {
                                                console.log('berhasil_ashar');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    // var el = document.createElement("button");
                                                    // el.innerHTML = "Play";
                                                    // el.addEventListener("click", function(){play.apply(audio, args);});
                                                    // this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_ashar');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_ashar && $h >= $jam_dzuhur)
                        @if ($h == $jam_ashar && $m >= $menit_ashar )
                        @if ($h == $jam_ashar && $m == $menit_ashar)
                                <script>
                                let timerInterval 
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 300000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                                </script>
                            @endif
                            @else
                            <span class="text-white font-extrabold text-xl m-7">Jadwal selanjutnya</span>
                        @endif
                    @endif
            </div>
                </div>
            </div>

            <div class="flex items-center m-10">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-12"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Maghrib</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->maghrib }}</h1>

                                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_maghrib}} && minutes == {{$menit_maghrib}}) {
                                                console.log('berhasil_maghrib');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    // var el = document.createElement("button");
                                                    // el.innerHTML = "Play";
                                                    // el.addEventListener("click", function(){play.apply(audio, args);});
                                                    // this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_maghrib');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_maghrib && $h >= $jam_ashar)
                        @if ($h == $jam_maghrib && $m >= $menit_maghrib )
                        @if ($h = $jam_maghrib &&  $m = $menit_maghrib)
                            <script>
                                let timerInterval
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 20000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                            </script>
                        @endif
                        @else
                            <span class="text-white font-extrabold text-xl m-7">Jadwal selanjutnya</span>
                        @endif
                    @endif
            </div>
                </div>
            </div>

            <div class="flex items-center ">
                <div class="h-[9rem] w-[15rem] backdrop-blur-lg  rounded-lg flex items-center">
            <div class="m-16"> 
                <audio id="MyAudioElement" autoplay>
                    <source src="https://assets.mixkit.co/sfx/preview/mixkit-alarm-digital-clock-beep-989.mp3" type="audio/mpeg">
                    Your browser does not support the audio element.
                </audio>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">Isya</h1>
                <h1 class="text-white font-extrabold text-4xl flex justify-center items-center">{{ $response->data->jadwal[$d-1]->isya }}</h1>

                <script>
                                    let date = new Date();
                                    let hours = date.getHours();
                                    let minutes = date.getMinutes();
                                    let seconds = date.getSeconds();  
                                    
                                            if (hours == {{$jam_isya}} && minutes == {{$menit_isya}}) {
                                                console.log('berhasil_isya');
                                                Audio.prototype.play = (function(play) {
                                                return function () {
                                                var audio = this,
                                                    args = arguments,
                                                    promise = play.apply(audio, args);
                                                if (promise !== undefined) {
                                                    promise.catch(_ => {
                                                    // Autoplay was prevented. This is optional, but add a button to start playing.
                                                    // var el = document.createElement("button");
                                                    // el.innerHTML = "Play";
                                                    // el.addEventListener("click", function(){play.apply(audio, args);});
                                                    // this.parentNode.insertBefore(el, this.nextSibling)
                                                    });
                                                }
                                                };
                                                })(Audio.prototype.play);

                                                // Try automatically playing our audio via script. This would normally trigger and error.
                                                document.getElementById('MyAudioElement').play()
                                            } else {
                                                console.log('gagal_isya');
                                                    
                                            }
                                </script>
                @if ($h <= $jam_isya && $h >= $jam_maghrib)
                        @if ($h = $jam_isya && $m >= $menit_isya )
                                @if ($h = $jam_isya &&  $m = $menit_isya) 
                                        <script>
                                let timerInterval
                                        Swal.fire({
                                        title: 'Waktu Nya Adzan!',
                                        html: 'Iqomah Akan Datang Dalam  <b></b> milliseconds.',
                                        timer: 300000,
                                        timerProgressBar: true,
                                        didOpen: () => {
                                            Swal.showLoading()
                                            const b = Swal.getHtmlContainer().querySelector('b')
                                            timerInterval = setInterval(() => {
                                            b.textContent = Swal.getTimerLeft()
                                            }, 100)
                                        },
                                        willClose: () => {
                                            clearInterval(timerInterval)
                                        }
                                        }).then((result) => {
                                        /* Read more about handling dismissals below */
                                        if (result.dismiss === Swal.DismissReason.timer) {
                                            console.log('I was closed by the timer')
                                        }
                                        })
                                </script>
                                @endif
                            @else
                            <span class="text-white font-extrabold text-xl m-7">Jadwal selanjutnya</span>
                        @endif
                    @endif
            </div>
                </div>
            </div>
        </div>
    </div>
    <div class="-mt-[2rem]">
        <marquee behavior="" direction="" class=" font-extrabold text-3xl text-teal-500">{{ $text[0]->text }}</marquee>
    </div>


    <script type="text/javascript">
        const secondHand = document.querySelector('.jarum_detik');
        const minuteHand = document.querySelector('.jarum_menit');
        const jarum_jam = document.querySelector('.jarum_jam');
     
        function setDate(){
            const now = new Date();
     
            const seconds = now.getSeconds();
            const secondsDegrees = ((seconds / 60) * 360) + 90;
            secondHand.style.transform = `rotate(${secondsDegrees}deg)`;
            if (secondsDegrees === 90) {
                secondHand.style.transition = 'none';
            } else if (secondsDegrees >= 91) {
                secondHand.style.transition = 'all 0.05s cubic-bezier(0.1, 2.7, 0.58, 1)'
            }
     
            const minutes = now.getMinutes();
            const minutesDegrees = ((minutes / 60) * 360) + 90;
            minuteHand.style.transform = `rotate(${minutesDegrees}deg)`;
     
            const hours = now.getHours();
            const hoursDegrees = ((hours / 12) * 360) + 90;
            jarum_jam.style.transform = `rotate(${hoursDegrees}deg)`;
        }
     
        setInterval(setDate, 1000)
    </script>

    <script>
        setInterval(()=>{
    const time = document.querySelector(".display #time");
    let date = new Date();
    let hours = date.getHours();
    let minutes = date.getMinutes();
    let seconds = date.getSeconds();
    let day_night = "AM";
    if(hours > 12){
      day_night = "PM";
      hours = hours - 12;
    }
    if(seconds < 10){
      seconds = "0" + seconds;
    }
    if(minutes < 10){
      minutes = "0" + minutes;
    }
    if(hours < 10){
      hours = "0" + hours;
    }
    time.textContent = hours + ":" + minutes + ":" + seconds + " "+ day_night;
  });   
    </script>
</body>
</html> 