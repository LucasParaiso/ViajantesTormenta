<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ficha;
use App\Models\Atributo;
use App\Models\Pericia;

class FichaController extends Controller
{ 
    public function index() {
        $fichas = Ficha::all();
        
        return view('welcome', ['fichas' => $fichas]);
    }

    public function store(Request $request) {
        $ficha = new Ficha;

        $ficha->nome = $request->nome;
        $ficha->imagem_personagem = $request->imagem_personagem;
        $ficha->imagem_pet = $request->imagem_pet;

        $ficha->save();

        $nomesAtributos = ['Forca', 'Destreza', 'Constituicao', 'Inteligencia', 'Sabedoria', 'Carisma'];
        foreach($nomesAtributos as $nome) {
            $atributo = new Atributo;
            $atributo->ficha_id = $ficha->id;
            $atributo->nome = $nome;
            $atributo->save();
        }

        $nomesPericias = array(
            'Acrobacia' => 'Destreza',
            'Adestramento' => 'Carisma',
            'Atletismo' => 'Forca',
            'Atuacao' => 'Carisma',
            'Cavalgar' => 'Destreza',
            'Conhecimento' => 'Inteligencia',
            'Cura' => 'Sabedoria',
            'Diplomacia' => 'Carisma',
            'Fortitude' => 'Constituicao',
            'Furtividade' => 'Destreza',
            'Guerra' => 'Inteligencia',
            'Iniciativa' => 'Destreza',
            'Intimidacao' => 'Carisma',
            'Intuicao' => 'Sabedoria',
            'Investigacao' => 'Inteligencia',
            'Jogatina' => 'Carisma',
            'Ladinagem' => 'Destreza',
            'Luta' => 'Forca',
            'Misticismo' => 'Inteligencia',
            'Nobreza' => 'Inteligencia',
            'Oficios' => 'Inteligencia',
            'Percepção' => 'Sabedoria',
            'Pilotagem' => 'Destreza',
            'Pontaria' => 'Destreza',
            'Reflexos' => 'Destreza',
            'Religião' => 'Sabedoria',
            'Sobrevivência' => 'Sabedoria',
            'Vontade' => 'Sabedoria',
        );
        foreach($nomesPericias as $key => $value) {
            $pericia = new Pericia;
            $pericia->ficha_id = $ficha->id;
            $pericia->nome = $key;
            $pericia->atributo = $value;
            $pericia->save();
        }

        return redirect('/');
    }

    public function show($id) {
        $ficha = Ficha::findOrFail($id);

        return view('show', ['ficha' => $ficha]);
    }

    public function destroy($id) {
        Ficha::findOrFail($id)->delete();

        return redirect('/');
    }

    public function update(Request $request) {
        $id = $request->id;
        Ficha::findOrFail($id)->update($request->all());

        return redirect('/ficha/' . $id);
    }
}
