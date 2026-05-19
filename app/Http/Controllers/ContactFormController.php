<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
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
            'nom' => 'required',
            'email' => 'required',
            'sujet' => 'required',
            'message',
        ]);

        ContactForm::create([
            'nom' => $request->nom,
            'email' => $request->email,
            'sujet' => $request->sujet,
            'message' => $request->message
        ]);

        return redirect()->back()->with('success', 'Votre message a bien été envoyé, merci !');
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
        $message= ContactForm::findOrFail($id);

        return view('dashboard.messages.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(string $id)
    {
        $message=ContactForm::findOrFail($id);

        $message->update([
            'statut' => 0
        ]);

        return redirect()->back()->with('success', 'Message marqué comme lu !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $message=ContactForm::findOrFail($id);
        $message->delete();

        return redirect()->back()->with('success', 'Message supprimé avec success !');
    }
}
