<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rdv;

class RdvController extends Controller
{
    public function addRdv(Request $request) 
    {
        $ordonance = Rdv::create($request->all());
        return response($ordonance, 201);
    }

    public function getRdvs()
    {
        return response()->json(Rdv::all(), 200);
        
    }

    public function getRdvs2()
    {
        $rdvs = Rdv::all();
        return view ('all-rdv', compact('rdvs'));
    }

    public function getRdvId($id)
    {
        $rdv = Rdv::find($id);
        if (is_null($rdv)) {
            return response()->json(['message' => 'Rdv not founded'], 404);
        }
        return response()->json($rdv::find($id), 200);
    }

    public function deleteRdv($id)
    {
        $rdv = Rdv::where('id', $id)->delete();
        return response()->json(['message'=>'Rdv deleted'], 200);

    }

}

