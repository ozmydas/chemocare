<?php

namespace App\Http\Controllers;

//use App\Models\MBeranda;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;


class Edukasi extends Controller
{
    
    
    public function index(){
        $jeniscancer = DB::table('cancer_categories')->get();
        return view('beranda',['jeniscancer' => $jeniscancer]);
    }
}
