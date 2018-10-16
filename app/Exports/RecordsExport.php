<?php 
namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use App\Record;


class RecordsExport implements FromView{
	public function view():View{
		return view('records.excel',[
			'records'=>Record::all()]);
	}
}

?>