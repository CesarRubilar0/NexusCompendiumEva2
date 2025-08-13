<?php

use Illuminate\Support\Facades\Route;

// Ruta principal - Página de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Rutas para proyectos
Route::get('/proyectos', function () {
    return view('proyectos.index');
});

Route::get('/proyectos/crear', function () {
    return view('proyectos.create');
});

Route::get('/proyectos/{id}', function ($id) {
    return view('proyectos.show', ['id' => $id]);
});

Route::get('/proyectos/{id}/editar', function ($id) {
    return view('proyectos.edit', ['id' => $id]);
});

// POST para procesar formularios de proyectos
Route::post('/proyectos', function () {
    // Aquí iría el código para procesar la creación del proyecto
    return redirect('/proyectos')->with('success', 'Proyecto creado exitosamente');
});

Route::put('/proyectos/{id}', function ($id) {
    // Aquí iría el código para procesar la actualización del proyecto
    return redirect('/proyectos/'.$id)->with('success', 'Proyecto actualizado exitosamente');
});

// Rutas para actores de interés
Route::get('/actores', function () {
    return view('actores.index');
});

Route::get('/actores/crear', function () {
    return view('actores.create');
});

Route::get('/actores/{id}', function ($id) {
    return view('actores.show', ['id' => $id]);
});

Route::get('/actores/{id}/editar', function ($id) {
    return view('actores.edit', ['id' => $id]);
});

// POST para procesar formularios de actores
Route::post('/actores', function () {
    // Aquí iría el código para procesar la creación del actor
    return redirect('/actores')->with('success', 'Actor creado exitosamente');
});

Route::put('/actores/{id}', function ($id) {
    // Aquí iría el código para procesar la actualización del actor
    return redirect('/actores')->with('success', 'Actor actualizado exitosamente');
});

// Rutas para reportes
Route::get('/reportes', function () {
    return view('reportes.index');
});

Route::get('/reportes/generar', function () {
    return view('reportes.generar');
});

// Rutas para usuarios
Route::get('/usuarios', function () {
    return view('usuarios.index');
});

Route::get('/usuarios/crear', function () {
    return view('usuarios.create');
});

Route::get('/usuarios/{id}', function ($id) {
    return view('usuarios.show', ['id' => $id]);
});

// Rutas de autenticación
Route::get('/login', function () {
    return view('auth.login');
});

Route::post('/login', function () {
    // Código para procesar el login
    return redirect('/dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

// Ruta de redirección temporal para menú 
Route::get('/institutos', function () {
    return redirect('/actores');
});
