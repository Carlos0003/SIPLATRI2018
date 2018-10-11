<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Municipalities;


class MunicipalitiesExport implements FromView{
	public function view():View{
		return view('municipalities.excel',[
			'municipalities'=>Municipalities::all()]);
	}
}
