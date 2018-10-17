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
use App\Exports\RecordsExport;
use Auth;

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

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
        $record->classroom_SLunes_id       = $request->input('classrooms_SLunes_id');
        $record->classroom_SMartes_id      = $request->input('classrooms_SMartes_id');
        $record->classroom_SMiercoles_id   = $request->input('classrooms_SMiercoles_id');
        $record->classroom_SJueves_id      = $request->input('classrooms_SJueves_id');
        $record->classroom_SViernes_id     = $request->input('classrooms_SViernes_id');
        $record->classroom_SSabado_id      = $request->input('classrooms_SSabado_id');
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

        // ASIGNACIÓN DE HORAS

// //horas asignadas clase 1 lunes
        if ($request->input('instructor_PLunes_id') != '') {
            $user = User::findOrFail($request->input('instructor_PLunes_id'));
            $horas = $user->cumulativeHour;
            $conteo = $horas + $request->input('horas_InstructorPLUNES');
            $user->cumulativeHour = $conteo;
            $user->save();
        }
       
        

// //horas asignadas clase 2 lunes
        if ($request->input('instructor_SLunes_id') != '') {
            $user3 = User::findOrFail($request->input('instructor_SLunes_id'));
            $horas3 = $user3->cumulativeHour;
            $conteo = $horas3 + $request->input('horas_InstructorSLunes');
            $user3->cumulativeHour = $conteo;
            $user3->save();
        }
        

// //horas asignadas clase 3 lunes
        if ($request->input('instructor_TLunes_id') != '') {    
            $user2 = User::findOrFail($request->input('instructor_TLunes_id'));
            $horas2 = $user2->cumulativeHour;
            $conteo = $horas2 + $request->input('horas_InstructorTLunes');
            $user2->cumulativeHour = $conteo;
            $user2->save();
        }
// //horas asignadas clases martes
        if ($request->input('instructor_PMartes_id') != '') {    
            $user1 = User::findOrFail($request->input('instructor_PMartes_id'));
            $horas1 = $user1->cumulativeHour;
            $conteo = $horas1 + $request->input('horas_InstructorPMartes');
            $user1->cumulativeHour = $conteo;
            $user1->save();
        }
        if ($request->input('instructor_SMartes_id') != '') {
            $user4 = User::findOrFail($request->input('instructor_SMartes_id'));
            $horas4 = $user4->cumulativeHour;
            $conteo = $horas4 + $request->input('horas_InstructorSMartes');
            $user4->cumulativeHour = $conteo;
            $user4->save();
        }
        if ($request->input('instructor_TMartes_id') != '') {
            $user5 = User::findOrFail($request->input('instructor_TMartes_id'));
            $horas5 = $user5->cumulativeHour;
            $conteo = $horas5 + $request->input('horas_InstructorTMartes');
            $user5->cumulativeHour = $conteo;
            $user5->save();
        }
// //horas asignadas clases Miercoles
        if ($request->input('instructor_PMiercoles_id') != '') {
            $user6 = User::findOrFail($request->input('instructor_PMiercoles_id'));
            $horas6 = $user6->cumulativeHour;
            $conteo = $horas6 + $request->input('horas_InstructorPMiercoles');
            $user6->cumulativeHour = $conteo;
            $user6->save();
        }
        if ($request->input('instructor_SMiercoles_id') != '') {
            $user7 = User::findOrFail($request->input('instructor_SMiercoles_id'));
            $horas7 = $user7->cumulativeHour;
            $conteo = $horas7 + $request->input('horas_InstructorSMiercoles');
            $user7->cumulativeHour = $conteo;
            $user7->save();
        }
        if ($request->input('instructor_TMiercoles_id') != '') {
            $user8 = User::findOrFail($request->input('instructor_TMiercoles_id'));
            $horas8 = $user8->cumulativeHour;
            $conteo = $horas8 + $request->input('horas_InstructorTMiercoles');
            $user8->cumulativeHour = $conteo;
            $user8->save();
        }
