<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8" />
    <title>
        {{ config('app.name') }}
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="components/base/img/favicon-skensa.png" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <div class="min-w-screen min-h-screen bg-sky-500 flex items-center justify-center px-5 py-5" x-data="beer()" x-init="start()">
        <div class="text-yellow-100">
            <h1 class="text-3xl text-center mb-3 font-extralight">Website ini bisa diakses</h1>
            <div class="text-6xl text-center flex w-full items-center justify-center">
                <div class="text-2xl mr-1 font-extralight">pada</div>
                <div class="w-24 mx-1 p-2 bg-white text-sky-500 rounded-lg">
                    <div class="font-mono leading-none" x-text="days">00</div>
                    <div class="font-mono uppercase text-sm leading-none">Hari</div>
                </div>
                <div class="w-24 mx-1 p-2 bg-white text-sky-500 rounded-lg">
                    <div class="font-mono leading-none" x-text="hours">00</div>
                    <div class="font-mono uppercase text-sm leading-none">Jam</div>
                </div>
                <div class="w-24 mx-1 p-2 bg-white text-sky-500 rounded-lg">
                    <div class="font-mono leading-none" x-text="minutes">00</div>
                    <div class="font-mono uppercase text-sm leading-none">Menit</div>
                </div>
                <div class="text-2xl mx-1 font-extralight">dan</div>
                <div class="w-24 mx-1 p-2 bg-white text-sky-500 rounded-lg">
                    <div class="font-mono leading-none" x-text="seconds">00</div>
                    <div class="font-mono uppercase text-sm leading-none">Detik</div>
                </div>
            </div>
            <p class="text-sm text-center mt-3">*<a href="https://wa.me/+6285792565901" class="underline hover:text-yellow-200" target="_blank">Hubungin kami</a>.Jika ada kendala</p>
        </div>
    </div>

    <script>
        function beer() {
            return {
                seconds: '00',
                minutes: '00',
                hours: '00',
                days: '00',
                distance: 0,
                countdown: null,
                beerTime: new Date("{{ $countdown->bulan }} {{ $countdown->tanggal }}, {{ $countdown->tahun }} 00:00:00").getTime(),
                now: new Date().getTime(),
                start: function() {
                    this.countdown = setInterval(() => {
                        // Calculate time
                        this.now = new Date().getTime();
                        this.distance = this.beerTime - this.now;
                        // Set Times
                        this.days = this.padNum(Math.floor(this.distance / (1000 * 60 * 60 * 24)));
                        this.hours = this.padNum(Math.floor((this.distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60)));
                        this.minutes = this.padNum(Math.floor((this.distance % (1000 * 60 * 60)) / (1000 * 60)));
                        this.seconds = this.padNum(Math.floor((this.distance % (1000 * 60)) / 1000));
                        // Stop
                        if (this.distance < 0) {
                            clearInterval(this.countdown);
                            this.days = '00';
                            this.hours = '00';
                            this.minutes = '00';
                            this.seconds = '00';
                            window.location.href = '{{ route("login") }}'
                        }
                    }, 100);
                },
                padNum: function(num) {
                    var zero = '';
                    for (var i = 0; i < 2; i++) {
                        zero += '0';
                    }
                    return (zero + num).slice(-2);
                }
            }
        }
    </script>

    <div class="flex items-end justify-end fixed bottom-0 right-0 mb-4 mr-4 z-10">
        <div>
            <a title="Buy me a beer" href="https:/smkn1denpasar.sch.id" target="_blank" class="block w-16 h-16 rounded-full transition-all shadow hover:shadow-lg transform hover:scale-110 hover:rotate-12">
                <img class="object-cover object-center w-full h-full rounded-full" src="img/logo-lms.png" />
            </a>
        </div>
    </div>
</body>

</html>