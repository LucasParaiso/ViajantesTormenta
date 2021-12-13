<?php

namespace App\Http\Controllers;
use App\Models\Magia;

use Illuminate\Http\Request;

class MagiaController extends Controller
{
    public function store(Request $request, $id)
    {
        $magia = new Magia;

        $magia->ficha_id = $id;
        $magia->nome = $request->nome;
        $magia->circulo = $request->circulo;
        $magia->execucao = $request->execucao;
        $magia->alcance = $request->alcance;
        $magia->alvo = $request->alvo;
        $magia->area = $request->area;
        $magia->duracao = $request->duracao;
        $magia->resistencia = $request->resistencia;
        $magia->descricao = $request->descricao;

        $magia->save();
        return redirect('/ficha/' . $id);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $magia_id = $request->magia_id;

        Magia::findOrFail($magia_id)->update($request->all());

        return redirect('/ficha/' . $id);
    }

    public function destroy($id, $magia_id)
    {
        Magia::findOrFail($magia_id)->delete();

        return redirect('/ficha/' . $id);
    }
}
