<?php
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\AbilitiesModel;


class AbilitiesExport implements FromView{
	public function view():View{
		return view('abilities.excel',[
			'abilities'=>AbilitiesModel::all()]);
	}
}
