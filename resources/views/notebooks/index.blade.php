@extends('layouts.base')

@section('content')
            <!-- /navbar -->
            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Dainiki
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="notebooks.html/create" role="button">
                        New Dainiki +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Notebooks==================== -->
                <!-- notebook1 -->
                @foreach($notebooks as $notebook)
                <div class="col-sm-6 col-md-3">
                    <div class="card">
                        <div class="card-block">
                            <a href="{{route("notebooks.show",$notebook->id)}}">
                                <h4 class="card-title">
                                    {{$notebook->name}}
                                </h4>
                            </a>
                        </div>
                        <a href="#">
                            <img alt="Responsive image" class="img-fluid" src="dist/img/notebook.jpg"/>
                        </a>
                        <div class="card-block">
                            <a class="card-link" href="/notebooks.html/{{$notebook->id}}">
                                Edit Dainiki
                            </a>
                            <form action="/notebooks.html/{{$notebook->id}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                            {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
               
            </div>
            <!-- /container -->
  @endsection         