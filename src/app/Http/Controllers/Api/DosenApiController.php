<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Dosen;

class DosenApiController extends Controller
{
    public function index(Request $request){
        $fakultas = $request->get('authenticated_fakultas');
        $dosen = Dosen::whereIn('prodi_id', $fakultas->prodis->pluck('id'))->get();
        return response()->json($dosen);
    }
}
