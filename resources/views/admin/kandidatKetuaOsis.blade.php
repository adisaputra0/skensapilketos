@extends("layouts.navigation")

@section('title')
    Kandidat Ketua Osis
@endsection

@section('body')     
    <div class="m-grid__item m-grid__item--fluid m-wrapper">
        <!-- BEGIN: Subheader -->
        <div class="m-subheader ">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="m-subheader__title m-subheader__title--separator">
                        Kandidat Ketua Osis
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
                                    Kandidat Ketua OSIS
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- END: Subheader -->

        <form action="{{ url('crudKandidat') }}" method="post" enctype="multipart/form-data" class="m-form form-send">
            @csrf
            @method("POST")
            <div class="modal" id="modal-general" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Tambah Kandidat</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="m-portlet__body">
                                <div class="form-group m-form__group">
                                    <label for="exampleInputEmail1">
                                        NISN
                                    </label>
                                    <input type="nubmer" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan NISN Kandidat" name="nisn" value="{{ old('nisn') }}">
                                    @error('nisn')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputEmail1">
                                        No
                                    </label>
                                    <input type="nubmer" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukkan No Kandidat" name="no">
                                    @error('no')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputPassword1">
                                        Nama Calon
                                    </label>
                                    <input type="text" class="form-control m-input" id="exampleInputPassword1" placeholder="Masukkan Nama Kandidat" name="nama">
                                    @error('nama')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputPassword1">
                                        Nama Panggilan
                                    </label>
                                    <input type="text" class="form-control m-input" id="exampleInputPassword1" placeholder="Masukkan Nama Panggilan Kandidat" name="nama_panggilan">
                                    @error('nama_panggilan')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="visi_misi">
                                        Visi & Misi
                                    </label>
                                    <textarea class="form-control m-input" id="visi_misi" placeholder="Masukkan visi & misi anda." name="visi_misi" rows="10"></textarea>
                                    <!-- <input id="x" value="" type="hidden" name="visi_misi">
                                    <trix-editor placeholder="Masukkan visi & misi." input="x"></trix-editor> -->
                                    @error('visi_misi')
                                        <div class="text-danger">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleInputEmail1">
                                        Foto Calon
                                    </label>
                                    <div></div>
                                    <label class="custom-file">
                                        <input type="file" id="file-img" class="custom-file-input" accept="image/*" name="gambar">
                                        <span class="custom-file-control"></span>
                                        @error('gambar')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </label>
                                </div>
                                <div>
                                    <img src="" alt="" id="display-img" class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-update btn-success">Tambah</button>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    </div>
                </div>
            </div>
        </form>

        <?php $number = 1; ?>
        @foreach ($kandidatKetuaOsis as $data)
            <form action=" {{ url('crudKandidat/' . $data->id_kandidat) }} " method="post" enctype="multipart/form-data" class="m-form form-send">
                @csrf
                @method("PUT")
                <div class="modal" id="modal-general2{{ $data->id_kandidat }}" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
                    <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Edit Kandidat</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <div class="m-portlet__body">
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            NISN
                                        </label>
                                        <input type="nubmer" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="nisn" value="{{ $data->nisn }}">
                                        @error('nisn')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            No
                                        </label>
                                        <input type="nubmer" class="form-control m-input" id="exampleInputEmail1" aria-describedby="emailHelp" name="no" value="{{ $data->no }}">
                                        @error('no')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputPassword1">
                                            Nama Calon
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputPassword1" name="nama" value="{{ $data->nama }}">
                                        @error('nama')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputPassword1">
                                            Nama Panggilan
                                        </label>
                                        <input type="text" class="form-control m-input" id="exampleInputPassword1" placeholder="Masukkan Nama Panggilan Kandidat" name="nama_panggilan" value="{{ $data->nama_panggilan }}">
                                        @error('nama_panggilan')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="visi_misi">
                                            Visi & Misi
                                        </label>
                                        <textarea class="form-control m-input" id="visi_misi" placeholder="Masukkan visi & misi anda minimal 1 paragraf (4-6 kalimat)." name="visi_misi{{ $data->id_kandidat }}" rows="10">{{ $data->visi_misi }}</textarea>
                                        <!-- <input id="x" value="" type="hidden" name="visi_misi_edit">
                                        <trix-editor placeholder="Masukkan visi & misi." input="x"></trix-editor> -->
                                        @error('visi_misi')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group m-form__group">
                                        <label for="exampleInputEmail1">
                                            Foto Calon
                                        </label>
                                        <div></div>
                                        <label class="custom-file">
                                            <input type="file" id="file-img{{ $data->id_kandidat }}" class="custom-file-input" name="gambar" accept="image/*">
                                            <span class="custom-file-control"></span>
                                        </label>
                                        @error('gambar')
                                            <div class="text-danger">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div>
                                        <img src="foto/{{ $data->foto }}" alt="" id="display-img{{ $data->id_kandidat }}" class="img-fluid">
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
            <?php $number++ ?>
        @endforeach



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
                                        Kandidat Ketua OSIS
                                    </h4>
                                </div>
                            </div>
                            <div class="m-portlet__head-tools">

                                <a href="#" class="akses-create btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air akses-create" data-toggle="modal" data-target="#modal-general">
                                    <span>
                                        <i class="la la-plus"></i>
                                        <span>Tambah Kandidat</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="m-portlet__body">
                            <!--begin::Section-->
                            <div class="m-section">
                                <span class="m-section__sub">
                                    Form ini memiliki fitur untuk menambah, mengedit, menghapus serta menampilkan data dari calon ketua OSIS.
                                </span>
                                <div class="m-section__content">
                                    <table class="table m-table m-table--head-bg-success text-center table-responsive">
                                        <thead>
                                            <tr>
                                                <th class="text-center">
                                                    No
                                                </th>
                                                <th class="text-center">
                                                    Nama Calon
                                                </th>
                                                <th class="text-center">
                                                    Nama Panggilan
                                                </th>
                                                <th class="text-center">
                                                    Visi & Misi
                                                </th>
                                                <th class="text-center" width="400">
                                                    Photo Calon
                                                </th>
                                                <th width="60" class="text-center">
                                                    Aksi
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($kandidatKetuaOsis as $data): ?>
                                                <tr>
                                                    <th scope="row" class="text-center">
                                                        {{ $data->no }}
                                                    </th>
                                                    <td>
                                                        {{ $data->nama }}
                                                    </td>
                                                    <td>
                                                        {{ $data->nama_panggilan }}
                                                    </td>
                                                    <td style="text-align: justify !important;">
                                                       {!! $data->visi_misi !!}
                                                    </td>
                                                    <td>
                                                        <img src="foto/{{ $data->foto }}" alt="" class="img-fluid rounded" width="50%">
                                                    </td>
                                                    <td>
                                                        <div class="btn-group m-btn-group btn-group-sm m-btn-group--pill" role="group" aria-label="...">
                                                            <button type="button" class="m-btn btn btn-success" data-toggle="modal" data-target="#modal-general2{{ $data->id_kandidat }}">
                                                                <i class="fa fa-edit"></i>
                                                            </button>
                                                            <button class="m-btn btn btn-danger hapus{{ $data->id_kandidat }}">
                                                                <i class="fa fa-eraser"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            <?php endforeach;?>
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