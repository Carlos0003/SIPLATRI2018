@foreach($users as $user)
	<tr>
		<td> {{$user->fullname}} </td>
		<td> {{$user->email}} </td>
		<td> {{ $user->phonenumber }}</td>
		<td> {{ $user->role }}</td>
		<td> {{ $user->contract }}</td>
		<td> {{ $user->state }}</td>
		<td>
			<a href="{{url('user/'.$user->id)}}" class="btn btn-outline-primary"> <i class="fa fa-search"></i></a>
			<a href="{{url('user/'.$user->id.'/edit')}}" class="btn btn-outline-primary"> <i class="fa fa-pencil-alt"></i></a>
			<form action="{{url('user/'.$user->id)}}" method="post" style="display: inline">
				{!! csrf_field() !!}
				{!! method_field('delete') !!}
				<button class="btn btn-outline-danger btn-delete" type="button"><i class="fa fa-trash"></i></button>				
			</form>
		</td>
	</tr>
@endforeach