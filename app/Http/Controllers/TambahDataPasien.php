<?php

namespace App\Http\Controllers;

use App\Models\MBeranda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class TambahDataPasien extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tambah(Request $request)
    {
        var_dump($request->post());
        // insert data ke table pegawai
        DB::table('patient_biodatas')->insert([
            'name' => $request->name,
            'age' => $request->age,
            'gender' => $request->gender,
            'address' => $request->address,
            'phone' => $request->phone,
            'cancer_name' => json_encode($request->cancer_name), // Simpan array sebagai JSON
            'cancer_stadium' => $request->cancer_stadium
        ]);
        
        // alihkan halaman ke halaman pegawai
        // return redirect('sukses');
    }
    
    public function index(){
        $jeniscancer = DB::table('cancer_categories')->get();
        return view('beranda',['jeniscancer' => $jeniscancer]);
    }
}
