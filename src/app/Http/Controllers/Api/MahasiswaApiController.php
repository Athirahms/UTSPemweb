<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaApiController extends Controller
{
    public function index(Request $request){
        $fakultas = $request->get('authenticated_fakultas');
        $mahasiswa = Mahasiswa::whereIn('prodi_id', $fakultas->prodis->pluck('id'))->get();
        return response()->json($mahasiswa);
    }
}
