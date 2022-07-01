<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade as PDF;

class EmployeeController extends Controller
{
    // fungsi untuk menampilkan data pegawai
    public function pegawai(Request $request){
        // untuk melakukan pencarian dan pagination
        if ($request->has('search')) {
            $data = Employee::where('nama', 'LIKE', '%' .$request->search. '%' )->paginate(15);
        }else {
            $data = Employee::paginate(15);
        }
        // dd($data);
        return view('datapegawai', compact('data'));
    }

    // fungsi untuk nampilin view tambahpegawai
    public function tambahpegawai(){
        return view('tambahdata');
    }

    // fungsi untuk menambahkan pegawai
    public function insertdata(Request $request){
        
        // validasi agar tidak boleh kosong
        $this->validate($request, [
            'nip' => 'required',
            'nama'  => 'required',
            'notelpon'  => 'required',
            'jeniskelamin'  => 'required',
            'agama'  => 'required',
            'tlahir'  => 'required',
            'tgllahir'  => 'required',
            'statuskawin'  => 'required',
            'alamat'  => 'required',
        ]);

        $data = Employee::create($request->all());

        // untuk mengatur upload foto
        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopegawai', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
            $data->save();
        }
        
        return redirect()->route('pegawai');
    }

    public function editdata($id){
        $data = Employee::find($id);
        // dd($data);
        return view('editdata', compact('data'));
    }

    public function updatedata(Request $request, $id){
        
        $data = Employee::find($id);
        $data->nip = $request->input('nip');
        $data->nama = $request->input('nama');
        $data->notelpon = $request->input('nip');
        $data->jeniskelamin = $request->input('jeniskelamin');
        $data->agama = $request->input('agama');
        $data->tlahir = $request->input('tlahir');
        $data->statuskawin = $request->input('statuskawin');
        $data->alamat = $request->input('alamat');

        $this->validate($request, [
            'nip' => 'required',
            'nama'  => 'required',
            'notelpon'  => 'required',
            'jeniskelamin'  => 'required',
            'agama'  => 'required',
            'tlahir'  => 'required',
            'tgllahir'  => 'required',
            'statuskawin'  => 'required',
            'alamat'  => 'required',
        ]);

        if ($request->hasFile('foto')) {
            $request->file('foto')->move('fotopegawai', $request->file('foto')->getClientOriginalName());
            $data->foto = $request->file('foto')->getClientOriginalName();
        }

        // $data->save();
        // $data->update($request->all());
        $data->update();

        return redirect()->route('pegawai');
    }

    public function deletedata($id){
        $data = Employee::find($id);
        $data->delete();

        return redirect()->route('pegawai');
    }

    public function detaildata($id){
        $data = Employee::find($id);
        return view('detaildata',compact('data'));
    }

    public function exportpdf(){
        $data = Employee::all();

        view()->share('data', $data);
        $pdf = PDF::loadView('datapegawai-pdf');
        return $pdf->download('data.pdf');
    }
}
