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

    return view('p2A.index', compact('posts'));
})->name('accueil');

// Apropos 
Route::get('apropos', function () {
    return view('p2A.apropos');
});

// Contact
Route::get('contact', function () {
    return view('p2A.contact');
});

// Service
Route::get('serviceaccompagnement', function () {
    return view('p2A.serviceaccompagnement');
});

// Blog
Route::get('blog', function () {
    $posts= Post::with('categorie')->latest()->get();

    return view('p2A.blog', compact('posts'));
});


// Case
Route::get('cases', function () {
    return view('p2A.cases');
});

// Carrières
Route::get('carrières', function () {
    return view('p2A.carrières');
});

// Transport et logistique
Route::get('transportetlogistique', function () {
    return view('p2A.transportetlogistique');
});     

// actualités
 Route::get('actualites', function () {
    $posts = Post::with('categorie')->latest()->get();
    return view('p2A.actualites', compact('posts'));
});

// audio et vidéo
Route::get('audit', function () {
    return view('p2A.audit');
});

// qui nous sommes
Route::get('quinoussomme', function () {
    return view('p2A.apropos');
});

// assistance juridique
Route::get('assistancejuridique', function () {
    return view('p2A.assistancejuridique');
});

// automobile
Route::get('automobile', function () {
    return view('p2A.automobile');
});

// conseil et orgnisation
Route::get('conseiletorganisation', function () {
    return view('p2A.conseiletorganisation');
});

// conseil financier
Route::get('conseilfinancier', function () {
    return view('p2A.conseilfinancier');
});

// expertise comptable
Route::get('expertisecomptable', function () {
    return view('p2A.expertisecomptable');
});

// fiscalité
Route::get('fiscalité', function () {
    return view('p2A.fiscalité');
});

// ifrs
Route::get('ifrs', function () {
    return view('p2A.ifrs');
});

// industrie et mines
Route::get('industriesetmines', function () {
    return view('p2A.industriesetmines');
});

// insight fiscalite
Route::get('insightfiscalite', function () {
    return view('p2A.insightfiscalité');
});

// insights
Route::get('insights', function () {
    return view('p2A.insights');
}); 

// ong et secteur
Route::get('ongetsecteur', function () {
    return view('p2A.ongetsecteur');
});

// paie et social
Route::get('paieetsocial', function () {
    return view('p2A.paieetsocial');
});

// services financiers
Route::get('servicesfinanciers', function () {
    return view('p2A.servicesfinanciers');
});

// syscohoda
Route::get('syscohoda', function () {
    return view('p2A.syscohoda');
}); 

// telecommunication
Route::get('telecometmultimedia', function () {
    return view('p2A.telecometmultimedia');
});

// transport et logistique
Route::get('transportetlogistique', function () {
    return view('p2A.transportetlogistique');
});


// Route ContactForm
Route::resource('contactForm', ContactFormController::class);

// Route Vue Blog
Route::get('articles/{slug}', [PostController::class, 'article'])->name('article');