<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ProgramRequest;
use App\Exports\ProgramsExport;
use App\User;
use App\Program;

class ProgramController extends Controller
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
        return view('programs.index')->with('program', Program::paginate(10)->setPath('program'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program=new Program;
        $program->name=$request->input('name');
        if($program->save()){
            return redirect('program')
                ->with('status','El programa de formación '.$program->name. ' se adicionó con éxito.');
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
        $progr = Program::find($id);
        return view('programs.show')->with('progr', $progr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $progr = Program::find($id);
        return view('programs.edit')->with('progr', $progr);
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
        $program= Program::find($id);
        $program->name=$request->input('name');
        if($program->save()){
            return redirect('program')->with('status','El programa de formación '.$program->name. ' se Modificó con éxito.');
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
        $progr=Program::find($id);
        if($progr->delete()){
            return redirect('program')
                    ->with('status','El programa de formación '.$progr->name.' se eliminó con éxito!');
        }
    }
     // Generate PDF Report
    public function pdf(){

        $programs = Program::all();
        $pdf = \PDF::loadView('programs.pdf', compact('programs'));
        return $pdf->download('programs.pdf');
    }
    // Generate EXCEL Report
    public function excel(){
        return \Excel::download(new ProgramsExport,'programs.xlsx');
        // return \Excel::download(new ProgramsExport,'program.xlsx');
    }
    //buscar
    public function search(Request $request){
        $programs=Program::name($request->input('name'))->orderBy('id','ASC')->paginate(50)->setPath('program');
        return view('programs.index')->with('program',$programs);
    }
    public function ajaxsearch(Request $request){
        $programs = Program::name($request->input('name'))->orderBy('id', 'ASC')->paginate(50)->setPath('program');
        return view('programs.ajaxs')->with('programs',$programs);
    }
}
