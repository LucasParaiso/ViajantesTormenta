<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Atributo;

class AtributosController extends Controller
{
    public function update(Request $request)
    {
        $id = $request->id;

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Forca')
            ->update(['valor' => $request->Forca]);

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Destreza')
            ->update(['valor' => $request->Destreza]);

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Constituicao')
            ->update(['valor' => $request->Constituicao]);

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Inteligencia')
            ->update(['valor' => $request->Inteligencia]);

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Sabedoria')
            ->update(['valor' => $request->Sabedoria]);

        Atributo::where('ficha_id', $id)
            ->where('nome', 'Carisma')
            ->update(['valor' => $request->Carisma]);

        return redirect('/ficha/' . $id);
    }
}
