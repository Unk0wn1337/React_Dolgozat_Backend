<?php

namespace App\Http\Controllers;

use App\Models\Kategoria;
use Illuminate\Http\Request;

class KategoriaController extends Controller
{
    public function index()
    {
        return Kategoria::all();
    }

    public function store(Request $request)
    {
        $record = new Kategoria();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id){
        $termek = Kategoria::where('id',$id);
    }


}
