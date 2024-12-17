<?php

namespace App\Http\Controllers;

use App\Models\Recept;
use Illuminate\Http\Request;

class ReceptController extends Controller
{
    public function index()
    {
        return Recept::all();
    }

    public function store(Request $request)
    {
        $record = new Recept();
        $record->fill($request->all());
        $record->save();
    }

    public function show(string $id){
        $termek = Recept::where('id',$id);
    }
}
