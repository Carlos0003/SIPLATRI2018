@foreach($classrooms as $classr)
	<tr>
		<td> {{$classr->id}} </td>
		<td> {{$classr->name}} </td>
		<td> {{$classr->user->fullname }} </td>
		<td> {{ $classr->state }}</td>
		<td> {{ $classr->usability }}</td>
		<td>
			<a href="{{url('classroom/'.$classr->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('classroom/'.$classr->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('classroom/'.$classr->id)}}" method="post" style="display: inline">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
			</form>
		</td>
	</tr>
@endforeach