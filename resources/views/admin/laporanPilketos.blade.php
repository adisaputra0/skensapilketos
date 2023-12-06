@extends("layouts.navigation")

@section('title')
    Laporan Pilketos
@endsection

@section('body')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Laporan Pilketos
                    </h3>
                    <ul class="m-subheader__breadcrumbs m-nav m-nav--inline">
                        <li class="m-nav__item m-nav__item--home">
                            <a href="#" class="m-nav__link m-nav__link--icon">
                                <i class="m-nav__link-icon la la-home"></i>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Laporan
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Laporan Pilketos
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->




        <div class="m-content">
            <div class="row">
                <form action="" method="" class="d-flex flex-column flex-md-row">
                    <div class="col-xl-6">
                        <!--begin::Portlet-->
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
                                <!--begin::Section-->
                                <div class="m-section">
                                    <span class="m-section__sub">
                                        Form ini berisikan informasi sekolah seperti NPSN, Nama serta Alamat Sekolah.
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
                                <!--end::Section-->
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                    <div class="col-xl-6">
                        <!--begin::Portlet-->
                        <div class="m-portlet m-portlet--tab">
                            <div class="m-portlet__head">
                                <div class="m-portlet__head-caption">
                                    <div class="m-portlet__head-title">
                                        <span class="m-portlet__head-icon m--hide">
                                            <i class="la la-gear"></i>
                                        </span>
                                        <h3 class="m-portlet__head-text">
                                            Kepala Sekolah
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="m-portlet__body">
                                <!--begin::Section-->
                                <div class="m-section">
                                    <span class="m-section__sub">
                                    Form ini berisikan informasi data diri Kepala Sekolah SMK Negeri 1 Denpasar.
                                    </span>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Nama Kepala Sekolah
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kepala_sekolah" value="{{ $identitas_sekolah->kepala_sekolah }}" disabled>
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                NIP
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" value="{{ $identitas_sekolah->nip }}" disabled>
                                        </div>
                                    </div>
                                </div>
                                <!--end::Section-->
                            </div>
                        </div>
                        <!--end::Portlet-->
                    </div>
                </form>
            </div>
        </div>
        <div class="m-content">
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon">
                                        <i class="fa fa-hand-o-down"></i>
                                    </span>
                                    <h4 class="m-portlet__head-text">
                                        Hasil Voting
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <span class="m-section__sub">
                                    Form ini memiliki fitur untuk melihat jumlah atau total DPT (Daftar Pemilih Tetap), Total DPT yang sudah memilih serta yang belum memilih.
                                </span>
                                <div class="m-section__content">
                                    <table class="table m-table m-table--head-bg-success text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    Jumlah DPT
                                                </th>
                                                <th class="text-center">
                                                    Jumlah DPT yang memilih
                                                </th>
                                                <th class="text-center">
                                                    Jumlah DPT yang tidak memilih
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th scope="row" class="text-center">
                                                    {{ $total_siswa }}
                                                </th>
                                                <td>
                                                    {{ $total_hadir }}
                                                </td>
                                                <td>
                                                    {{ $total_tidak_hadir }}
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
        @if ($cek_kandidat != 0)
            <div class="container">
                <div class="m-portlet m-portlet--rounded">
                    <div class="m-portlet__head">
                        <div class="m-portlet__head-caption">
                            <div class="m-portlet__head-title mx-auto">
                                <h3 class="m-portlet__head-text text-center">
                                    PEMENANG KETUA OSIS
                                    <br>
                                    <small>
                                        Berikut adalah kandidat dengan hasil suara terbanyak.
                                    </small>
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="row justify-content-center">
                            @foreach ($pemenang as $data)
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
                                                    <img src="foto/{{ $data->foto }}" alt="">
                                                    <h3 class="m-widget19__title m--font-light">
                                                        {{ $data->nama }}
                                                    </h3>
                                                    <div class="m-widget19__shadow"></div>
                                                </div>
                                                <div class="m-widget19__content">
                                                    <div class="m-widget19__header">
                                                        <div class="m-widget19__user-img">
                                                            <img class="m-widget19__img " src="foto/{{ $data->foto }}" alt="" height="45">
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
                                                        <div class="m-widget19__stats">
                                                            <span class="m-widget19__number m--font-brand">
                                                                {{ $data->dipilih }}
                                                            </span>
                                                            <span class="m-widget19__comment">
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
        @endif
    </div>
@endsection