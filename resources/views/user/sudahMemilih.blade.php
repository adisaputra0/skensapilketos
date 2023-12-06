@extends('layouts.user')

@section('body')
    <div class="container h-100 d-flex justify-content-center align-items-center">
        <div class="m-portlet m-portlet--mobile">
            <div class="m-portlet__head">
                <div class="m-portlet__head-caption">
                    <div class="m-portlet__head-title">
                        <h3 class="m-portlet__head-text">
                            Berhasil memilih kandidat
                            <br>
                        </h3>
                    </div>
                </div>
            </div>
            <div class="m-portlet__body">
                <h4 class="mb-2">Terima kasih sudah memilih kandidat</h4>
                <p style="text-align: justify;">Silahkan klik tombol dibawah jika ingin melihat hasil vote sementara dan klik menu logout pada navbar jika ingin keluar dari website.</p>
                <a href="{{ route('lihatHasilPemilihan') }}" class="btn m-btn--pill btn-success">
                    <i class="fa fa-bar-chart mr-2"></i>Lihat hasil
                </a>
            </div>
        </div>
    </div>
@endsection