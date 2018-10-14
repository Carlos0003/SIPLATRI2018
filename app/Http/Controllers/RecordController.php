<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ClassroomRequest;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\RecordRequest;
use App\Http\Requests\AbilitiesRequest;
use App\User;
use App\Classroom;
use App\Program;
use App\Record;
use App\AbilitiesModel;
use App\Municipalities;
use Auth;
use App\Exports\RecordsExport;

class RecordController extends Controller
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
          return view('records.index')->with('record', Record::paginate(10)->setPath('record'));
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
            $programsname = Program::all();
            $managers = User::all();
            $classrooms = Classroom::all();
            $municipalities = Municipalities::all();
            $abilities=AbilitiesModel::all();
            return view('records.create', compact('programsname', 'managers', 'classrooms', 'municipalities' ,'municipalities'));
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
    public function store(Request $request)
    {
        $record = new Record;
        $record->number                    = $request->input('number');
        $record->program_id                = $request->input('program_id');
        $record->modalidad                 = $request->input('modalidad');
        $record->trimestreActual           = $request->input('trimestreActual');
        $record->fecha_inicio              = $request->input('fecha_inicio');
        $record->fecha_fin                 = $request->input('fecha_fin');
        $record->horasProgramadas          = $request->input('horasProgramadas');
        $record->user_id                   = $request->input('user_id');
        $record->municipality_id           = $request->input('municipality_id');
        $record->hora_inicio_PLunes        = $request->input('hora_inicio_PLunes');
        $record->hora_fin_PLunes           = $request->input('hora_fin_PLunes');
        $record->hora_inicio_PMartes       = $request->input('hora_inicio_PMartes');
        $record->hora_fin_PMartes          = $request->input('hora_fin_PMartes');
        $record->hora_inicio_PMiercoles    = $request->input('hora_inicio_PMiercoles');
        $record->hora_fin_PMiercoles       = $request->input('hora_fin_PMiercoles');
        $record->hora_inicio_PJueves       = $request->input('hora_inicio_PJueves');
        $record->hora_fin_PJueves          = $request->input('hora_fin_PJueves');
        $record->hora_inicio_PViernes      = $request->input('hora_inicio_PViernes');
        $record->hora_fin_PViernes         = $request->input('hora_fin_PViernes');
        $record->hora_inicio_PSabado       = $request->input('hora_inicio_PSabado');
        $record->hora_fin_PSabado          = $request->input('hora_fin_PSabado');
        $record->hora_inicio_SLunes        = $request->input('hora_inicio_SLunes');
        $record->hora_fin_SLunes           = $request->input('hora_fin_SLunes');
        $record->hora_inicio_SMartes       = $request->input('hora_inicio_SMartes');
        $record->hora_fin_SMartes          = $request->input('hora_fin_SMartes');
        $record->hora_inicio_SMiercoles    = $request->input('hora_inicio_SMiercoles');
        $record->hora_fin_SMiercoles       = $request->input('hora_fin_SMiercoles');
        $record->hora_inicio_SJueves       = $request->input('hora_inicio_SJueves');
        $record->hora_fin_SJueves          = $request->input('hora_fin_SJueves');
        $record->hora_inicio_SViernes      = $request->input('hora_inicio_SViernes');
        $record->hora_fin_SViernes         = $request->input('hora_fin_SViernes');
        $record->hora_inicio_SSabado       = $request->input('hora_inicio_SSabado');
        $record->hora_fin_SSabado          = $request->input('hora_fin_SSabado');
        $record->hora_inicio_TLunes        = $request->input('hora_inicio_TLunes');
        $record->hora_fin_TLunes           = $request->input('hora_fin_TLunes');
        $record->hora_inicio_TMartes       = $request->input('hora_inicio_TMartes');
        $record->hora_fin_TMartes          = $request->input('hora_fin_TMartes');
        $record->hora_inicio_TMiercoles    = $request->input('hora_inicio_TMiercoles');
        $record->hora_fin_TMiercoles       = $request->input('hora_fin_TMiercoles');
        $record->hora_inicio_TJueves       = $request->input('hora_inicio_TJueves');
        $record->hora_fin_TJueves          = $request->input('hora_fin_TJueves');
        $record->hora_inicio_TViernes      = $request->input('hora_inicio_TViernes');
        $record->hora_fin_TViernes         = $request->input('hora_fin_TViernes');
        $record->abilities_PLunes_id       = $request->input('abilities_PLunes_id');
        $record->abilities_PMartes_id      = $request->input('abilities_PMartes_id');
        $record->abilities_PMiercoles_id   = $request->input('abilities_PMiercoles_id');
        $record->abilities_PJueves_id      = $request->input('abilities_PJueves_id');
        $record->abilities_PViernes_id     = $request->input('abilities_PViernes_id');
        $record->abilities_PSabado_id      = $request->input('abilities_PSabado_id');
        $record->abilities_SLunes_id       = $request->input('abilities_SLunes_id');
        $record->abilities_SMartes_id      = $request->input('abilities_SMartes_id');
        $record->abilities_SMiercoles_id   = $request->input('abilities_SMiercoles_id');
        $record->abilities_SJueves_id      = $request->input('abilities_SJueves_id');
        $record->abilities_SViernes_id     = $request->input('abilities_SViernes_id');
        $record->abilities_SSabado_id      = $request->input('abilities_SSabado_id');
        $record->abilities_TLunes_id       = $request->input('abilities_TLunes_id');
        $record->abilities_TMartes_id      = $request->input('abilities_TMartes_id');
        $record->abilities_TMiercoles_id   = $request->input('abilities_TMiercoles_id');
        $record->abilities_TJueves_id      = $request->input('abilities_TJueves_id');
        $record->abilities_TViernes_id     = $request->input('abilities_TViernes_id');
        $record->classrooms_PLunes_id      = $request->input('classrooms_PLunes_id');
        $record->classrooms_PMartes_id     = $request->input('classrooms_PMartes_id');
        $record->classrooms_PMiercoles_id  = $request->input('classrooms_PMiercoles_id');
        $record->classrooms_PJueves_id     = $request->input('classrooms_PJueves_id');
        $record->classrooms_PViernes_id    = $request->input('classrooms_PViernes_id');
        $record->classrooms_PSabado_id     = $request->input('classrooms_PSabado_id');
        $record->classroom_SLunes_id       = $request->input('classroom_SLunes_id');
        $record->classroom_SMartes_id      = $request->input('classroom_SMartes_id');
        $record->classroom_SMiercoles_id   = $request->input('classroom_SMiercoles_id');
        $record->classroom_SJueves_id      = $request->input('classroom_SJueves_id');
        $record->classroom_SViernes_id     = $request->input('classroom_SViernes_id');
        $record->classroom_SSabado_id      = $request->input('classroom_SSabado_id');
        $record->classroom_TLunes_id       = $request->input('classroom_TLunes_id');
        $record->classroom_TMartes_id      = $request->input('classroom_TMartes_id');
        $record->classroom_TMiercoles_id   = $request->input('classroom_TMiercoles_id');
        $record->classroom_TJueves_id      = $request->input('classroom_TJueves_id');
        $record->classroom_TViernes_id     = $request->input('classroom_TViernes_id');
        $record->instructor_PLunes_id      = $request->input('instructor_PLunes_id');
        $record->instructor_PMartes_id     = $request->input('instructor_PMartes_id');
        $record->instructor_PMiercoles_id  = $request->input('instructor_PMiercoles_id');
        $record->instructor_PJueves_id     = $request->input('instructor_PJueves_id');
        $record->instructor_PViernes_id    = $request->input('instructor_PViernes_id');
        $record->instructor_PSabado_id     = $request->input('instructor_PSabado_id');
        $record->instructor_SLunes_id      = $request->input('instructor_SLunes_id');
        $record->instructor_SMartes_id     = $request->input('instructor_SMartes_id');
        $record->instructor_SMiercoles_id  = $request->input('instructor_SMiercoles_id');
        $record->instructor_SJueves_id     = $request->input('instructor_SJueves_id');
        $record->instructor_SViernes_id    = $request->input('instructor_SViernes_id');
        $record->instructor_SSabado_id     = $request->input('instructor_SSabado_id');
        $record->instructor_TLunes_id      = $request->input('instructor_TLunes_id');
        $record->instructor_TMartes_id     = $request->input('instructor_TMartes_id');
        $record->instructor_TMiercoles_id  = $request->input('instructor_TMiercoles_id');
        $record->instructor_TJueves_id     = $request->input('instructor_TJueves_id');
        $record->instructor_TViernes_id    = $request->input('instructor_TViernes_id');

      if($record->save()){
          return redirect('record')->with('status', 'La ficha de formación '.$record->number.'-'.$record->nameprogram->name.' se guardo con Exito.');
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
            $record = Record::find($id);
            return view('records.show')->with('record', $record);
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
            $record = Record::find($id);
            return view('records.edit')->with('record', Record::findOrFail($id))
            ->with('programsname', Program::all())
            ->with('managers', User::all())
            ->with('classrooms', Classroom::all())
            ->with('abilities', AbilitiesModel::all());
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
        $record=record::find($id);
        $record->number                    = $request->input('number');
        $record->program_id                = $request->input('program_id');
        $record->modalidad                 = $request->input('modalidad');
        $record->trimestreActual           = $request->input('trimestreActual');
        $record->fecha_inicio              = $request->input('fecha_inicio');
        $record->fecha_fin                 = $request->input('fecha_fin');
        $record->horasProgramadas          = $request->input('horasProgramadas');
        $record->user_id                   = $request->input('user_id');
        $record->municipality_id           = $request->input('municipality_id');
        $record->hora_inicio_PLunes        = $request->input('hora_inicio_PLunes');
        $record->hora_fin_PLunes           = $request->input('hora_fin_PLunes');
        $record->hora_inicio_PMartes       = $request->input('hora_inicio_PMartes');
        $record->hora_fin_PMartes          = $request->input('hora_fin_PMartes');
        $record->hora_inicio_PMiercoles    = $request->input('hora_inicio_PMiercoles');
        $record->hora_fin_PMiercoles       = $request->input('hora_fin_PMiercoles');
        $record->hora_inicio_PJueves       = $request->input('hora_inicio_PJueves');
        $record->hora_fin_PJueves          = $request->input('hora_fin_PJueves');
        $record->hora_inicio_PViernes      = $request->input('hora_inicio_PViernes');
        $record->hora_fin_PViernes         = $request->input('hora_fin_PViernes');
        $record->hora_inicio_PSabado       = $request->input('hora_inicio_PSabado');
        $record->hora_fin_PSabado          = $request->input('hora_fin_PSabado');
        $record->hora_inicio_SLunes        = $request->input('hora_inicio_SLunes');
        $record->hora_fin_SLunes           = $request->input('hora_fin_SLunes');
        $record->hora_inicio_SMartes       = $request->input('hora_inicio_SMartes');
        $record->hora_fin_SMartes          = $request->input('hora_fin_SMartes');
        $record->hora_inicio_SMiercoles    = $request->input('hora_inicio_SMiercoles');
        $record->hora_fin_SMiercoles       = $request->input('hora_fin_SMiercoles');
        $record->hora_inicio_SJueves       = $request->input('hora_inicio_SJueves');
        $record->hora_fin_SJueves          = $request->input('hora_fin_SJueves');
        $record->hora_inicio_SViernes      = $request->input('hora_inicio_SViernes');
        $record->hora_fin_SViernes         = $request->input('hora_fin_SViernes');
        $record->hora_inicio_SSabado       = $request->input('hora_inicio_SSabado');
        $record->hora_fin_SSabado          = $request->input('hora_fin_SSabado');
        $record->hora_inicio_TLunes        = $request->input('hora_inicio_TLunes');
        $record->hora_fin_TLunes           = $request->input('hora_fin_TLunes');
        $record->hora_inicio_TMartes       = $request->input('hora_inicio_TMartes');
        $record->hora_fin_TMartes          = $request->input('hora_fin_TMartes');
        $record->hora_inicio_TMiercoles    = $request->input('hora_inicio_TMiercoles');
        $record->hora_fin_TMiercoles       = $request->input('hora_fin_TMiercoles');
        $record->hora_inicio_TJueves       = $request->input('hora_inicio_TJueves');
        $record->hora_fin_TJueves          = $request->input('hora_fin_TJueves');
        $record->hora_inicio_TViernes      = $request->input('hora_inicio_TViernes');
        $record->hora_fin_TViernes         = $request->input('hora_fin_TViernes');
        $record->abilities_PLunes_id       = $request->input('abilities_PLunes_id');
        $record->abilities_PMartes_id      = $request->input('abilities_PMartes_id');
        $record->abilities_PMiercoles_id   = $request->input('abilities_PMiercoles_id');
        $record->abilities_PJueves_id      = $request->input('abilities_PJueves_id');
        $record->abilities_PViernes_id     = $request->input('abilities_PViernes_id');
        $record->abilities_PSabado_id      = $request->input('abilities_PSabado_id');
        $record->abilities_SLunes_id       = $request->input('abilities_SLunes_id');
        $record->abilities_SMartes_id      = $request->input('abilities_SMartes_id');
        $record->abilities_SMiercoles_id   = $request->input('abilities_SMiercoles_id');
        $record->abilities_SJueves_id      = $request->input('abilities_SJueves_id');
        $record->abilities_SViernes_id     = $request->input('abilities_SViernes_id');
        $record->abilities_SSabado_id      = $request->input('abilities_SSabado_id');
        $record->abilities_TLunes_id       = $request->input('abilities_TLunes_id');
        $record->abilities_TMartes_id      = $request->input('abilities_TMartes_id');
        $record->abilities_TMiercoles_id   = $request->input('abilities_TMiercoles_id');
        $record->abilities_TJueves_id      = $request->input('abilities_TJueves_id');
        $record->abilities_TViernes_id     = $request->input('abilities_TViernes_id');
        $record->classrooms_PLunes_id      = $request->input('classrooms_PLunes_id');
        $record->classrooms_PMartes_id     = $request->input('classrooms_PMartes_id');
        $record->classrooms_PMiercoles_id  = $request->input('classrooms_PMiercoles_id');
        $record->classrooms_PJueves_id     = $request->input('classrooms_PJueves_id');
        $record->classrooms_PViernes_id    = $request->input('classrooms_PViernes_id');
        $record->classrooms_PSabado_id     = $request->input('classrooms_PSabado_id');
        $record->classroom_SLunes_id       = $request->input('classroom_SLunes_id');
        $record->classroom_SMartes_id      = $request->input('classroom_SMartes_id');
        $record->classroom_SMiercoles_id   = $request->input('classroom_SMiercoles_id');
        $record->classroom_SJueves_id      = $request->input('classroom_SJueves_id');
        $record->classroom_SViernes_id     = $request->input('classroom_SViernes_id');
        $record->classroom_SSabado_id      = $request->input('classroom_SSabado_id');
        $record->classroom_TLunes_id       = $request->input('classroom_TLunes_id');
        $record->classroom_TMartes_id      = $request->input('classroom_TMartes_id');
        $record->classroom_TMiercoles_id   = $request->input('classroom_TMiercoles_id');
        $record->classroom_TJueves_id      = $request->input('classroom_TJueves_id');
        $record->classroom_TViernes_id     = $request->input('classroom_TViernes_id');
        $record->instructor_PLunes_id      = $request->input('instructor_PLunes_id');
        $record->instructor_PMartes_id     = $request->input('instructor_PMartes_id');
        $record->instructor_PMiercoles_id  = $request->input('instructor_PMiercoles_id');
        $record->instructor_PJueves_id     = $request->input('instructor_PJueves_id');
        $record->instructor_PViernes_id    = $request->input('instructor_PViernes_id');
        $record->instructor_PSabado_id     = $request->input('instructor_PSabado_id');
        $record->instructor_SLunes_id      = $request->input('instructor_SLunes_id');
        $record->instructor_SMartes_id     = $request->input('instructor_SMartes_id');
        $record->instructor_SMiercoles_id  = $request->input('instructor_SMiercoles_id');
        $record->instructor_SJueves_id     = $request->input('instructor_SJueves_id');
        $record->instructor_SViernes_id    = $request->input('instructor_SViernes_id');
        $record->instructor_SSabado_id     = $request->input('instructor_SSabado_id');
        $record->instructor_TLunes_id      = $request->input('instructor_TLunes_id');
        $record->instructor_TMartes_id     = $request->input('instructor_TMartes_id');
        $record->instructor_TMiercoles_id  = $request->input('instructor_TMiercoles_id');
        $record->instructor_TJueves_id     = $request->input('instructor_TJueves_id');
        $record->instructor_TViernes_id    = $request->input('instructor_TViernes_id');

      if($record->save()){
          return redirect('record')->with('status', 'La ficha de formación '.$record->program_id.'-'.$record->program->name.' se editó con Exito.');
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
        $record = record::find($id);
        if($record->delete()){
            return redirect('record')
                ->with('status', 'La Ficha '.$record->idrecord.'-'.$record->program->name.' se eliminó con éxito.');
        };
    }
    // Generate PDF Report
    public function pdf(){

        $records = Record::all();
        $pdf = \PDF::loadView('records.pdf', compact('records'));
        return $pdf->download('records.pdf');
    }
    // Generate EXCEL Report
    public function excel(){
        return \Excel::download(new UsersExport,'users.xlsx');
    }
    //buscar
    public function search(Request $request){
        $record=Record::fullname($request->input('name'))->orderBy('id','ASC')->paginate(10)->setPath('record');
        return view('records.index')->with('record',$record);
    }
    public function ajaxsearch(Request $request){
        $record = Record::fullname($request->input('name'))->orderBy('id', 'ASC')->paginate(10)->setPath('record');
    return view('records.ajaxs')->with('record',$record);
    }

    public function programaFormacionSeleccionado(Request $request){
        $data = Program::select('type', 'timeduration')->where('id',$request->id)->first();
        return response()->json($data);
    }

    public function competencias(Request $request){
        $data = AbilitiesModel::select('id', 'name')->where('program_id',$request->id)->get();
        return response()->json($data);
    }
}