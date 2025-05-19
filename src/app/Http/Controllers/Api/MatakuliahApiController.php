<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Matakuliah;

class MatakuliahApiController extends Controller
{
    public function index(Request $request){
        $fakultas = $request->get('authenticated_fakultas');
        $matakuliah = Matakuliah::whereIn('prodi_id', $fakultas->prodis->pluck('id'))->get();
        return response()->json($matakuliah);
    }
}
