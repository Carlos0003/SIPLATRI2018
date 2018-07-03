<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ClassroomRequest;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\RecordRequest;
use App\User;
use App\Classroom;
use App\Program;
use App\Record;
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
            return view('records.create', compact('programsname', 'managers', 'classrooms'));
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
}