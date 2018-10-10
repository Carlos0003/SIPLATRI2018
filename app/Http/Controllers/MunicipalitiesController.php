<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\MunicipalitiesRequest;
use App\Exports\MunicipalitiesExport;
use App\User;
use App\Municipalities;
use App\Http\Controllers\UserController;
use Auth;


class MunicipalitiesController extends Controller
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
            return view('municipalities.index')->with('municipality', Municipalities::paginate(30)->setPath('municipality'));
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
            return view('municipalities.create');
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
        $muni=new Municipalities;
        $muni->name=$request->input('name');
        $muni->zone=$request->input('zone');
        
        if($muni->save()){
            return redirect('municipalities')
                ->with('status','El municipio '.$muni->name. ' se creó con éxito.');
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
            $muni = Municipalities::find($id);
            return view('municipalities.show')->with('muni', $muni);
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
            $muni = Municipalities::find($id);
            return view('municipalities.edit')->with('muni', $muni);
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
        $muni= Municipalities::find($id);
        $muni->name=$request->input('name');
        $muni->zone=$request->input('zone');
        
        if($muni->save()){
            return redirect('municipalities')->with('status','El municipio '.$muni->name. ' se Modificó con éxito.');
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
        $muni=Municipalities::find($id);
        if($muni->delete()){
            return redirect('municipalities')
                    ->with('status','El Municipio '.$muni->name.' se eliminó con éxito!');
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
        $programs = Program::type($request->input('type'))->paginate(50)->setPath('program');
        $programs = Program::timeduration($request->input('timeduration'))->paginate(50)->setPath('program');
        return view('programs.ajaxs')->with('programs',$programs);
    }
}