// //horas asignadas clases Jueves
        if ($request->input('instructor_PJueves_id') != '') {
            $user9 = User::findOrFail($request->input('instructor_PJueves_id'));
            $horas9 = $user9->cumulativeHour;
            $conteo = $horas9 + $request->input('horas_InstructorPJueves');
            $user9->cumulativeHour = $conteo;
            $user9->save();
        }
        if ($request->input('instructor_SJueves_id') != '') {
            $user10 = User::findOrFail($request->input('instructor_SJueves_id'));
            $horas10 = $user10->cumulativeHour;
            $conteo = $horas10 + $request->input('horas_InstructorSJueves');
            $user10->cumulativeHour = $conteo;
            $user10->save();
        }
        if ($request->input('instructor_TJueves_id') != '') {
            $user11 = User::findOrFail($request->input('instructor_TJueves_id'));
            $horas11 = $user11->cumulativeHour;
            $conteo = $horas11 + $request->input('horas_InstructorTJueves');
            $user11->cumulativeHour = $conteo;
            $user11->save();
        }

// //horas asignadas clases Viernes
        if ($request->input('instructor_PViernes_id') != '') {
            $user12 = User::findOrFail($request->input('instructor_PViernes_id'));
            $horas12 = $user12->cumulativeHour;
            $conteo = $horas12 + $request->input('horas_InstructorPViernes');
            $user12->cumulativeHour = $conteo;
            $user12->save();
        }
        if ($request->input('instructor_SViernes_id') != '') {
            $user13 = User::findOrFail($request->input('instructor_SViernes_id'));
            $horas13 = $user13->cumulativeHour;
            $conteo = $horas13 + $request->input('horas_InstructorSViernes');
            $user13->cumulativeHour = $conteo;
            $user13->save();
        }
        if ($request->input('instructor_TViernes_id') != '') {
            $user14 = User::findOrFail($request->input('instructor_TViernes_id'));
            $horas14 = $user14->cumulativeHour;
            $conteo = $horas14 + $request->input('horas_InstructorTViernes');
            $user14->cumulativeHour = $conteo;
            $user14->save();
        }

