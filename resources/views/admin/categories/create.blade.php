@extends('layouts.app')

@section('content')
@if(count($errors)>0)
	<ul class='list-group' style='width: 70%; margin: auto;'>
		@foreach($errors->all() as $error)
		<li class='list-group-item text-danger'>
			{{$error}}
		</li>
		@endforeach
	</ul>
@endif
	<div class='panel panel-default' style='width: 70%; margin: auto;'>
		<div class='panel-heading'>
			Create a new category
		</div>
		<div class='panel-body'>
			<form action="{{route('category.store')}}" method='post'>
				{{csrf_field() }}
				<div class='form-group'>
					<label for='name'>Name</label>
					<input type="text" name="name" class='form-control'>
				</div>

				<div class='form-group'>
					<div class='text-center'>
						<button class='btn btn-success' type='submit'>
							Store Category
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
@stop
