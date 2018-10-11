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
            return view('records.create', compact('programsname', 'managers', 'classrooms', 'municipalities'));
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
        $record->number       = $request->input('idFicha');
        $record->trimestreActual     = $request->input('trimestreActual');
        $record->horasProgramadas   = $request->input('hProgramadas');
        $record->fecha_inicio = $request->input('feinicio');
        $record->fecha_fin    = $request->input('fefin');
        $record->hora_inicio      = $request->input('hInicio');
        $record->hora_fin     = $request->input('hFin');
        $record->program_id = $request->input('nombrePorgrama');
        $record->user_id   = $request->input('gestor');
        $record->municipality_id      = $request->input('municipio');
        $record->abilities_lunes_id        = $request->input('abilities_lunes_id');
        $record->classrooms_lunes_id         = $request->input('ambienteLunes');
        $record->abilities_martes_id   = $request->input('abilities_martes_id');
        $record->classrooms_martes_id        = $request->input('ambienteMartes');
        $record->abilities_miercoles_id   = $request->input('abilities_miercoles_id');
        $record->classrooms_miercoles_id        = $request->input('ambienteMiercoles');
        $record->abilities_jueves_id   = $request->input('abilities_jueves_id');
        $record->classrooms_jueves_id        = $request->input('ambienteJueves');
        $record->abilities_viernes_id   = $request->input('abilities_viernes_id');
        $record->classrooms_viernes_id        = $request->input('ambienteViernes');
        $record->abilities_sabado_id   = $request->input('abilities_sabado_id');;
        $record->classrooms_sabado_id        = $request->input('ambienteSabado');
        $record->instructor_lunes_id        = $request->input('instructorLunes');
        $record->instructor_martes_id        = $request->input('instructorMartes');
        $record->instructor_miercoles_id        = $request->input('instructorMiercoles');
        $record->instructor_jueves_id        = $request->input('instructorJueves');
        $record->instructor_viernes_id        = $request->input('instructorViernes');
        $record->instructor_sabado_id        = $request->input('instructorSabado');



      if($record->save()){
          return redirect('record')->with('status', 'La ficha de formación '.$record->idrecord.'-'.$record->program->name.' se guardo con Exito.');
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
            ->with('classrooms', Classroom::all());
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
        $record->idrecord       = $request->input('idrecord');
        $record->program_id     = $request->input('program_id');
        $record->totalquarter   = $request->input('totalquarter');
        $record->currentquarter = $request->input('currentquarter');
        $record->programtype    = $request->input('programtype');
        $record->startdate      = $request->input('startdate');
        $record->endingdate     = $request->input('endingdate');
        $record->scheduledhours = $request->input('scheduledhours');
        $record->groupmanager   = $request->input('groupmanager');
        $record->municipality   = $request->input('municipality');
        $record->starttime      = $request->input('starttime');
        $record->endtime        = $request->input('endtime');
        $record->matter         = $request->input('matter');
        $record->classroom_id   = $request->input('classroom_id');
        $record->user_id        = $request->input('user_id');

      if($record->save()){
          return redirect('record')->with('status', 'La ficha de formación '.$record->idrecord.'-'.$record->program->name.' se editó con Exito.');
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