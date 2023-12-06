@extends("layouts.navigation")

@section('title')
    Pengaturan
@endsection

@section('body')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Pengaturan
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
                <div class="col-xl-6">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <h4 class="m-portlet__head-text">
                                        Reset Data Kandidat
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-section__content">
                                    <h6>Fitur ini akan menghapus semua data kandidat.
                                        <br>
                                        <br>
                                        Fitur ini digunakan Apabila telah selesai melakukan pemilihan dan telah
                                        Mengunduh Daftar Hadir dan Laporan Pemilihan dan ingin Melakukan
                                        Pemilihan di Tahun berikutnya.
                                    </h6>
                                    <br>
                                    <button type="submit" class="btn m-btn--pill btn-warning text-white resetDataKandidat">
                                        Reset Data Kandidat
                                    </button>
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
                                    <span class="m-portlet__head-icon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <h4 class="m-portlet__head-text">
                                        Reset Data DPT
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-section__content">
                                    <h6>Fitur ini akan menghapus semua data DPT.
                                        <br>
                                        <br>
                                        Fitur ini digunakan Apabila telah selesai melakukan pemilihan dan telah
                                        Mengunduh Daftar Hadir dan Laporan Pemilihan dan ingin Melakukan
                                        Pemilihan di Tahun berikutnya.
                                    </h6>
                                    <br>
                                    <button type="submit" class="btn m-btn--pill btn-warning text-white resetDataDpt">
                                        Reset Data DPT
                                    </button>
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
                                    <span class="m-portlet__head-icon">
                                        <i class="fa fa-key"></i>
                                    </span>
                                    <h4 class="m-portlet__head-text">
                                        Reset Semua Data
                                    </h4>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-section__content">
                                    <h6>Fitur ini akan menghapus semua data Kecuali Identitas Sekolah dan Data
                                        Kelas.
                                        <br>
                                        <br>
                                        Fitur ini digunakan Apabila telah selesai melakukan pemilihan dan telah
                                        Mengunduh Daftar Hadir dan Laporan Pemilihan dan ingin Melakukan
                                        Pemilihan di Tahun berikutnya.
                                    </h6>
                                    <br>
                                    <button type="submit" class="btn m-btn--pill btn-warning text-white resetSemuaData">
                                        Reset Semua Data
                                    </button>
                                </div>
                            </div>
                            <!--end::Section-->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
            </div>
        </div>
    </div>
@endsection