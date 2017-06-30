@extends('layouts.base')

@section('content')
<div class="container">
<h1>Create Dainiki</h1>

<form action="/notebooks.html" method="POST">
{{csrf_field()}}
<div class="form-group">
	<label for="name">Dainiki Name</label>
	<input class="form-control" name="name" type="text">
	</input>
</div>
	<input class="btn btn-primary" type="submit" value="Done">
</input>
</form>
</div>
@endsection