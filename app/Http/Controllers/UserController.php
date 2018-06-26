<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Controllers\ClassroomRequest;
use App\Exports\UsersExport;
use App\User;
use App\Classroom;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('users.index')
      ->with('users', User::paginate(10)
      ->setPath('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
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
      $user->municipality   = $request->input('municipality');
      $user->gender          = $request->input('gender');
      $user->role           = $request->input('role');
      $user->contract       = $request->input('contract');
      $user->state          = $request->input('state');

      if($user->save()){
          return redirect('user')->with('status', 'El Usuario '.$user->name.' se guardo con Exito.');
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
        return view('users.show')->with('user', User::find($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.edit')->with('user', User::find($id));
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
        $user->municipality   = $request->input('municipality');
        $user->gender          = $request->input('gender');
        $user->role           = $request->input('role');
        $user->contract       = $request->input('contract');
        $user->state          = $request->input('state');
        if($user->save()){
            return redirect('user')
                ->with('status', 'El Usuario '.$user->name.' se actualizo con Exito.');
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
}