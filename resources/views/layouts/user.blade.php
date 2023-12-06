<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>
        SKENSOS
    </title>
    <meta name="description" content="State colors">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function () {
                sessionStorage.fonts = true;
            }
        });

    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="../../assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="../../assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="img/favicon-skensa.png" />
</head>

<body style="background-color: #f2f3f8;">

    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="#" style="font-weight: bold;">SKENSOS</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    {{-- <li class="nav-item active">
                        <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                    </li> --}}
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('logout') }}"><i class="fa fa-sign-out mr-2"></i>Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>


    @yield('body')

    <div class="container">
        <div class="m-portlet m-portlet--rounded">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text text-start">
                            <small>Ada masalah dalam memilih bisa hubungi <a
                                    href="https://wa.me/6283847406501">disini</a> </small>
                        </h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer class="m-grid__item		m-footer ">
        <div class="m-container m-container--fluid m-container--full-height m-page__container">
            <div class="m-stack m-stack--flex-tablet-and-mobile m-stack--ver m-stack--desktop">
                <div class="m-stack__item m-stack__item--left m-stack__item--middle m-stack__item--last text-center">
                    <span class="m-footer__copyright">
                        <?= date('Y') ?> © System Pilketos By
                        <a href="#" class="m-link">
                            Ladi Team
                        </a>
                    </span>
                </div>
            </div>
        </div>
    </footer>
    <!-- end::Quick Sidebar -->
    <!-- begin::Scroll Top -->
    <div class="m-scroll-top m-scroll-top--skin-top" data-toggle="m-scroll-top" data-scroll-offset="500"
        data-scroll-speed="300">
        <i class="la la-arrow-up"></i>
    </div>
    <!-- end::Scroll Top -->
    <!-- begin::Quick Nav -->
    <!-- begin::Quick Nav -->
    <!--begin::Base Scripts -->
    <script src="../../assets/vendors/base/vendors.bundle.js" type="text/javascript"></script>
    <script src="../../assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>
    <!--end::Base Scripts -->
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    {{-- Graphic --}}
    @if (isset($run_graphic))
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Data yang akan digunakan untuk grafik
        var data = {
            labels: [@foreach($kandidat as $data)
                '<?=$data->nama_panggilan?>',
                @endforeach
            ],
            datasets: [{
                label: 'Hasil',
                data: [@foreach($kandidat as $data) 
                {{ $data->dipilih }} ,
                    @endforeach
                ],
                backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang
                borderColor: 'rgba(75, 192, 192, 1)', // Warna garis
                borderWidth: 1 // Lebar garis
            }]
        };

        // Opsi konfigurasi untuk grafik
        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        };

        // Membuat objek grafik baru
        var ctx = document.getElementById('myChart').getContext('2d');
        var myChart = new Chart(ctx, {
            type: 'bar',
            data: data,
            options: options
        });

    </script>
    @endif
</body>

</html>
