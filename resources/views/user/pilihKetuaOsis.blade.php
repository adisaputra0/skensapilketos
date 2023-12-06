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
                            Silahkan Pilih Calon Ketua OSIS dibawah ini
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
                                    style="height: 500px; overflow: hidden">
                                    <img src="foto/{{ $data->foto }}" alt="">
                                    <a href="{{ route('detail.kandidat', $data->id_kandidat) }}">
                                        <h3 class="m-widget19__title m--font-light">
                                            {{ $data->nama }}
                                        </h3>
                                    </a>
                                    <div class="m-widget19__shadow"></div>
                                </div>
                                <div class="m-widget19__content">
                                    <div class="m-widget19__header">
                                        <div class="m-widget19__user-img">
                                            <img class="m-widget19__img " src="foto/{{ $data->foto }}" alt=""
                                                height="45" style="object-fit: cover">
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
                                                ?
                                            </span>
                                            <span class="m-widget19__comment">
                                                HasilSuara
                                            </span>
                                        </div>
                                    </div>
                                    <div class="m-widget19__body">
                                        {!! $data->visi_misi !!}
                                    </div>
                                </div>
                                <div class="m-widget19__action">
                                    <button class="btn btn-brand pilih{{ $data->id_kandidat }}" data-container="body"
                                        data-toggle="m-tooltip" data-placement="top" title=""
                                        data-original-title="Pilih Saya">
                                        Pilih No {{ $data->no }}
                                    </button>
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
<script>
    @foreach($kandidat as $data)
    document.querySelector('.pilih{{ $data->id_kandidat }}').addEventListener('click', () => {
        Swal.fire({
            title: 'Kamu Yakin?',
            text: "Kamu tidak akan bisa memilih kandidat lain",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, saya yakin'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = "{{ route('pilih', $data->id_kandidat) }}";
            }
        })
    });
    @endforeach

</script>
@endsection
