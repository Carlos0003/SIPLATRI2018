@foreach($records as $rec)
	<tr>
		<td> {{$rec->number}} </td>
			<td> {{$rec->nameprogram->name}} </td>
			<td> {{$rec->user->fullname}} </td>
			<td>
				<a href="{{url('record/'.$rec->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
				<a href="{{url('record/'.$rec->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
				<form action="{{url('record/'.$rec->id)}}" method="post" style="display: inline">
					{!! csrf_field() !!}
					{!! method_field('delete') !!}
					<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>
			</form>
		</td>
	</tr>
@endforeach