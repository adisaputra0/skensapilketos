@extends("layouts.navigation")

@section('title')
    Dashboard
@endsection

@section('body')        
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Dashboard
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->




        <div class="m-content">
            <div class="row">
                <div class="col-md-7">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Data Sekolah
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-section">
                                <span class="m-section__sub">
                                    Dibawah ini adalah informasi tentang sekolah SMKN 1 DENPASAR
                                </span>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            NPSN
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="npsn" value="{{ $identitas_sekolah->npsn }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Nama Sekolah
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_sekolah" value="{{ $identitas_sekolah->nama_sekolah }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Nama Kepala Sekolah
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_sekolah" value="{{ $identitas_sekolah->kepala_sekolah }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Alamat Jalan
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat_jalan" value="{{ $identitas_sekolah->alamat_jalan }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Desa / Kelurahan
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="desa" value="{{ $identitas_sekolah->desa }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Kecamatan
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kecamatan" value="{{ $identitas_sekolah->kecamatan }}" disabled>
                                    </div>
                                </div>
                                <div class="m-section__content">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Kabupaten / Kota
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kabupaten" value="{{ $identitas_sekolah->kabupaten }}" disabled>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Setting Countdown
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-section">
                                <div class="m-section__content">
                                    <h6>Fitur ini berfungsi untuk mengatur count down.
                                        <br>
                                        <br>
                                        Fitur "Count Down Setting" mengatur count down dari website Skensos
                                        <br>
                                        <form action="{{ url('crudCountdown/1') }}" method="POST">
                                            @csrf
                                            @method("PUT")
                                            <label for="bulan" class="mt-3">
                                                Bulan
                                            </label>
                                            <select name="bulan" class="form-control m-input">
                                                <option value="January" {{ ($countdown->bulan == "January") ? 'selected' : '' }}>January</option>
                                                <option value="February" {{ ($countdown->bulan == "February") ? 'selected' : '' }}>February</option>
                                                <option value="March" {{ ($countdown->bulan == "March") ? 'selected' : '' }}>March</option>
                                                <option value="April" {{ ($countdown->bulan == "April") ? 'selected' : '' }}>April</option>
                                                <option value="May" {{ ($countdown->bulan == "May") ? 'selected' : '' }}>May</option>
                                                <option value="June" {{ ($countdown->bulan == "June") ? 'selected' : '' }}>June</option>
                                                <option value="July" {{ ($countdown->bulan == "July") ? 'selected' : '' }}>July</option>
                                                <option value="August" {{ ($countdown->bulan == "August") ? 'selected' : '' }}>August</option>
                                                <option value="September" {{ ($countdown->bulan == "September") ? 'selected' : '' }}>September</option>
                                                <option value="October" {{ ($countdown->bulan == "October") ? 'selected' : '' }}>October</option>
                                                <option value="November" {{ ($countdown->bulan == "November") ? 'selected' : '' }}>November</option>
                                                <option value="December" {{ ($countdown->bulan == "December") ? 'selected' : '' }}>December</option>
                                            </select>

                                            <br>
                                            <label for="tanggal" class="mt-3">
                                                Tanggal
                                            </label>
                                            <input type="number" class="form-control m-input mb-3" id="tanggal" aria-describedby="emailHelp" name="tanggal" value="{{ $countdown->tanggal }}" max="31">
                                            <label for="tahun" class="mt-3">
                                                Tahun
                                            </label>
                                            <input type="number" class="form-control m-input mb-3" id="tahun" aria-describedby="emailHelp" name="tahun" value="{{ $countdown->tahun }}">

                                            <button type="submit" class="btn m-btn--pill btn-warning text-white">
                                                Simpan Waktu
                                            </button>
                                        </form>
                                </div>
                                </h6>
                                <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row ">
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text text-dark">
                                        Data Suara Sementara
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="mb-5">
                                <canvas id="myChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light ">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <h3 class="m-portlet__head-text m--font-light">
                                        Data Sementara
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <div class="m-widget17">
                                <div class="m-widget17__visual m-widget17__visual--chart m-portlet-fit--top m-portlet-fit--sides m--bg-danger">
                                    <img src="img/tm-pemilihan.png" alt="" class="img-fluid">
                                </div>
                                <div class="m-widget17__stats">
                                    <div class="m-widget17__items m-widget17__items-col1">
                                        <div class="m-widget17__item">
                                            <span class="m-widget17__icon">
                                                <i class="flaticon-user m--font-brand"></i>
                                            </span>
                                            <span class="m-widget17__subtitle">
                                                Jumlah Kandidat
                                            </span>
                                            <span class="m-widget17__desc">
                                                {{ $kandidat->count() }} orang
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-widget17__items m-widget17__items-col2">
                                        <div class="m-widget17__item">
                                            <span class="m-widget17__icon">
                                                <i class="flaticon-user m--font-success"></i>
                                            </span>
                                            <span class="m-widget17__subtitle">
                                                Jumlah DPT Kelas 10
                                            </span>
                                            <span class="m-widget17__desc">
                                                {{ $total_siswa_10 }} orang
                                            </span>
                                        </div>
                                    </div>
                                </div>

                                <div class="m-widget17__stats" style="margin-top: 80px;">
                                    <div class="m-widget17__items m-widget17__items-col1">
                                        <div class="m-widget17__item">
                                            <span class="m-widget17__icon">
                                                <i class="flaticon-user m--font-success"></i>
                                            </span>
                                            <span class="m-widget17__subtitle">
                                                Jumlah DPT Kelas 11
                                            </span>
                                            <span class="m-widget17__desc">
                                                {{ $total_siswa_11 }} orang
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-widget17__items m-widget17__items-col2">
                                        <div class="m-widget17__item">
                                            <span class="m-widget17__icon">
                                                <i class="flaticon-user m--font-success"></i>
                                            </span>
                                            <span class="m-widget17__subtitle">
                                                Jumlah DPT Kelas 12
                                            </span>
                                            <span class="m-widget17__desc">
                                                {{ $total_siswa_12 }} orang
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class=" mt-5">
                <div class="m-portlet m-portlet--rounded">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title mx-auto">
                                <h3 class="m-portlet__head-text text-center">
                                    SKENSA JAYA
                                    <br>
                                    <small>
                                        Berikut adalah hasil voting dari DPT (Data Pemilih Tetap).
                                    </small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="row justify-content-center">
                            @foreach ($kandidat as $data)
                                <div class="col-xl-4">
                                    <!--begin:: Widgets/Blog-->
                                    <div class="m-portlet m-portlet--bordered-semi m-portlet--full-height ">
                                        <div class="m-portlet__head m-portlet__head--fit">
                                            <div class="m-portlet__head-caption">
                                                <div class="m-portlet__head-action">
                                                    <button type="button" class="btn btn-sm m-btn--pill  btn-brand">
                                                        Kandidat {{ $data->no }}
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="m-portlet__body">
                                            <div class="m-widget19">
                                                <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides" style="min-height: 286px">
                                                    <img src="foto/{{ $data->foto }}" alt="" style="object-fit: cover; !important">
                                                    <h3 class="m-widget19__title m--font-light">
                                                        {{ $data->nama }}
                                                    </h3>
                                                    <div class="m-widget19__shadow"></div>
                                                </div>
                                                <div class="m-widget19__content">
                                                    <div class="m-widget19__header">
                                                        <div class="m-widget19__user-img">
                                                            <img class="m-widget19__img " src="foto/{{ $data->foto }}" alt="" height="45" style="object-fit: cover;">
                                                        </div>
                                                        <div class="m-widget19__info">
                                                            <span class="m-widget19__username">
                                                                {{ $data->nama_panggilan }}
                                                            </span>
                                                            <br>
                                                            <span class="m-widget19__time">
                                                                {{ $data->nisn }}
                                                            </span>
                                                        </div>
                                                        <div class="m-widget19__stats fs-3rem">
                                                            <span class="m-widget19__number m--font-brand fs-2rem">
                                                                {{ $data->dipilih }}
                                                            </span>
                                                            <span class="m-widget19__comment fs-1rem">
                                                                HasilSuara
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--end:: Widgets/Blog-->
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection