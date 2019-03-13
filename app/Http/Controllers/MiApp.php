<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MiApp extends Controller {

    public function index() {
        $hora = date("D-M-Y");
        return view("datos.general", ["hora" => $hora]);
    }

    public function about() {
        $hora = date("D-M-Y");
        return view("datos.about", ["hora" => $hora]);
    }

    public function contactos() {
        $hora = date("D-M-Y");

        return view("datos.contactos", ["hora" => $hora]);
    }

    public function productos(Request $request) {
        $compra = $request->input("producto_comprado");
        $productos = DB::table('producto')->get();
        $hora = date("D-M-Y");
        return view("datos.productos", ["productos" => $productos,
            "hora" => $hora,
            "producto_comprado" => $compra]);
    }

}
