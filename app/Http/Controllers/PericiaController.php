<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pericia;

class PericiaController extends Controller
{
    public function update(Request $request) {
        $id = $request->id;
        $pericia_id = $request->pericia_id;

        Pericia::findOrFail($pericia_id)->update($request->all());
        
        return redirect('/ficha/' . $id);
    }
}