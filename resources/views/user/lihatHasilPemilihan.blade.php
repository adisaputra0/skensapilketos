@extends('layouts.user')

@section('body')
<div class="container mt-5">
    <div class="m-portlet m-portlet--rounded">
        <div class="m-portlet__head">
            <div class="m-portlet__head-caption">
                <div class="m-portlet__head-title mx-auto">
                    <h3 class="m-portlet__head-text text-center">
                        Selamat Datang Di SKENSOS
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
                                <div class="m-widget19__pic m-portlet-fit--top m-portlet-fit--sides"
                                    style="min-height: 286px">
                                    <img src="foto/{{ $data->foto }}" alt="">
                                    <h3 class="m-widget19__title m--font-light">
                                        {{ $data->nama }}
                                    </h3>
                                    <div class="m-widget19__shadow"></div>
                                </div>
                                <div class="m-widget19__content">
                                    <div class="m-widget19__header">
                                        <div class="m-widget19__user-img">
                                            <img class="m-widget19__img " src="foto/{{ $data->foto }}" alt=""
                                                height="45" style="object-fit: cover;">
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

    <div class="row ">
        <div class="col-xl-12">
            <div
                class="m-portlet m-portlet--bordered-semi m-portlet--widget-fit m-portlet--full-height m-portlet--skin-light ">
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
    </div>
</div>
@endsection
