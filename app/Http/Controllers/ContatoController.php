<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return response()->json([
            \App\Models\Contato::all(),
        ]);
    }
}
