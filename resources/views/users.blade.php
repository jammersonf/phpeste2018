@extends('layouts.app')

@section('content')
	<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Usuários</div>

                <div class="panel-body">
                    <table class="table">
					  <thead class="thead-dark">
					    <tr>
					      <th scope="col">#</th>
					      <th scope="col">Nome</th>
					      <th scope="col">Email</th>
					    </tr>
					  </thead>
					  <tbody>
					  	@if( ! $id)
							@foreach($users as $user)
							    <tr>
							      <th scope="row">{{$user->id}}</th>
							      <td>{{$user->name}}</td>
							      <td>{{$user->email}}</td>
							    </tr>
							@endforeach
						@else
							@if ($users)
								<tr>
							      <th scope="row">{{$users->id}}</th>
							      <td>{{$users->name}}</td>
							      <td>{{$users->email}}</td>
							    </tr>
							@else
								Usuário não existe
							@endif
						@endif
					  </tbody>
					</table>
					{!! $users->links() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection