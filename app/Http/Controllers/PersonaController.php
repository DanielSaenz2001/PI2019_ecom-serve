<?php

namespace App\Http\Controllers;

use App\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    
    public function index()
    {
        $persona = Persona::all(); 
        return response()->json($persona);
    }

    public function create(Request $request)
    {
        persona::create($request-> all());
        return response()->json(['success'=> true]);
    }
    public function show($id)
    {
        $persona= Persona::find($id);
        return response()->json($persona);
    }
    public function update(Request $request, $id)
    {
        persona::findOrFail($id)->update($request->all());
    }
    public function destroy($id)
    {
        persona::findOrFail($id)->delete();
    }
}
