<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Classroom;


class ClassroomExport implements FromView{
	public function view():View{
		return view('classroom.excel',[
			'classroom'=>Classroom::all()]);
	}
}
