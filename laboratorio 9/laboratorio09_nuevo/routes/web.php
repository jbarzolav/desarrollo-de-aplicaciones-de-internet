<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "Bienvenidos alumnos de Tecsup";
});

Route::get('/demo', function () {
    return "Aquí se muestra el contenido de Demo";
});

Route::get('/tienda', function () {
    return "Aquí se muestra el contenido de Tienda";
});

Route::get('/tienda/create', function () {
    return "Aquí se muestra el entorno de la creación de la Tienda";
});

Route::get('/tienda/{post}', function ($post) {
    return "Aquí se muestra todo el contenido de {$post}";
});

Route::get('/contenido/{post}/{categoria}', function ($post, $categoria) {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});

Route::get('/lista/{post}/{categoria?}', function ($post, $categoria = 'hogar') {
    return "Aquí se muestra todo el contenido de {$post} de la categoría {$categoria}";
});