<?php

namespace App\Http\Controllers;

use App\Models\GuardiaEstudiantil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuardiaEstudiantilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $texto=trim($request->get('texto'));

       $estudiantes = DB::table('guardiasEstudiantiles')->select('id','nombre','apellidos','facultad',
        'grupo','fecha','turno')
        ->where('nombre','LIKE','%'.$texto.'%')
        ->orWhere('apellidos','LIKE','%'.$texto.'%')
        ->orderBy('nombre','asc')
        ->paginate(10);
       //return view('guardiaEstudiantil.listGuardiaE',['estudiantes'=>$estudiantes]);
       return view('guardiaEstudiantil.listGuardiaE',compact('estudiantes','texto'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('guardiaEstudiantil.newGuardiaE');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $estudiante = new GuardiaEstudiantil;

        $estudiante->nombre=$request->input('nombre');
        $estudiante->apellidos=$request->input('apellidos');
        $estudiante->facultad=$request->input('facultad');
        $estudiante->grupo=$request->input('grupo');
        $estudiante->fecha=$request->input('fecha');
        $estudiante->turno=$request->input('turno');


       $estudiante->save();
       return redirect()->route('guardiaEstudiantil.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuardiaEstudiantil  $guardiaEstudiantil
     * @return \Illuminate\Http\Response
     */
    public function show(GuardiaEstudiantil $guardiaEstudiantil)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuardiaEstudiantil  $guardiaEstudiantil
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $estudiante = GuardiaEstudiantil::FindOrFail($id);
        return view('guardiaEstudiantil.editGuardiaE',compact('estudiante'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuardiaEstudiantil  $guardiaEstudiantil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $estudiante = GuardiaEstudiantil::FindOrFail($id);
        $estudiante->nombre=$request->input('nombre');
        $estudiante->apellidos=$request->input('apellidos');
        $estudiante->facultad=$request->input('facultad');
        $estudiante->grupo=$request->input('grupo');
        $estudiante->fecha=$request->input('fecha');
        $estudiante->turno=$request->input('turno');

        $estudiante->save();
        return redirect()->route('guardiaEstudiantil.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuardiaEstudiantil  $guardiaEstudiantil
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $estudiante = GuardiaEstudiantil::FindOrFail($id);
        $estudiante->delete();
        return redirect()->route('guardiaEstudiantil.index');
    }
}
