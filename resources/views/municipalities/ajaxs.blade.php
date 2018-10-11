@foreach($municipality as $munici)
	<tr>
		<td> {{$munici->id}} </td>
		<td> {{$munici->name}} </td>
		<td>
			<a href="{{url('municipalities/'.$munici->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('municipalities/'.$munici->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('municipalities/'.$munici->id)}}" method="post" style="display: inline">
				{!! method_field('delete') !!}
				{!! csrf_field() !!}
				<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
			</form>
		</td>
	</tr>
@endforeach