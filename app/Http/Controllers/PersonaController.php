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
        $persona = new Persona();
        $persona->id = $request->id;
        $persona->nombre = $request->nombre;
        $persona->ap_paterno = $request->ap_paterno;
        $persona->ap_materno = $request->ap_materno;
        $persona->celular = $request->celular;
        $persona->dni = $request->dni;
        $persona->pais = $request->pais;
        $persona->departamento = $request->departamento;
        $persona->email = $request->email;
        $persona->fec_nacimiento = $request->fec_nacimiento;
        $persona->est_civil = $request->est_civil;
        $persona->domicilio_actual = $request->domicilio_actual;
        $persona->sexo = $request->sexo;
        $persona->dependiente = $request->dependiente;

        $persona->save();
        echo $persona->id;
        return response()->json($persona->id);
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
    public function me()
    {
        return response()->json(auth()->user());
    }
}
