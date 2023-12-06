<?php

namespace App\Http\Controllers;

use App\Imports\DptImport;
use Carbon\Carbon;
use App\Models\User;
use App\Models\Kelas;
use App\Models\Kandidat;
use App\Models\Countdown;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Models\Identitassekolah;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class SemuaController extends Controller
{

    //== Halaman Login ==
    public function login_user(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);
        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            $user = User::where("username", $request->username)->first();
            if ($user->role == true) {
                Auth::logout();
                $session = Session::flash('pesan', 'Gagal Login');
                return redirect('login_user');
            } else {
                return redirect('pilihKetuaOsis');
            }
        } else {
            Auth::logout();
            $session = Session::flash('pesan', 'Gagal Login');
            return redirect('login_user');
        }
    }

    public function login_admin(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required',
        ], [
            'username.required' => 'Email harus diisi',
            'password.required' => 'Password harus diisi',
        ]);
        $infologin = [
            'username' => $request->username,
            'password' => $request->password,
        ];
        if (Auth::attempt($infologin)) {
            $user = User::where("username", $request->username)->first();
            if ($user->role == false) {
                Auth::logout();
                $session = Session::flash('pesan', 'Gagal Login');
                return redirect('login_admin');
            } else {
                return redirect('dashboard');
            }
        } else {
            Auth::logout();
            $session = Session::flash('pesan', 'Gagal Login');
            return redirect('login_admin');
        }
    }
    //== End Halaman Login ==

    //== Start Halaman Admin ==
    public function dashboard()
    {
        $total_siswa_10 = User::whereRaw("SUBSTRING_INDEX(kelas, ' ', 1) = 'X'")->count();
        $total_siswa_11 = User::whereRaw("SUBSTRING_INDEX(kelas, ' ', 1) = 'XI'")->count();
        $total_siswa_12 = User::whereRaw("SUBSTRING_INDEX(kelas, ' ', 1) = 'XII'")->count();
        return view('admin.dashboard')->with([
            "active" => "dashboard",
            "kandidat" => Kandidat::all(),
            "identitas_sekolah" => Identitassekolah::find(1),
            "countdown" => Countdown::find(1),
            "total_siswa_10" => $total_siswa_10,
            "total_siswa_11" => $total_siswa_11,
            "total_siswa_12" => $total_siswa_12,
            "run_graphic" => true,
        ]);
    }
    public function identitasSekolah()
    {
        return view('admin.identitasSekolah')->with([
            "active" => "identitasSekolah",
            "identitas_sekolah" => Identitassekolah::find(1),
        ]);
    }
    public function kelas()
    {
        return view('admin.kelas')->with([
            "active" => "kelas",
            "kelas" => Kelas::all(),
        ]);
    }
    public function kandidatKetuaOsis()
    {
        return view('admin.kandidatKetuaOsis')->with([
            "active" => "kandidatKetuaOsis",
            "kandidatKetuaOsis" => Kandidat::all(),
        ]);
    }
    public function dataDpt()
    {
        return view('admin.dataDpt')->with([
            "active" => "dataDpt",
            "kelas" => Kelas::all(),
            "dataDpt" => User::where('role', '!=', 1)->get(),
            "run_downloadPdf" => true,
        ]);
    }

    public function importDpt(Request $request)
    {
        // dd($request);
        $file = $request->file('file-import');

        $import = new DptImport;
        $import->import($file);


        if ($import->failures()->isNotEmpty()) {
            return back()->withFailures($import->failures());
        }

        return redirect('/dataDpt')->with('success', 'Data berhasil di import');
    }
    public function hasilPemilihan()
    {
        $total_siswa = User::where('role', '!=', 1)->get();
        $total_hadir = User::where('role', '!=', 1)->where('hadir', 'hadir')->get();
        $total_tidak_hadir = User::where('role', '!=', 1)->where('hadir', 'tidak hadir')->get();

        return view('admin.hasilPemilihan')->with([
            "active" => "hasilPemilihan",
            "kandidatKetuaOsis" => Kandidat::all(),
            "total_siswa" => $total_siswa->count(),
            "total_hadir" => $total_hadir->count(),
            "total_tidak_hadir" => $total_tidak_hadir->count(),
        ]);
    }
    public function daftarHadir()
    {
        $total_siswa = User::where('role', '!=', 1)->get();
        $total_hadir = User::where('role', '!=', 1)->where('hadir', 'hadir')->get();
        $total_tidak_hadir = User::where('role', '!=', 1)->where('hadir', 'tidak hadir')->get();

        return view('admin.daftarHadir')->with([
            "active" => "daftarHadir",
            "dataDpt" => User::where('role', '!=', 1)->get(),
            "total_siswa" => $total_siswa->count(),
            "total_hadir" => $total_hadir->count(),
            "total_tidak_hadir" => $total_tidak_hadir->count(),
            "run_downloadPdf" => true,
        ]);
    }
    public function laporanPilketos()
    {
        $total_siswa = User::where('role', '!=', 1)->get();
        $total_hadir = User::where('role', '!=', 1)->where('hadir', 'hadir')->get();
        $total_tidak_hadir = User::where('role', '!=', 1)->where('hadir', 'tidak hadir')->get();
        $pemenang = Kandidat::where('dipilih', '=', function ($query) {
            $query->select(DB::raw('MAX(dipilih)'))
                ->from('kandidats');
        })->get();

        return view('admin.laporanPilketos')->with([
            "active" => "laporanPilketos",
            "identitas_sekolah" => Identitassekolah::find(1),
            "total_siswa" => $total_siswa->count(),
            "total_hadir" => $total_hadir->count(),
            "total_tidak_hadir" => $total_tidak_hadir->count(),
            "pemenang" => $pemenang,
            "cek_kandidat" => $pemenang->count(),
        ]);
    }
    public function pengaturan()
    {
        $total_siswa = User::where('role', '!=', 1)->get();
        $total_hadir = User::where('role', '!=', 1)->where('hadir', 'hadir')->get();
        $total_tidak_hadir = User::where('role', '!=', 1)->where('hadir', 'tidak hadir')->get();
        $pemenang = Kandidat::where('dipilih', '=', function ($query) {
            $query->select(DB::raw('MAX(dipilih)'))
                ->from('kandidats');
        })->get();

        return view('admin.pengaturan')->with([
            "active" => "pengaturan",
            "identitas_sekolah" => Identitassekolah::find(1),
            "total_siswa" => $total_siswa->count(),
            "total_hadir" => $total_hadir->count(),
            "total_tidak_hadir" => $total_tidak_hadir->count(),
            "pemenang" => $pemenang,
            "cek_kandidat" => $pemenang->count(),
        ]);
    }
    public function resetDataKandidat()
    {
        Session::flash('pesan', 'Sukses Reset Data Kandidat');
        Kandidat::truncate();
        return redirect("pengaturan");
    }
    public function resetDataDpt()
    {
        Session::flash('pesan', 'Sukses Reset Data DPT');
        User::where('role', '!=', 1)->delete();
        return redirect("pengaturan");
    }
    public function resetSemuaData()
    {
        Session::flash('pesan', 'Sukses Reset Semua Data');
        Kandidat::truncate();
        User::where('role', '!=', 1)->delete();
        return redirect("pengaturan");
    }
    //== End Halaman Admin ==

    //== Halaman User ==

    public function detailKandidat()
    {
        return view('user.detail');
    }
    public function pilihKetuaOsis()
    {
        return view('user.pilihKetuaOsis')->with([
            "kandidat" => Kandidat::all(),
        ]);
    }
    public function lihatHasilPemilihan()
    {
        return view('user.lihatHasilPemilihan')->with([
            "kandidat" => Kandidat::all(),
            "run_graphic" => true,
        ]);
    }
    public function pilih(Kandidat $id)
    {
        $user = User::find(Auth()->user()->id);
        $kandidat = $id;
        $user->update([
            "hadir" => "hadir",
        ]);
        $voting = $kandidat->dipilih + 1;
        $kandidat->update([
            "dipilih" => $voting,
        ]);
        Session::flash('pesan', 'Berhasil Memilih Kandidat');
        return redirect("sudahMemilih");
    }
    //== End Halaman User ==

    //CRUD Data DPT
    public function storeDpt(Request $request)
    {
        $request->validate([
            'nisn' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
        ]);
        $ada_kelas = User::where("kelas", $request->kelas)->first();
        // $semua_kelas = Kelas::all();
        // $ada_kelas = false;
        // foreach($semua_kelas as $kelas){
        //     if($kelas == $request->kelas || $kelas == $request->username){
        //         $ada_kelas = true;
        //     }
        // }
        if(!$ada_kelas){   
            User::create([
                'nama' => $request->nisn,
                'username' => $request->kelas,
                'username_verified_at' => now(),
                'password' => Hash::make($request->nisn),
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas' => $request->kelas,
            ]); 
            Session::flash('pesan', 'Sukses Tambah Dpt');
        }else{
            Session::flash('gagal', 'Dpt sudah ada');
        }
        return redirect("dataDpt");
    }
    public function generatePasswordDpt(){
        $users = User::where('role', '!=', 1)->get();
        if($users){
            foreach($users as $user){
                $random = rand(1000,9999);
                $user->update([
                    'nama' => $random,
                    'password' => Hash::make($random),
                ]);
            }
            Session::flash('pesan', 'Sukses generate password');
        }else{
            Session::flash('gagal', 'Tidak ada Dpt');
        }
        return redirect("dataDpt");
    }
    public function updateDpt(Request $request, User $id)
    {
        $request->validate([
            "nisn" => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'kelas' => 'required',
        ]);
        $users = User::where("username", $request->kelas)->where('id', '!=', $id->id)->first();
        if(!$users){
            $id->update([
                'nama' => $request->nisn,
                'username' => $request->kelas,
                'password' => Hash::make($request->nisn),
                'jenis_kelamin' => $request->jenis_kelamin,
                'kelas' => $request->kelas,
            ]);
            Session::flash('pesan', 'Sukses Update Dpt');
        }else{
            Session::flash('gagal',  'Dpt sudah ada');
        }
        return redirect("dataDpt");
    }
    public function deleteDpt(User $id)
    {
        Session::flash('pesan', 'Sukses Hapus Dpt');
        $id->delete();
        return redirect("dataDpt");
    }
    public function cekCountdown()
    {
        $bulanToAngka = [
            'January' => 1,
            'February' => 2,
            'March' => 3,
            'April' => 4,
            'May' => 5,
            'June' => 6,
            'July' => 7,
            'August' => 8,
            'September' => 9,
            'October' => 10,
            'November' => 11,
            'December' => 12,
        ];
        $value = Countdown::find(1);

        // Mendapatkan tanggal saat ini dalam format "20-June-2023"
        $date = Carbon::now()->format('d');
        $month = Carbon::now()->format('m');
        $year = Carbon::now()->format('Y');

        // if (intval($value->tahun) > intval($year)) {
        //     echo "blm bisa tahun";
        // } else if (intval($bulanToAngka["$value->bulan"]) > intval($month)) {
        //     echo "blm bisa bulan";
        // } else if (intval($value->tanggal) > intval($date)) {
        //     echo "blm bisa tanggal";
        // }

        // if (intval($year) <= intval($value->tahun)) {
        //     if (intval($month) <= intval($bulanToAngka["$value->bulan"])) {
        //         if (intval($date) <= intval($value->tanggal)) {
        //             echo "tanggal bsk";
        //         }
        //     } else {
        //         echo "bulan depan";
        //     }
        // } else {
        //     echo "tahun depan";
        // }

        // if (intval($value->tahun) > intval($year)) {
        //     echo "blm bisa, tahun depan soalnya";
        // } else if (intval($value->tahun) == intval($year)) {
        //     if (intval($bulanToAngka["$value->bulan"]) > intval($month)) {
        //         echo "blm bisa, bulan depan soalnya";
        //     } else if (intval($bulanToAngka["$value->bulan"]) == intval($month)) {
        //         if (intval($value->tanggal) > intval($date)) {
        //             echo "blm bisa, tanggal depan soalnya";
        //         } else {
        //             echo "bisa, tanggal sekarang atau lalu soalnya";
        //         }
        //     } else {
        //         echo "bisa, bulan lalu soalnya";
        //     }
        // } else {
        //     echo "bisa, tahun lalu soalnya";
        // }

        // if (intval($value->tahun) > intval($year)) {
        //     return redirect("/");
        // } else if (intval($bulanToAngka["$value->bulan"]) > intval($month)) {
        //     return redirect("/");
        // } else if (intval($value->tanggal) > intval($date)) {
        //     return redirect("/");
        // } else {
        //     $pesan = Session::get('pesan');
        //     return view('user.login')->with([
        //         "pesan" => $pesan,
        //     ]);
        // }

        if (intval($value->tahun) > intval($year)) {
            return redirect("/");
        } else if (intval($value->tahun) == intval($year)) {
            if (intval($bulanToAngka["$value->bulan"]) > intval($month)) {
                return redirect("/");
            } else if (intval($bulanToAngka["$value->bulan"]) == intval($month)) {
                if (intval($value->tanggal) > intval($date)) {
                    return redirect("/");
                } else {
                    $pesan = Session::get('pesan');
                    return view('user.login')->with([
                        "pesan" => $pesan,
                    ]);
                }
            } else {
                $pesan = Session::get('pesan');
                return view('user.login')->with([
                    "pesan" => $pesan,
                ]);
            }
        } else {
            $pesan = Session::get('pesan');
            return view('user.login')->with([
                "pesan" => $pesan,
            ]);
        }
    }
}
