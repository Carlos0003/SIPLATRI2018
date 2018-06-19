<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\ClassroomRequest;
use App\Exports\ClassroomExport;

use App\Classroom;
use App\User;

class ClassroomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('classroom.index')->with('classroom', Classroom::paginate(50)->setPath('classroom'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $responsables = User::all();
        return view('classroom.create', compact('responsables'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $classr = new Classroom;
      $classr->name         = $request->input('name');
      $classr->user_id      = $request->input('user_id');
      $classr->state        = $request->input('state');
      $classr->usability    = $request->input('usability');

      if($classr->save()){
          return redirect('classroom')->with('status', 'El Ambiente '.$classr->name.' se guardo con Exito.');
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
        return view('classroom.show')->with('classroom', Classroom::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        return view('classroom.edit')->with('classroom', Classroom::findOrFail($id))->with('responsables', User::all());
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
        $classroom=Classroom::find($id);
        $classroom->name         = $request->input('name');
        $classroom->user_id      = $request->input('user_id');
        $classroom->state        = $request->input('state');
        $classroom->usability    = $request->input('usability');

      if($classroom->save()){
          return redirect('classroom')->with('status', 'La información del Ambiente '.$classroom->name.' se actualizó con Exito.');
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
        $classr = Classroom::findOrFail($id);
        if($classr->delete()){
            return redirect('classroom')
                ->with('status', 'El Ambiente '.$classr->name.' se eliminó con éxito.');
        };
    }
    // Generate PDF Report
    public function pdf(){

        $classr = Classroom::all();
        $pdf = \PDF::loadView('classroom.pdf', compact('classroom'));
        return $pdf->download('classroom.pdf');
    }
    // Generate EXCEL Report
    public function excel(){
        return \Excel::download(new ClassroomExport,'classroom.xlsx');
    }
    //buscar
    public function search(Request $request){
        $classr=Classroom::name($request->input('name'))->orderBy('id','ASC')->paginate(50)->setPath('classroom');
        return view('classroom.index')->with('classroom',$classr);
    }
    public function ajaxsearch(Request $request){
        $classr = Classroom::name($request->input('name'))->orderBy('id', 'ASC')->paginate(50)->setPath('classroom');
    return view('users.ajaxs')->with('users',$classr);
    }
}