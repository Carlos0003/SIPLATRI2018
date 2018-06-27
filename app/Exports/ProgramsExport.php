<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Program;


class ProgramsExport implements FromView{
	public function view():View{
		return view('programs.excel',[
			'programs'=>Program::all()]);
	}
}
