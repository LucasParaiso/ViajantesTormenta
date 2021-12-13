<?php

namespace App\Http\Controllers;
use App\Models\Poder;

use Illuminate\Http\Request;

class PoderController extends Controller
{
    public function store(Request $request, $id)
    {
        $poder = new Poder;

        $poder->ficha_id = $id;
        $poder->nome = $request->nome;
        $poder->tipo = $request->tipo;
        $poder->descricao = $request->descricao;

        $poder->save();
        return redirect('/ficha/' . $id);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $poder_id = $request->poder_id;

        Poder::findOrFail($poder_id)->update($request->all());

        return redirect('/ficha/' . $id);
    }

    public function destroy($id, $poder_id)
    {
        Poder::findOrFail($poder_id)->delete();

        return redirect('/ficha/' . $id);
    }
}
