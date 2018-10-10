@foreach($programs as $progr)
	<tr>
		<td> {{$progr->name}} </td>
		<td> {{$progr->timeduration}} </td>
		<td> {{$progr->type}} </td>
		<td>
			<a href="{{url('program/'.$progr->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('program/'.$progr->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('program/'.$progr->id)}}" method="post" style="display: inline">
				{!! csrf_field() !!}
				{!! method_field('delete') !!}
				<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
			</form>
		</td>
	</tr>
@endforeach