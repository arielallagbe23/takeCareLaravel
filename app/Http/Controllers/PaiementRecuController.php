<?php

namespace App\Http\Controllers;
use App\Models\paiementrecu;
use Illuminate\Http\Request;

class PaiementRecuController extends Controller
{
   
    public function getaddPaiementrecu(Request $request) 
    {
        $paiementrecu = paiementrecu::create($request->all());
        return response($paiementrecu, 201);
    }

    public function allPaiementRecu()
    {
        $paiementrecu = paiementrecu::all();
        return response()->json(paiementrecu::all(), 200);
    }

    public function deletepaiementrecu($id)
    {
        $paiementrecu = paiementrecu::where('id', $id)->delete();
        return response()->json(['message'=>'Paiement deleted'], 200);
    }

    public function allPaiement()
    {
        $paiementrecu = paiementrecu::all();
        /*$articles = DB::table('articles')
        ->orderBy('name','asc')
        ->get();*/
        return view('all-paiement',compact('paiementrecu'));
        //return response()->json($articles, 200);
    
    }
}
