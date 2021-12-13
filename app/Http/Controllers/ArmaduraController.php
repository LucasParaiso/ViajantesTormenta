<?php

namespace App\Http\Controllers;
use App\Models\Armadura;

use Illuminate\Http\Request;

class ArmaduraController extends Controller
{
    public function store(Request $request, $id) {
        $armadura = new Armadura;

        $armadura->ficha_id = $id;
        $armadura->nome = $request->nome;
        $armadura->defesa = $request->defesa;
        $armadura->penalidade = $request->penalidade;

        $armadura->save();
        return redirect('/ficha/' . $id);
    }

    public function update(Request $request) {
        $id = $request->id;
        $armadura_id = $request->armadura_id;

        Armadura::findOrFail($armadura_id)->update($request->all());
        
        return redirect('/ficha/' . $id);
    }

    public function destroy($id, $armadura_id) {        
        Armadura::findOrFail($armadura_id)->delete();

        return redirect('/ficha/' . $id);
    }
}
