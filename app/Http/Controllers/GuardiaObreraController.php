<?php

namespace App\Http\Controllers;

use App\Models\GuardiaObrera;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class GuardiaObreraController extends Controller
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
        //$obreros = GuardiaObrera::all();
       //return view('guardiaObrera.listGuardiaO',['obreros'=>$obreros]);

       $texto=trim($request->get('texto'));

       $obreros = DB::table('guardiasObreras')->select('id','nombre','apellidos','facultad',
         'area','fecha','turno')
         ->where('nombre','LIKE','%'.$texto.'%')
         ->orWhere('apellidos','LIKE','%'.$texto.'%')
         ->orderBy('nombre','asc')
         ->paginate(10);
       //return view('guardiaEstudiantil.listGuardiaE',['estudiantes'=>$estudiantes]);
       return view('guardiaObrera.listGuardiaO',compact('obreros','texto'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('guardiaObrera.newGuardiaO');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $obrero = new GuardiaObrera;

        $obrero->nombre=$request->input('nombre');
        $obrero->apellidos=$request->input('apellidos');
        $obrero->facultad=$request->input('facultad');
        $obrero->area=$request->input('area');
        $obrero->fecha=$request->input('fecha');
        $obrero->turno=$request->input('turno');


       $obrero->save();
       return redirect()->route('guardiaObrera.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\GuardiaObrera  $guardiaObrera
     * @return \Illuminate\Http\Response
     */
    public function show(GuardiaObrera $guardiaObrera)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\GuardiaObrera  $guardiaObrera
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $obrero = GuardiaObrera::FindOrFail($id);
        return view('guardiaObrera.editGuardiaO',compact('obrero'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\GuardiaObrera  $guardiaObrera
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $obrero = GuardiaObrera::FindOrFail($id);
        $obrero->nombre=$request->input('nombre');
        $obrero->apellidos=$request->input('apellidos');
        $obrero->facultad=$request->input('facultad');
        $obrero->area=$request->input('area');
        $obrero->fecha=$request->input('fecha');
        $obrero->turno=$request->input('turno');

        $obrero->save();
        return redirect()->route('guardiaObrera.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\GuardiaObrera  $guardiaObrera
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $obrero = GuardiaObrera::FindOrFail($id);
        $obrero->delete();
        return redirect()->route('guardiaObrera.index');
    }
}
