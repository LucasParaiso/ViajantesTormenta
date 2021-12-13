<?php

namespace App\Http\Controllers;
use App\Models\Arma;

use Illuminate\Http\Request;

class ArmaController extends Controller
{
    public function store(Request $request, $id) {
        $arma = new Arma;

        $arma->ficha_id = $id;
        $arma->nome = $request->nome;
        $arma->atributo = $request->atributo;
        $arma->pericia = $request->pericia;
        $arma->ataque_bonus = $request->ataque_bonus;
        $arma->dano_bonus = $request->dano_bonus;
        $arma->dano = $request->dano;
        $arma->critico = $request->critico;

        $arma->save();
        return redirect('/ficha/' . $id);
    }

    public function update(Request $request) {
        $id = $request->id;
        $arma_id = $request->arma_id;

        Arma::findOrFail($arma_id)->update($request->all());
        
        return redirect('/ficha/' . $id);
    }

    public function destroy($id, $arma_id) {        
        Arma::findOrFail($arma_id)->delete();

        return redirect('/ficha/' . $id);
    }
}
