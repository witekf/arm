@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Operatorzy

                </div>

                <div class="card-body">
                    <a href="{{ route('adduser')}}">Dodaj użytkownika</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">LP</th>
                                <th scope="col">login</th>
                                <th scope="col">Imię</th>
                                <th scope="col">Nazwisko</th>
                                <th scope="col">Typ</th>
                                <th scope="col">Edytuj</th>
                                <th scope="col">Usuń</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $key => $user)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$user->login}}</td>
                                <td>{{$user->name}}</td>
                                <td>{{$user->surname}}</td>
                                <td>{{$user->user_type->name}}</td>
                                <td><a href="{{ route('edituser', $user->id)}}" class="btn btn-primary">Edytuj</a></td>
                                <td>
                                    <form action="{{ route('deleteuser', $user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Usuń</button>
                                    </form>
                                </td>
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