// //horas asignadas clases Sabado
        if ($request->input('instructor_PSabado_id') != '') {
            $user15 = User::findOrFail($request->input('instructor_PSabado_id'));
            $horas15 = $user15->cumulativeHour;
            $conteo = $horas15 + $request->input('horas_InstructorPSabado');
            $user15->cumulativeHour = $conteo;
            $user15->save();
        }
        if ($request->input('instructor_SSabado_id') != '') {
            $user16 = User::findOrFail($request->input('instructor_SSabado_id'));
            $horas16 = $user16->cumulativeHour;
            $conteo = $horas16 + $request->input('horas_InstructorSSabado');
            $user16->cumulativeHour = $conteo;
            $user16->save();
        }


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
            ->with('municipalities', Municipalities::all())
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
        $record->classroom_SLunes_id       = $request->input('classrooms_SLunes_id');
        $record->classroom_SMartes_id      = $request->input('classrooms_SMartes_id');
        $record->classroom_SMiercoles_id   = $request->input('classrooms_SMiercoles_id');
        $record->classroom_SJueves_id      = $request->input('classrooms_SJueves_id');
        $record->classroom_SViernes_id     = $request->input('classrooms_SViernes_id');
        $record->classroom_SSabado_id      = $request->input('classrooms_SSabado_id');
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
          return redirect('record')->with('status', 'La ficha de formación '.$record->numer.'-'.$record->program->name.' se editó con Exito.');
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
                ->with('status', 'La Ficha '.$record->id.'-'.$record->nameprogram->name.' se eliminó con éxito.');
        };
    }
    // Generate PDF Report
    public function pdf1(){

        $records = Record::all();
        $pdf = \PDF::loadView('records.pdf', compact('records'));
        return $pdf->download('records.pdf');
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


    public function pdf(){

        $record = Record::all();
        $pdf = \PDF::loadView('records.pdf', compact('record'));
        return $pdf->download('records.pdf');
    }


    public function descargarPrograma($idRecord){
        $record = Record::findOrFail($idRecord);

        $file           = storage_path('app/public/Programa.xlsx');
        $spreadsheet    = IOFactory::load($file);
        $sheet          = $spreadsheet->getActiveSheet();

        $sheet->setCellValue('C2', $record->number);
        $sheet->setCellValue('G2', $record->nameprogram->name);
        $sheet->setCellValue('R2', $record->modalidad);
        $sheet->setCellValue('T2', $record->nameprogram->timeduration);
        $sheet->setCellValue('W2', $record->trimestreActual);
        $sheet->setCellValue('C3', $record->nameprogram->type);
        $sheet->setCellValue('G3', $record->fecha_inicio);
        $sheet->setCellValue('J3', $record->fecha_fin);
        $sheet->setCellValue('M3', $record->horasProgramadas);
        $sheet->setCellValue('O3', $record->user->fullname);
        $sheet->setCellValue('W3', $record->municipios->name);
        $sheet->setCellValue('A6', $record->hora_inicio_PLunes);
        $sheet->setCellValue('B6', $record->hora_fin_PLunes);
        $sheet->setCellValue('E6', $record->hora_inicio_PMartes);
        $sheet->setCellValue('F6', $record->hora_fin_PMartes);
        $sheet->setCellValue('I6', $record->hora_inicio_PMiercoles);
        $sheet->setCellValue('J6', $record->hora_fin_PMiercoles);
        $sheet->setCellValue('M6', $record->hora_inicio_PJueves);
        $sheet->setCellValue('N6', $record->hora_fin_PJueves);
        $sheet->setCellValue('Q6', $record->hora_inicio_PViernes);
        $sheet->setCellValue('R6', $record->hora_fin_PViernes);
        $sheet->setCellValue('U6', $record->hora_inicio_PSabado);
        $sheet->setCellValue('V6', $record->hora_fin_PSabado);
        $sheet->setCellValue('A8', $record->hora_inicio_SLunes);
        $sheet->setCellValue('B8', $record->hora_fin_SLunes);
        $sheet->setCellValue('E8', $record->hora_inicio_SMartes);
        $sheet->setCellValue('F8', $record->hora_fin_SMartes);
        $sheet->setCellValue('I8', $record->hora_inicio_SMiercoles);
        $sheet->setCellValue('J8', $record->hora_fin_SMiercoles);
        $sheet->setCellValue('M8', $record->hora_inicio_SJueves);
        $sheet->setCellValue('N8', $record->hora_fin_SJueves);
        $sheet->setCellValue('Q8', $record->hora_inicio_SViernes);
        $sheet->setCellValue('R8', $record->hora_fin_SViernes);
        $sheet->setCellValue('U8', $record->hora_inicio_SSabado);
        $sheet->setCellValue('V8', $record->hora_fin_SSabado);
        $sheet->setCellValue('A10', $record->hora_inicio_TLunes);
        $sheet->setCellValue('B10', $record->hora_fin_TLunes);
        $sheet->setCellValue('E10', $record->hora_inicio_TMartes);
        $sheet->setCellValue('F10', $record->hora_fin_TMartes);
        $sheet->setCellValue('I10', $record->hora_inicio_TMiercoles);
        $sheet->setCellValue('J10', $record->hora_fin_TMiercoles);
        $sheet->setCellValue('M10', $record->hora_inicio_TJueves);
        $sheet->setCellValue('N10', $record->hora_fin_TJueves);
        $sheet->setCellValue('Q10', $record->hora_inicio_TViernes);
        $sheet->setCellValue('R10', $record->hora_fin_TViernes);
        $sheet->setCellValue('C6', $record->abilitiesLunes1->name);
        $sheet->setCellValue('G6', $record->abilitiesMartes1->name);
        $sheet->setCellValue('K6', $record->abilitiesMiercoles1->name);
        $sheet->setCellValue('O6', $record->abilitiesJueves1->name);
        $sheet->setCellValue('S6', $record->abilitiesViernes1->name);
        $sheet->setCellValue('W6', $record->abilitiesSabado1->name);
        $sheet->setCellValue('C8', $record->abilitiesLunes2->name);
        $sheet->setCellValue('G8', $record->abilitiesMartes2->name);
        $sheet->setCellValue('K8', $record->abilitiesMiercoles2->name);
        $sheet->setCellValue('O8', $record->abilitiesJueves2->name);
        $sheet->setCellValue('S8', $record->abilitiesViernes2->name);
        $sheet->setCellValue('W8', $record->abilitiesSabado2->name);
        $sheet->setCellValue('C10', $record->abilitiesLunes3->name);
        $sheet->setCellValue('G10', $record->abilitiesMartes3->name);
        $sheet->setCellValue('K10', $record->abilitiesMiercoles3->name);
        $sheet->setCellValue('O10', $record->abilitiesJueves3->name);
        $sheet->setCellValue('S10', $record->abilitiesViernes3->name);
        $sheet->setCellValue('D6', $record->classroomLunes1->name);
        $sheet->setCellValue('H6', $record->classroomMartes1->name);
        $sheet->setCellValue('L6', $record->classroomMiercoles1->name);
        $sheet->setCellValue('P6', $record->classroomJueves1->name);
        $sheet->setCellValue('T6', $record->classroomViernes1->name);
        $sheet->setCellValue('X6', $record->classroomSabado1->name);
        $sheet->setCellValue('D8', $record->classroomLunes2->name);
        $sheet->setCellValue('H8', $record->classroomMartes2->name);
        $sheet->setCellValue('L8', $record->classroomMiercoles2->name);
        $sheet->setCellValue('P8', $record->classroomJueves2->name);
        $sheet->setCellValue('T8', $record->classroomViernes2->name);
        $sheet->setCellValue('X8', $record->classroomSabado2->name);
        $sheet->setCellValue('D10', $record->classroomLunes3->name);
        $sheet->setCellValue('H10', $record->classroomMartes3->name);
        $sheet->setCellValue('L10', $record->classroomMiercoles3->name);
        $sheet->setCellValue('P10', $record->classroomJueves3->name);
        $sheet->setCellValue('T10', $record->classroomViernes3->name);
        $sheet->setCellValue('D7', $record->instructorLunes1->fullname);
        $sheet->setCellValue('H7', $record->instructorMartes1->fullname);
        $sheet->setCellValue('L7', $record->instructorMiercoles1->fullname);
        $sheet->setCellValue('P7', $record->instructorJueves1->fullname);
        $sheet->setCellValue('T7', $record->instructorViernes1->fullname);
        $sheet->setCellValue('X7', $record->instructorSabado1->fullname);
        $sheet->setCellValue('D9', $record->instructorLunes2->fullname);
        $sheet->setCellValue('H9', $record->instructorMartes2->fullname);
        $sheet->setCellValue('L9', $record->instructorMiercoles2->fullname);
        $sheet->setCellValue('P9', $record->instructorJueves2->fullname);
        $sheet->setCellValue('T9', $record->instructorViernes2->fullname);
        $sheet->setCellValue('X9', $record->instructorSabado2->fullname);
        $sheet->setCellValue('D12',$record->instructorLunes3->fullname);
        $sheet->setCellValue('H12',$record->instructorMartes3->fullname);
        $sheet->setCellValue('L12',$record->instructorMiercoles3->fullname);
        $sheet->setCellValue('P12',$record->instructorJueves3->fullname);
        $sheet->setCellValue('T12',$record->instructorViernes3->fullname);
        $sheet->setCellValue('A13', $record->nameprogram->name. ' ID ' .$record->number. ' GESTOR ' .$record->user->fullname);      
        $writer = new Xlsx($spreadsheet);
        header('Content-Disposition: attachment; filename='.$record->number. '.xlsx');
        $writer->save('php://output');

    }
    public function excel(){
        return \Excel::download(new RecordsExport,'records.xlsx');
    }

    public function validacion(Request $request){

        if ($request->horario == "horarioPLunes") {
            $data = Record::select('classrooms_PLunes_id')->where('hora_inicio_PLunes', '<=', $request->dateDesde)
            ->where('hora_fin_PLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSLunes") {
            $data = Record::select('classroom_SLunes_id')->where('hora_inicio_SLunes', '<=', $request->dateDesde)
            ->where('hora_fin_SLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioTLunes") {
            $data = Record::select('classroom_TLunes_id')->where('hora_inicio_TLunes', '<=', $request->dateDesde)
            ->where('hora_fin_TLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioPMartes") {
            $data = Record::select('classrooms_PMartes_id')->where('hora_inicio_PMartes', '<=', $request->dateDesde)
            ->where('hora_fin_PMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSMartes") {
            $data = Record::select('classroom_SMartes_id')->where('hora_inicio_SMartes', '<=', $request->dateDesde)
            ->where('hora_fin_SMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioTMartes") {
            $data = Record::select('classroom_TMartes_id')->where('hora_inicio_TMartes', '<=', $request->dateDesde)
            ->where('hora_fin_TMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioPMiercoles") {
            $data = Record::select('classrooms_PMiercoles_id')->where('hora_inicio_PMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_PMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSMiercoles") {
            $data = Record::select('classroom_SMiercoles_id')->where('hora_inicio_SMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_SMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioTMiercoles") {
            $data = Record::select('classroom_TMiercoles_id')->where('hora_inicio_TMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_TMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioPJueves") {
            $data = Record::select('classrooms_PJueves_id')->where('hora_inicio_PJueves', '<=', $request->dateDesde)
            ->where('hora_fin_PJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSJueves") {
            $data = Record::select('classroom_SJueves_id')->where('hora_inicio_SJueves', '<=', $request->dateDesde)
            ->where('hora_fin_SJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioTJueves") {
            $data = Record::select('classroom_TJueves_id')->where('hora_inicio_TJueves', '<=', $request->dateDesde)
            ->where('hora_fin_TJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioPViernes") {
            $data = Record::select('classrooms_PViernes_id')->where('hora_inicio_PViernes', '<=', $request->dateDesde)
            ->where('hora_fin_PViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSViernes") {
            $data = Record::select('classroom_SViernes_id')->where('hora_inicio_SViernes', '<=', $request->dateDesde)
            ->where('hora_fin_SViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioTViernes") {
            $data = Record::select('classroom_TViernes_id')->where('hora_inicio_TViernes', '<=', $request->dateDesde)
            ->where('hora_fin_TViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioPSabado") {
            $data = Record::select('classrooms_PSabado_id')->where('hora_inicio_PSabado', '<=', $request->dateDesde)
            ->where('hora_fin_PSabado', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horario == "horarioSSabado") {
            $data = Record::select('classroom_SSabado_id')->where('hora_inicio_SSabado', '<=', $request->dateDesde)
            ->where('hora_fin_SSabado', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
    }
    public function validacionInstructor(Request $request) {
        if ($request->horarioInstructor == "horarioIPLunes") {
            $data = Record::select('instructor_PLunes_id')->where('hora_inicio_PLunes', '<=', $request->dateDesde)
            ->where('hora_fin_PLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioISLunes") {
            $data = Record::select('instructor_SLunes_id')->where('hora_inicio_SLunes', '<=', $request->dateDesde)
            ->where('hora_fin_SLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioITLunes") {
            $data = Record::select('instructor_TLunes_id')->where('hora_inicio_TLunes', '<=', $request->dateDesde)
            ->where('hora_fin_TLunes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioIPMartes") {
            $data = Record::select('instructor_PMartes_id')->where('hora_inicio_PMartes', '<=', $request->dateDesde)
            ->where('hora_fin_PMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioISMartes") {
            $data = Record::select('instructor_SMartes_id')->where('hora_inicio_SMartes', '<=', $request->dateDesde)
            ->where('hora_fin_SMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioITMartes") {
            $data = Record::select('instructor_TMartes_id')->where('hora_inicio_TMartes', '<=', $request->dateDesde)
            ->where('hora_fin_TMartes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioIPMiercoles") {
            $data = Record::select('instructor_PMiercoles_id')->where('hora_inicio_PMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_PMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioISMiercoles") {
            $data = Record::select('instructor_SMiercoles_id')->where('hora_inicio_SMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_SMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioITMiercoles") {
            $data = Record::select('instructor_TMiercoles_id')->where('hora_inicio_TMiercoles', '<=', $request->dateDesde)
            ->where('hora_fin_TMiercoles', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioIPJueves") {
            $data = Record::select('instructor_PJueves_id')->where('hora_inicio_PJueves', '<=', $request->dateDesde)
            ->where('hora_fin_PJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioITJueves") {
            $data = Record::select('instructor_SJueves_id')->where('hora_inicio_SJueves', '<=', $request->dateDesde)
            ->where('hora_fin_SJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioITJueves") {
            $data = Record::select('instructor_TJueves_id')->where('hora_inicio_TJueves', '<=', $request->dateDesde)
            ->where('hora_fin_TJueves', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }

        if ($request->horarioInstructor == "horarioIPViernes") {
            $data = Record::select('instructor_PViernes_id')->where('hora_inicio_PViernes', '<=', $request->dateDesde)
            ->where('hora_fin_PViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
        if ($request->horarioInstructor == "horarioISViernes") {
            $data = Record::select('instructor_SViernes_id')->where('hora_inicio_SViernes', '<=', $request->dateDesde)
            ->where('hora_fin_SViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
        if ($request->horarioInstructor == "horarioITViernes") {
            $data = Record::select('instructor_TViernes_id')->where('hora_inicio_TViernes', '<=', $request->dateDesde)
            ->where('hora_fin_TViernes', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
        if ($request->horarioInstructor == "horarioIPSabado") {
            $data = Record::select('instructor_PSabado_id')->where('hora_inicio_PSabado', '<=', $request->dateDesde)
            ->where('hora_fin_PSabado', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
        if ($request->horarioInstructor == "horarioISSabado") {
            $data = Record::select('instructor_SSabado_id')->where('hora_inicio_SSabado', '<=', $request->dateDesde)
            ->where('hora_fin_SSabado', '>=', $request->dateHasta)->get();
            return response()->json($data);
        }
    }

}