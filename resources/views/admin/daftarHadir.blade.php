@extends("layouts.navigation")

@section('title')
    Daftar Hadir
@endsection

@section('body')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Daftar Hadir
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
                                    Daftar Hadir
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
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon">
                                        <i class="fa fa-user"></i>
                                    </span>
                                    <h4 class="m-portlet__head-text">
                                        Daftar Hadir PILKETOS
                                    </h4>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">

                                <a href="#" class="akses-create btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air akses-create" onclick="generatePDF()">
                                    <span>
                                        <i class=" fa fa-cloud-download"></i>
                                        <span>Download Daftar Hadir</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <span class="m-section__sub">
                                    <h6>Jumlah DPT : {{ $total_siswa }}</h6>
                                    <h6>Jumlah DPT yang hadir : {{ $total_hadir }}</h6>
                                    <h6>Jumlah DPT yang tidak hadir : {{ $total_tidak_hadir }}</h6>
                                    <br>
                                </span>
                                <div class="m-section__content">
                                    <table class="table m-table m-table--head-bg-success text-center table-to-pdf table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th class="text-center">
                                                    NISN
                                                </th>
                                                <th class="text-center">
                                                    Nama
                                                </th>
                                                <th class="text-center">
                                                    Kelas
                                                </th>
                                                <th class="text-center">
                                                    Keterangan
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0;?>
                                            @foreach ($dataDpt as $data)
                                                <tr>
                                                    <?php $no += 1?>
                                                    <th scope="row" class="text-center">
                                                        {{ $no }}
                                                    </th>
                                                    <td>
                                                        {{ $data->username }}
                                                    </td>
                                                    <td>
                                                        {{ $data->nama }}
                                                    </td>
                                                    <td>
                                                        {{ $data->kelas }}
                                                    </td>
                                                    <td>
                                                        {{ $data->hadir }}
                                                    </td>
                                                </tr>
                                            @endforeach
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
    </div>
@endsection