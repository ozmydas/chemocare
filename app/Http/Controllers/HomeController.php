<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\EducationArticle;
use App\Models\CancerCategory;

class HomeController extends Controller
{
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

    
}
