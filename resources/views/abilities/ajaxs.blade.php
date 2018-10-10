@foreach($abilities as $abilir)
	<tr>
		{{-- <td> {{$classr->id}} </td> --}}
		<td style="text-align: justify; width: 400px;"> {{$abilir->name}} </td>
		<td style="text-align: justify; width: 300px;"> {{$abilir->program->name }} </td>
		<td> {{$abilir->durationHour}} </td>
		<td>
			<a href="{{url('abilities/'.$abilir->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('abilities/'.$abilir->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('abilities/'.$abilir->id)}}" method="post" style="display: inline">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
			</form>
		</td>
	</tr>
@endforeach