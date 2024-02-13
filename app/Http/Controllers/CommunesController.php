<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Communes;

class CommunesController extends Controller
{
    public function liste_communes()
        {
            $communes = Communes:: all();
            return view('communes.liste', compact('communes'));
        }

        public function ajouter_communes()
        {
            return view('communes.ajouter');
        }
    
        public function ajouter_communes_traitement(Request $request)
        {
           $request->validate([
            'nomCommune' => 'required',
            'departement' => 'required',
            'pays' => 'required',

           ]);
           $communes = new Communes();
           $communes->nomCommune = $request->nomCommune;
           $communes->departement = $request->departement;
           $communes->pays = $request->pays;
           $communes->save();

           return redirect('/ajouter')->with('status', "La communes a été ajouté avec succes");

        }
        public function modifier_commune($id)

        {
            $communes = Communes::find($id);
            return view('communes.modifier', compact('communes'));
        }

        public function modifier_communes_traitement(Request $request)
        {
           $request->validate([
            'nomCommune' => 'required',
            'departement' => 'required',
            'pays' => 'required',

           ]);

           $communes = Communes::find($request->id);
           $communes->nomCommune = $request->nomCommune;
           $communes->departement = $request->departement;
           $communes->pays = $request->pays;
           $communes->update();

           return redirect('/communes')->with('status', "La communes a été Modifier avec succes");
                                
        }
        public function supprimer_commune($id)
        {
            
            $communes = Communes::find($id);
            $communes->delete();
            return redirect('/communes')->with('status', "La communes a été Modifier avec succes");
        }

        public function templates()
        {
            return view('communes.templates.index');
        }

}
 