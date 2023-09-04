<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationArticle;
use App\Models\CancerCategory;

class HomeController extends Controller
{

    public function __construct()
    {
        // $this->middleware('check.registered');
    }


    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // jenis kanker
        $jenisKanker = CancerCategory::all()->toArray();



        // edukasi
        $edukasiTerapi = EducationArticle::where(['label' => 'terapi'])->get()->toArray();
        $edukasiEfekSamping = EducationArticle::where(['label' => 'efek-samping'])->get()->toArray();
        $edukasiPenangananEfekSamping = EducationArticle::where(['label' => 'penanganan-efek-samping'])->get()->toArray();

        // var_dump($jenisKanker);

        return view('home.index', compact('jenisKanker', 'edukasiEfekSamping'));
    }


    public function definisi()
    {
        $konten = EducationArticle::where(['label' => 'umum', 'title' => 'Definisi kemoterapi'])->get()->toArray();

        return view('home.main_definisi', compact('konten'));
    } // end func


    public function efeksamping()
    {
        $konten = EducationArticle::where(['label' => 'efek-samping'])->get()->toArray();

        return view('home.main_efeksamping', compact('konten'));
    } // end func


    public function penanganan()
    {
        $konten = EducationArticle::where(['label' => 'penganan-efek-samping'])->get()->toArray();

        return view('home.main_penanganan', compact('konten'));
    } // end func


    public function terapi()
    {
        $konten = EducationArticle::where(['label' => 'terapi'])->get()->toArray();

        return view('home.main_terapi', compact('konten'));
    } // end func


}