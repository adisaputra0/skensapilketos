@extends("layouts.navigation")

@section('title')
    Identitas Sekolah
@endsection

@section('body')     
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Identitas Sekolah
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
                                    Identitas Sekolah
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
                <form action="{{ url('crudIdentitasSekolah/1') }}" method="post" class="d-flex flex-column flex-md-row">
                    @csrf
                    @method('PUT')
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
                                        Fitur ini dapat mengisi data atau informasi sekolah seperti NPSN, Nama serta Alamat Sekolah.
                                    </span>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                NPSN
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="npsn" value="{{ $identitas_sekolah->npsn }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Nama Sekolah
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nama_sekolah" value="{{ $identitas_sekolah->nama_sekolah }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Alamat Jalan
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="alamat_jalan" value="{{ $identitas_sekolah->alamat_jalan }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Desa / Kelurahan
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="desa" value="{{ $identitas_sekolah->desa }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Kecamatan
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kecamatan" value="{{ $identitas_sekolah->kecamatan }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Kabupaten / Kota
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kabupaten" value="{{ $identitas_sekolah->kabupaten }}">
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
                                        Form ini memiliki fitur meng-update data Kepala Sekolah serta berisikan informasi data diri Kepala Sekolah SMK Negeri 1 Denpasar.
                                    </span>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                Nama Kepala Sekolah
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="kepala_sekolah" value="{{ $identitas_sekolah->kepala_sekolah }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <label for="exampleInputEmail1">
                                                NIP
                                            </label>
                                            <input type="text" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nip" value="{{ $identitas_sekolah->nip }}">
                                        </div>
                                    </div>
                                    <div class="m-section__content">
                                        <div class="form-group m-form__group">
                                            <button type="submit" name="update" class="btn m-btn--pill btn-primary">
                                                Update Data
                                            </button>
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
    </div>
@endsection
