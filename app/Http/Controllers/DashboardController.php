<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Employee;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
        $jumlahpegawai = Employee::count();
        $jumlahpegawaicowo = Employee::where('jeniskelamin', 'Laki-Laki')->count();
        $jumlahpegawaicewe = Employee::where('jeniskelamin', 'Perempuan')->count();
        $jumlahuser = User::count();

        return view('dashboard ', compact('jumlahpegawai','jumlahpegawaicowo', 'jumlahpegawaicewe', 'jumlahuser'));
    }
}
