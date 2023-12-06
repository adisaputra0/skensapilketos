@extends("layouts.navigation")

@section('title')
    Kelas
@endsection

@section('body')     
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Data Kelas
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
                                    Data Sekolah
                                </span>
                            </a>
                        </li>
                        <li class="m-nav__separator">
                            -
                        </li>
                        <li class="m-nav__item">
                            <a href="" class="m-nav__link">
                                <span class="m-nav__link-text">
                                    Data Kelas
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        @foreach ($kelas as $data)
            <form action="{{ url('crudClass/' . $data->id_kelas) }}" method="post" class="m-form form-send">
                @csrf
                @method("PUT")
                <div class="modal" id="modal-general2{{ $data->id_kelas }}" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Kelas</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="modal-body">
                                    <div class="m-portlet__body">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputPassword1">
                                                Kelas
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputPassword1" name="kelas" value="{{ $data->nama_kelas }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-update btn-success">Perbarui</button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                        </div>
                    </div>
                </div>
            </form>
        @endforeach


        <!-- END: Subheader -->
        <div class="m-content">
            <div class="row">
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Tambah Data Kelas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <!-- <div class="alert alert-success" role="alert">
                                    <strong>
                                        Berhasil!
                                    </strong>
                                    Data anda berhasil ditambahkan.
                                </div>
                                <div class="alert alert-danger" role="alert">
                                    <strong>
                                        Gagal!
                                    </strong>
                                    Data anda sudah ada
                                </div> -->
                                <form action="{{ url('crudClass') }}" method="post">
                                    @csrf
                                    @method("POST")
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Nama Kelas
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan nama kelas" name="kelas" value="{{ old('kelas') }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <button type="submit" class="btn m-btn--pill    btn-primary" name="simpan">
                                            Simpan Data
                                        </button>
                                    </div>
                                </form>
                            </div>
                            <!--end::Section-->
                        </div>
                    </div>
                    <!--end::Portlet-->
                </div>
                <div class="col-xl-12">
                    <!--begin::Portlet-->
                    <div class="m-portlet m-portlet--tab">
                        <div class="m-portlet__head">
                            <div class="m-portlet__head-caption">
                                <div class="m-portlet__head-title">
                                    <span class="m-portlet__head-icon m--hide">
                                        <i class="la la-gear"></i>
                                    </span>
                                    <h3 class="m-portlet__head-text">
                                        Data Kelas
                                    </h3>
                                </div>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <div class="m-section__content">
                                    <table class="table m-table m-table--head-bg-brand text-center">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th class="text-center">
                                                    Nama Kelas
                                                </th>
                                                <th class="text-center">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 0; ?>
                                            @foreach ($kelas as $data)
                                                <?php $no += 1; ?>
                                                <tr>
                                                    <th scope="row" class="text-center">
                                                        {{ $no }}
                                                    </th>
                                                    <td>
                                                        {{ $data->nama_kelas }}
                                                    </td>
                                                    <td>
                                                        <div class="btn-group m-btn-group btn-group-sm m-btn-group--pill" role="group" aria-label="...">
                                                            <button type="button" class="m-btn btn btn-success" data-toggle="modal" data-target="#modal-general2{{ $data->id_kelas }}">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <a href="#" type="button" class="m-btn btn btn-danger hapus{{ $data->id_kelas }}">
                                                                <i class="fa fa-eraser"></i>
                                                            </a>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <div class="m-section__content">
                                    <a href="#" type="button" class="btn m-btn--pill btn-danger hapusSemua">
                                        Hapus Semua Data
                                    </a>
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
