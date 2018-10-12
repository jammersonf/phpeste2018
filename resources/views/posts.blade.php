@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Posts <a href="/post/create" class="btn btn-class btn-primary">Cadastrar</a></div>

                <div class="panel-body">
                    <table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Titulo</th>
					      <th scope="col">Texto</th>
					    </tr>
					  </thead>
					  <tbody>
							@foreach($posts as $post)
							    <tr>
							      <th scope="row">{{$post->id}}</th>
							      <td>{{$post->title}}</td>
							      <td>{{$post->text}}</td>
							    </tr>
							@endforeach
					  </tbody>
					</table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection