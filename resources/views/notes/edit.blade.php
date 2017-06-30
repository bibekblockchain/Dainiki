@extends('layouts.base')

@section('content')
<div class="container">
<h1>Edit Dainiki</h1>

<form action="{{route('notes.update',$note->id)}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
	<label for="title">Dainiki Title</label>
	<input class="form-control" name="title" type="text">
	
</div>
<div class="form-group">
	<label for="body">Dainiki</label>
	<input class="form-control" name="body" type="text">
	
</div>
	 
	<input class="btn btn-primary" type="submit" value="Done">
</input>
</form>
</div>
@endsection