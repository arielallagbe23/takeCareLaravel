<?php

namespace App\Http\Controllers;
use App\Models\paiementeffectue;
use Illuminate\Http\Request;

class PaiementEffectueController extends Controller
{
    public function getaddPaiementEffectue(Request $request) 
    {
        $paiementeffectue = paiementeffectue::create($request->all());
        return response($paiementeffectue, 201);
    }

    public function allPaiementEffectue()
    {
        $paiementeffectue = paiementeffectue::all();
        return response()->json(paiementeffectue::all(), 200);
    }

    public function deletepaiementEffectue($id)
    {
        $paiementeffectue = paiementeffectue::where('id', $id)->delete();
        return response()->json(['message'=>'Paiement deleted'], 200);
    }

    public function allPaiement2()
    {
        $paiementeffectue = paiementeffectue::all();
        /*$articles = DB::table('articles')
        ->orderBy('name','asc')
        ->get();*/
        return view('all-paiement2',compact('paiementeffectue'));
        //return response()->json($articles, 200);
    
    }

    public function deletepaiementEffectue2($id)
    {
        $paiementeffectue = paiementeffectue::where('id', $id)->delete();
        return back()->with('');

    }
}
