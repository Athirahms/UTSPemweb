<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProdiApiController extends Controller
{
    public function index(Request $request){
        $fakultas = $request->get('authenticated_fakultas');
        return response()->json($fakultas->prodi()->get());
    }
}
