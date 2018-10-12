@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Cadastrar Post</div>

                <div class="panel-body">
                	<form action="/post/store" method="POST">
                		 {{ csrf_field() }}
	                	<div class="col-md-6">
	                		<label for="">Titulo</label>
	                		<input type="text" name="titulo">
	                	</div>

	                	<div class="col-md-6">
	                		<label for="">Texto</label>
	                		<input type="text" name="texto">
	                	</div>
	                	<div class="col-md-6">
	                		<input type="submit" value="Salvar" class="btn btn-class btn-success">
	                	</div>
                	</form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection