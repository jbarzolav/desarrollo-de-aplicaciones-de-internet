<?php

namespace App\Http\Controllers;

class TiendaController extends Controller
{
    public function index() {
        return "Aqui se muestra todo el contenido de tienda";
    }

    public function create() {
        return "Aqui se muestra el entorno de la creación de la tienda";
    }

    public function show($post) {
        return "Aqui se muestra todo el contenido {$post}";
    }
}