<?php

namespace App\Http\Controllers;

use App\Models\ordonance;
use Illuminate\Http\Request;

class OrdonanceController extends Controller
{
    public function allOrdonances()
    {
        $ordonances = Ordonance::all();
        return view ('all-ordonances', compact('ordonances'));
    }   

    public function getOrdonances()
    {
        return response()->json(Ordonance::all(), 200);

    }

    public function getOrdonancesId($id)
    {
        $ordonance = Ordonance::find($id);
        if (is_null($ordonance)) {
            return response()->json(['message' => 'Ordonance not founded'], 404);
        }
        return response()->json($ordonance::find($id), 200);
    }

    public function addOrdonance(Request $request) 
    {
        $ordonance = Ordonance::create($request->all());
        return response($ordonance, 201);
    }

    public function updateOrdonance(Request $request, $id)
    {
        $ordonance = Ordonance::find($id);
        if(is_null($ordonance)) {
            return response()->json(['message' => 'Ordonance not founded'], 404);
        }
        $ordonance->name = ($request->has('name')) ? $request->get('name') : $ordonance->name; 
        $ordonance->surname = ($request->has('surname')) ? $request->get('surname') : $ordonance->surname;
        $ordonance->adressemail = ($request->has('adressemail')) ? $request->get('adressemail') : $ordonance->adressemail;
        $ordonance->telephone = ($request->has('telephone')) ? $request->get('telephone') : $ordonance->telephone;
        $ordonance->contenu = ($request->has('contenu')) ? $request->get('contenu') : $ordonance->contenu;
        $ordonance->save();
        return response()->json(['message'=>'employee update', 200]);
    }

    /*public function deleteOrdonance($id)
    {
        $ordonance = Ordonance::where('id', $id)->delete();
        return response()->json(['message'=>'Ordonance deleted'], 200);

    }*/

    public function deleteOrdonance2($id)
    {
        $ordonance = Ordonance::where('id', $id)->delete();
        return back()->with('ordonance_deleted','Ordonance deleted successfully !');        
    }

    
    

}
