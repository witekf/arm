@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dodaj operatora

                </div>

                <div class="card-body">
                    <form action="{{ route('adduser') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="login">Login</label>
                            <input type="text" class="form-control" id="login" placeholder="Login" name="login" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Imię</label>
                            <input type="text" class="form-control" id="name" placeholder="Imię" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Nazwisko</label>
                            <input type="text" class="form-control" id="surname" placeholder="Nazwisko" name="surname" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Hasło</label>
                            <input type="text" class="form-control" id="password" placeholder="Hasło" name="password" required>
                        </div>

                        <div class="form-group">
                            <label for="user-type">Typ operatora</label>
                            <select name="user-type" id="user-type" class="form-control">
                                @foreach($user_types as $user_type)
                                   <option value="{{$user_type->id}}">{{$user_type->name}}</option> 
                                @endforeach                       
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a class="btn btn-default btn-close" href="{{ route('users') }}">Anuluj</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
