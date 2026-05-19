<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required','string',
            'type' => 'required','string',
            'categorie_id' => 'exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'contenu' => 'string',
            'date' => 'string',
            'editeur' => 'string'
        ]);
        //dd($request->all());
        // creation du post

            // Gestion de l'images principal
            if ($request->hasFile('image')) {
                $filename = time().$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('imgPost', $filename, 'public');
                $request['image'] = '/storage/' . $path;
            }

        Post::create([
            'titre' => $request->titre,
            'type' => $request->type,
            'categorie_id' => $request->categorie_id,
            'image' => $path,
            'contenu' => $request->contenu,
            'date' => $request->date ?? now(),
            'editeur' => $request->editeur ?? request()->user()->name,
            'statut' => $request->statut,
        ]);
        // dd($categories);
        return redirect()->back()->with('success', 'Post crée avec success.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post= Post::findOrfail($id);

        return view('dashboard.posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $post= Post::findOrfail($id);

        $request->validate([
            'titre' => 'string',
            'type' => 'string',
            'categorie_id' => 'exists:categories,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'contenu' => 'string',
            'date' => 'string',
            'editeur' => 'string'

        ]);
        //dd($request->all());
        // creation du post

            // Gestion de l'images principal
            if ($request->hasFile('image')) {
                $filename = time().$request->file('image')->getClientOriginalName();
                $path = $request->file('image')->storeAs('imgPost', $filename, 'public');
                $request['image'] = '/storage/' . $path;
            }

        $post->update([
            'titre' => $request->titre ?? $post->titre,
            'type' => $request->type ?? $post->type,
            'categorie_id' => $request->categorie_id ?? $post->categorie_id,
            'image' => $path ?? $post->image,
            'contenu' => $request->contenu ?? $post->contenu,
            'date' => $request->date ?? $post->date,
            'statut' => $request->statut ?? $post->statut,
            'editeur' => $request->editeur ?? $post->editeur,
        ]);
        // dd($categories);
        return redirect()->route('dashboard')->with('success', 'Post modifiée avec success.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $posts= Post::findOrFail($id);
        $posts->delete();

        return redirect()->back()->with('success', 'Post supprimé avec success');
    }

    public function article(string $slug) 
    {
        $article= Post::where('slug', $slug)->firstOrfail();
        //dd($article);
        $posts= Post::with('categorie')->latest()->paginate(3);
        
        return view('home.blog-single', compact('article', 'posts'));
    }
}
