<?php

namespace App\Http\Controllers;

use App\Models\Direccion;
use Illuminate\Http\Request;

class DireccionController extends Controller
{
    public function index()
    {
        $direcciones = Direccion::paginate(10);
        return view('direcciones.index', compact('direcciones'));
    }
}