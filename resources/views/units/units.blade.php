@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Komórki organizacyjne

                </div>

                <div class="card-body">
                    <a href="{{ route('addunit')}}">Dodaj komórkę organizacyjną</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">LP</th>
                                <th scope="col">Skrót</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($units as $key => $unit)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                <td>{{$unit->code}}</td>
                                <td>{{$unit->name}}</td>

                                <td><a href="{{ route('editunit', $unit->id)}}" class="btn btn-primary">Edytuj</a></td>
                                <td>
                                    <form action="{{ route('deleteunit', $unit->id)}}" method="POST">
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
