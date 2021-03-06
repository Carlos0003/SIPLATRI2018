<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Classroom;
use App\Municipalities;
use App\Record;
use App\Http\Requests\UserRequest;
use App\Http\Requests\ClassroomRequest;
use App\Http\Requests\RecordRequest;
use App\Http\Requests\ProgramRequest;
use App\Http\Requests\MunicipalitiesRequest;
use App\Exports\UsersExport;
use App\Http\Controllers\MunicipalitiesController;
use Auth;
use DB;


class UserController extends Controller
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
          return view('users.index')
          ->with('users', User::paginate(10)
          ->setPath('user'));
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
            $munici = Municipalities::all();
            return view('users.create', compact('munici'));
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
    public function store(UserRequest $request)
    {
      $user = new User;
      $user->document       = $request->input('document');
      $user->fullname       = $request->input('fullname');
      $user->email          = $request->input('email');
      $user->password       = bcrypt($request->input('password'));
      $user->phonenumber    = $request->input('phonenumber');
      $user->municipality_id= $request->input('municipality_id');
      $user->gender         = $request->input('gender');
      $user->role           = $request->input('role');
      $user->contract       = $request->input('contract');
      $user->state          = $request->input('state');

      if($user->save()){
          return redirect('user')->with('status', 'El Usuario '.$user->fullname.' se guardo con Exito.');
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
            return view('users.show')->with('user', User::find($id));
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
            return view('users.edit')->with('user', User::findOrFail($id))->with('munici', Municipalities::all());
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
        $user=user::find($id);
        $user->document       =$request->input('document');
        $user->fullname       =$request->input('fullname');
        $user->email          =$request->input('email');
        $user->password       = bcrypt($request->input('password'));
        $user->phonenumber    = $request->input('phonenumber');
        $user->municipality_id       = $request->input('municipality_id');
        $user->gender          = $request->input('gender');
        $user->role           = $request->input('role');
        $user->contract       = $request->input('contract');
        $user->state          = $request->input('state');
        if($user->save()){
            return redirect('user')->with('status', 'El Usuario '.$user->fullname.' se actualizo con Exito.');
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
        $user = user::find($id);
        if($user->delete()){
            return redirect('user')
                ->with('status', 'El Usuario '.$user->fullname.' se eliminó con éxito.');
        };
    }
    // Generate PDF Report
    public function pdf(){

        $users = User::all();
        $pdf = \PDF::loadView('users.pdf', compact('users'));
        return $pdf->download('users.pdf');
    }
    // Generate EXCEL Report
    public function excel(){
        return \Excel::download(new UsersExport,'users.xlsx');
    }
    //buscar
    public function search(Request $request){
        $users=User::fullname($request->input('fullname'))->orderBy('id','ASC')->paginate(10)->setPath('user');
        return view('users.index')->with('users',$users);
    }
    public function ajaxsearch(Request $request){
        $users = User::fullname($request->input('fullname'))->orderBy('id', 'ASC')->paginate(10)->setPath('user');
    return view('users.ajaxs')->with('users',$users);
    }

    public function info(){
        $munici = Municipalities::all();
        return view('users.info', compact('munici'));
    }

    public function editarMiInfo($iduser) {
        $user = User::findOrFail($iduser);
        
    }

    public function horario() {
        return view('users.horario');
    }
}