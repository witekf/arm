@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Operatorzy

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
                            <input type="text" class="form-control" id="name" placeholder="Imię" name="name">
                        </div>
                        <div class="form-group">
                            <label for="surname">Nazwisko</label>
                            <input type="text" class="form-control" id="surname" placeholder="Nazwisko" name="surname">
                        </div>
                        <div class="form-group">
                            <label for="password">Hasło</label>
                            <input type="text" class="form-control" id="password" placeholder="Hasło" name="password">
                        </div>

                        <button type="submit" class="btn btn-primary">Zapisz operatora

                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
