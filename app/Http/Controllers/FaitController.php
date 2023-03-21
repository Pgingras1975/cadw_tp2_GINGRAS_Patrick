<?php

namespace App\Http\Controllers;

use App\Models\Fait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FaitController extends Controller
{

     /**
     * Affiche un fait au hasard sur la page d'accueil
     *
     */
    public function index() {
        return view('accueil', [
            "fait" => Fait::select('id', 'texte')->inRandomOrder()->take(1)->get()
        ]);
    }

    /**
     * Affiche la liste de tous les faits
     *
     */
    public function afficherFaits() {
        return view('faits', [
            "faits" => Fait::all()
        ]);
    }

    /**
     * Affiche la page d'ajout d'un nouveau fait
     *
     */
    public function create() {
        return view('ajouter');
    }

    /**
     * Ajoute un nouveau fait dans la table
     *
     * @param Request $request champs à ajouter
     */
    public function store(Request $request){

        $request->validate([
            "texte" => 'required|max:255'
        ],[
            'texte.required' => 'Le champs fait est requis',
            'texte.max' => 'Le fait doit avoir 255 caractères ou moins'
        ]);

        $fait = new Fait();
        $fait->texte = $request->texte;
        $fait->length = Str::length($request->texte);

        $fait->save();

        return redirect()->route('accueil')->with('ajout-fait', 'Nouveau fait ajoutée!');
    }

    /**
     * Affiche la page de modificatiion d'un fait
     *
     * @param int $id id du fait
     */
    public function edit($id) {
        return view('modifier', [
            "fait" => Fait::findOrFail($id)
        ]);
    }

    /**
     * Modifie un fait selon son id
     *
     * @param Request $request champs à modifier
     * @param int $id id du fait
     */
    public function update(Request $request, $id) {

        $request->validate([
            "texte" => 'required|max:255'
        ],[
            'texte.required' => 'Le champs fait est requis',
            'texte.max' => 'Le fait doit avoir 255 caractères ou moins'
        ]);

        $fait = Fait::findOrFail($id);

        $fait->id = $request->id;
        $fait->texte = $request->texte;
        $fait->length = Str::length($request->texte);

        $fait->save();

        return redirect()->route('faits')->with('modification-fait', 'Modification effectuée!');
    }

    /**
     * Supprime un fait selon son id
     *
     * @param int $id id du fait
     */
    public function destroy($id){

        $fait = Fait::findOrFail($id);

        $fait->delete();

        return redirect()
                ->route('accueil')
                ->with('suppression-fait', 'Le fait a été supprimée!');
    }

}
