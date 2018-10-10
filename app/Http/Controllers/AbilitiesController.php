<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Record;
use App\Program;
use App\AbilitiesModel;
use App\Http\Requests\RecordRequest;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\AbilitiesRequest;
use App\Exports\AbilitiesExport;
use Auth;

class AbilitiesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        if(Auth::user()->role=='Admin') {
            return view('abilities.index')->with('abilities', AbilitiesModel::paginate(10)->setPath('abilities'));
        }else {
                return view('/home');         
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if(Auth::user()->role=='Admin') {
            $programs = Program::all();
            return view('abilities.create', compact('programs'));
        }else {
                return view('/home');         
            }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AbilitiesRequest $request)
    {
      $abilir = new AbilitiesModel;
      $abilir->name         = $request->input('name');
      $abilir->program_id   = $request->input('program_id');
      $abilir->durationHour = $request->input('durationHour');

      if($abilir->save()){
          return redirect('abilities')->with('status', 'La competencia '.$abilir->name.' se guardó con Exito.');
      };
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        if(Auth::user()->role=='Admin') {
            return view('abilities.show')->with('abilities', AbilitiesModel::findOrFail($id));
        }else {
                return view('/home');         
            }   
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(Auth::user()->role=='Admin') {
            return view('abilities.edit')
            ->with('abilities', AbilitiesModel::findOrFail($id))
            ->with('programs', Program::all());
        }else {
                return view('/home');         
            }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $abilir=AbilitiesModel::find($id);
        $abilir->name         = $request->input('name');
        $abilir->program_id      = $request->input('program_id');
        $abilir->durationHour        = $request->input('durationHour');

      if($abilir->save()){
          return redirect('abilities')->with('status', 'La información de la Competencia '.$abilir->name.' se actualizó con Exito.');
      };
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $abilir = AbilitiesModel::findOrFail($id);
        if($abilir->delete()){
            return redirect('abilities')
                ->with('status', 'La competencia '.$abilir->name.' se eliminó con éxito.');
        };
    }
    // Generate PDF Report
    public function pdf(){

        $abilities = AbilitiesModel::all();
        $pdf = \PDF::loadView('abilities.pdf', compact('abilities'));
        return $pdf->download('abilities.pdf');
    }
    // Generate EXCEL Report
    public function excel(){
        return \Excel::download(new AbilitiesExport,'abilities.xlsx');
    }
    //buscar
    public function search(Request $request){
        $abilities=AbilitiesModel::name($request->input('name'))->orderBy('id','ASC')->paginate(10)->setPath('abilities');
        return view('abilities.index')->with('abilities',$abilities);
    }
    public function ajaxsearch(Request $request){
        $abilities = AbilitiesModel::name($request->input('name'))->orderBy('id', 'ASC')->paginate(10)->setPath('abilities');
    return view('abilities.ajaxs')->with('abilities',$abilities);
    }
}
