@extends('layouts.base')

@section('content')
<div class="container">
<h1>Edit Dainiki</h1>

<form action="/notebooks.html/{{$notebook->id}}" method="POST">
{{csrf_field()}}
{{method_field('PUT')}}
<div class="form-group">
	<label for="name">Dainiki Name</label>
	<input class="form-control" name="name" type="text">
	</input>
</div>
	<input class="btn btn-primary" type="submit" value="update">
</input>
</form>
</div>
@endsection