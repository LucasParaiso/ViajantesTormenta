<?php

namespace App\Http\Controllers;
use App\Models\Item;

use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function store(Request $request, $id)
    {
        $item = new Item;

        $item->ficha_id = $id;
        $item->nome = $request->nome;
        $item->quantidade = $request->quantidade;

        $item->save();
        return redirect('/ficha/' . $id);
    }

    public function update(Request $request)
    {
        $id = $request->id;
        $item_id = $request->item_id;

        Item::findOrFail($item_id)->update($request->all());

        return redirect('/ficha/' . $id);
    }

    public function destroy($id, $item_id)
    {
        Item::findOrFail($item_id)->delete();

        return redirect('/ficha/' . $id);
    }
}
