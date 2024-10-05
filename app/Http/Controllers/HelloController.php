<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
    public function index()
    {
        $message = "¡Hola Mundo desde laravel con IA!";
        return view('hello', ['message' => $message]);
    }
}