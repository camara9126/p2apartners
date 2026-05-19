<?php

use App\Http\Controllers\CategorieController;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Categorie;
use App\Models\ContactForm;
use App\Models\Post;
use Illuminate\Support\Facades\Route;



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Tableau de bord
Route::get('dashboard', function () {
    $posts= Post::with('categorie')->latest()->get();
    $categories= Categorie::latest()->get();
    $messages= ContactForm::where('statut', 1)->latest()->get();

    return view('dashboard.index', compact('posts', 'categories', 'messages'));
})->middleware(['auth', 'verified'])->name('dashboard');


// Route Post - Categorie
Route::middleware('auth')->group(function () {

    Route::resource('posts', PostController::class);
    Route::resource('categorie', CategorieController::class); 
});


require __DIR__.'/auth.php';

// Accueil
Route::get('/', function () {
    $posts= Post::with('categorie')->latest()->get();

    return view('home.index', compact('posts'));
})->name('accueil');

// Apropos 
Route::get('about', function () {
    return view('home.about');
});

// Contact
Route::get('contact', function () {
    return view('home.contact');
});

// Service
Route::get('services', function () {
    return view('home.services');
});

// Blog
Route::get('blog', function () {
    $posts= Post::with('categorie')->latest()->get();

    return view('home.blog', compact('posts'));
});

// Blog
Route::get('blog-single', function () {
    $posts= Post::with('categorie')->latest()->get();

    return view('home.blog-single', compact('posts'));
});

// Case
Route::get('cases', function () {
    return view('home.cases');
});

// Route ContactForm
Route::resource('contactForm', ContactFormController::class);

// Route Vue Blog
Route::get('/{slug}', [PostController::class, 'article'])->name('article');