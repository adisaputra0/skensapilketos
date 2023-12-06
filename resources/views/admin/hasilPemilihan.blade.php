@extends("layouts.navigation")

@section('title')
    Hasil Pemilihan
@endsection

@section('body')
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Hasil Vote
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
                                    Hasil Vote
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->


        <div class="container mt-5">
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
                        @foreach ($kandidatKetuaOsis as $data)
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
    </div>
@endsection