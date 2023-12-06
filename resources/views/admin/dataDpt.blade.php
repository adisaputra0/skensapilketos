@extends("layouts.navigation")

@section('title')
Data DPT
@endsection

@section('body')
<div class="m-grid__item m-grid__item--fluid m-wrapper">
    <!-- BEGIN: Subheader -->
    <div class="m-subheader ">
        <div class="d-flex align-items-center">
            <div class="mr-auto">
                <h3 class="m-subheader__title m-subheader__title--separator">
                    Data DPT(Daftar Pemilih Tetap)
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
                                Data DPT
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- END: Subheader -->

    <div class="modal" id="modal-import" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Import DPT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('importDpt') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="m-portlet__body">
                            <div class="form-group m-form__group">
                                <label for="exampleInputEmail1">
                                    Masukkan excel
                                </label>
                                <div></div>
                                <label class="custom-file">
                                    <input type="file" id="file2" class="custom-file-input" name="file-import" required>
                                    <span class="custom-file-control"></span>
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Close
                        </button>
                        <button type="submit" class="btn btn-primary">
                            Import data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <form action=" {{ route('store.dpt') }}" method="post" class="m-form form-send">
        @csrf
        @method("POST")
        <div class="modal" id="modal-general" role="dialog" aria-labelledby="tambahData" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah DPT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="m-portlet__body">
                            <div class="">
                                <input type="hidden" class="form-control m-input" id="exampleInputEmail1"
                                    aria-describedby="emailHelp" placeholder="Masukkan Password" name="nisn"
                                    value="{{ rand(1000, 9999) }}">
                                @error('nisn')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="">
                                <input type="hidden" class="form-control m-input" id="exampleInputPassword1"
                                    placeholder="Masukkan Username " name="nama" value="test">
                                @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleSelect1">
                                    Jenis Kelamin
                                </label>
                                <select class="form-control m-input" id="exampleSelect1" name="jenis_kelamin"
                                    value="{{ old('jenis_kelamin') }}">
                                    <option value="laki-laki">
                                        Laki-Laki
                                    </option>
                                    <option value="perempuan">
                                        Perempuan
                                    </option>
                                </select>
                                @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group m-form__group">
                                <label for="exampleSelect1">
                                    Username
                                </label>
                                <input type="text" class="form-control m-input" id="exampleInputPassword1"
                                    placeholder="Masukkan Username " name="kelas" value="{{ old('kelas') }}">
                                @error('kelas')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                                @enderror
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

    @foreach ($dataDpt as $data)
    <form action="{{ route("update.dpt", $data->id) }}" method="post" class="m-form form-send">
        @csrf
        @method("PUT")
        <div class="modal" id="modal-general2{{ $data->id }}" role="dialog" aria-labelledby="tambahData"
            aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit DPT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-body">
                            <div class="m-portlet__body">
                                <div class="">
                                    <input type="hidden" class="form-control m-input" id="exampleInputEmail1"
                                        aria-describedby="emailHelp" name="nisn" value="{{ $data->nama }}">
                                    @error('nisn')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="">
                                    <input type="hidden" class="form-control m-input" id="exampleInputPassword1"
                                        name="nama" value="{{ $data->nama }}">
                                    @error('nama')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleSelect1">
                                        Jenis Kelamin
                                    </label>
                                    <select class="form-control m-input" id="exampleSelect1" name="jenis_kelamin">
                                        <option value="laki-laki"
                                            {{ ($data->jenis_kelamin == "laki-laki") ? "selected" : "" }}>
                                            Laki-Laki
                                        </option>
                                        <option value="perempuan"
                                            {{ ($data->jenis_kelamin == "perempuan") ? "selected" : "" }}>
                                            Perempuan
                                        </option>
                                    </select>
                                    @error('jenis_kelamin')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
                                </div>
                                <div class="form-group m-form__group">
                                    <label for="exampleSelect1">
                                        Username
                                    </label>
                                    <input type="text" class="form-control m-input" id="exampleInputPassword1"
                                    placeholder="Masukkan Username " name="kelas" value="{{ $data->kelas }}">
                                    @error('kelas')
                                    <div class="text-danger">
                                        {{ $message }}
                                    </div>
                                    @enderror
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

    @if (isset($errors) && $errors->any())
    <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400 mt-5"
        role="alert">
        @foreach ($errors->all() as $error)
        @dd($error)
        <span class="font-medium">{{ $error }}</span>
        @endforeach
    </div>
    @endif

    @if (session()->has('failures'))
    @foreach (session()->get('failures') as $failure)
    <div class="container">
        <div class="p-4 mb-4 text-sm text-red-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-red-400 mt-5"
            role="alert">
            {{-- @dd($failure->errors()) --}}
            <span class="font-medium text-danger">{{ $failure->errors()[0] }}</span>
        </div>
    </div>
    @endforeach
    @endif

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
                                    Data DPT
                                </h4>
                            </div>
                        </div>
                        <div class="m-portlet__head-tools">

                            <a href="#"
                                class="akses-create btn btn-accent m-btn m-btn--custom m-btn--pill m-btn--icon m-btn--air akses-create"
                                data-toggle="modal" data-target="#modal-general">
                                <span>
                                    <i class="la la-plus"></i>
                                    <span>Tambah DPT</span>
                                </span>
                            </a>
                            <a href="" class="akses-create btn btn-success m-btn m-btn--custom m-btn--pill m-btn--icon
                                m-btn--air akses-create" data-toggle="modal" data-target="#modal-import">
                                <span>
                                    <i class=" la la-file-excel-o"></i>
                                    <span>Import Data</span>
                                </span>
                            </a>
                            <a href="generatePasswordDpt" class="akses-create btn btn-success m-btn m-btn--custom m-btn--pill m-btn--icon
                                m-btn--air akses-create">
                                <span>
                                    <i class=" la la-key"></i>
                                    <span>Generate Password</span>
                                </span>
                            </a>
                            <br>
                        </div>
                    </div>
                    <div class="m-portlet__body">
                        <div class="d-flex justify-content-between mb-3">
                        <a href="{{ asset('assets/DPT-FORMAT.xlsx') }}"
                                style="text-decoration: underline; color:#6f727d">Download format
                                excel
                                disini</a>
                        <a href="#" style="text-decoration: underline; color:#6f727d" class="generatePDFDpt">Download data DPT
                                disini</a>
                                </div>
                        <!--begin::Section-->
                        <div class="m-section">
                            <span class="m-section__sub">
                                Form ini memiliki fitur untuk menambah, mengedit, menghapus serta
                                menampilkan data dari
                                DPT atau Daftar Pemilih Tetap.
                            </span>
                            <div class="m-section__content">
                                <table class="table m-table m-table--head-bg-success text-center table-responsive table-to-pdf">
                                    <thead>
                                        <tr>
                                            <th class="text-center">
                                                No
                                            </th>
                                            <th class="text-center">
                                                Password
                                            </th>
                                            <th class="text-center">
                                                Username
                                            </th>
                                            <th class="text-center">
                                                Jenis Kelamin
                                            </th>
                                            <th width="60" class="text-center" id="removePdf">
                                                Aksi
                                            </th> 
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 0; ?>
                                        @foreach ($dataDpt as $data)
                                        <?php $no += 1; ?>
                                        <tr>
                                            <th scope="row" class="text-center">
                                                {{ $no }}
                                            </th>
                                            <td>
                                                {{ $data->nama }}
                                            </td>
                                            <td>
                                                {{ $data->kelas }}
                                            </td>
                                            <td>
                                                {{ $data->jenis_kelamin }}
                                            </td>
                                            {{-- <td>
                                                {{ $data->kelas }}
                                            </td> --}}
                                            <td id="removePdf">
                                                <div class="btn-group m-btn-group btn-group-sm m-btn-group--pill"
                                                    role="group" aria-label="...">
                                                    <button type="button" class="m-btn btn btn-success"
                                                        data-toggle="modal"
                                                        data-target="#modal-general2{{ $data->id }}">
                                                        <i class="fa fa-edit"></i>
                                                    </button>
                                                    <button type="button"
                                                        class="m-btn btn btn-danger hapusDpt{{ $data->id }}">
                                                        <i class="fa fa-eraser"></i>
                                                    </button>
                                                </div>
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
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.4.0/jspdf.umd.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"></script>
<script>
    const removePdf = document.querySelectorAll("#removePdf");
    document.querySelector(".generatePDFDpt").addEventListener('click', () => {
        removePdf.forEach((e) => {
            e.style.display = "none";
        });
        const jsPDF = window.jspdf.jsPDF;
        const table = document.querySelector(".table-to-pdf");
        const pdf = new jsPDF("p", "mm", "a4");
        html2pdf().from(table).set({
            jsPDF: pdf,
            filename: "Usn & Pass Data DPT.pdf",
            margin: [10, 10],
        }).save();
        delayColumnAction = setInterval(() => {
            removePdf.forEach((e) => {
                e.style.display = "table-cell";
            });
        }, 2000);
    });
</script>
@endsection
