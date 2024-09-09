<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {

    // Titolo 
    $title = 'Film';

    // array di film
    $movies = [
        "Il Padrino",
        "Inception",
        "Titanic",
        "Il Cavaliere Oscuro",
        "Pulp Fiction",
        "La Vita è Bella",
        "Forrest Gump",
        "Interstellar",
        "Shutter Island",
        "Fight Club",
        "Il Signore degli Anelli: Il Ritorno del Re",
        "Matrix",
        "Gladiatore",
        "The Prestige",
        "Star Wars: Una Nuova Speranza",
        "Avatar",
        "Jurassic Park",
        "C'era una volta in America",
        "Schindler's List",
        "La La Land"
    ];

    return view('home', compact('title', 'movies'));
});
