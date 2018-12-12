@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Usługi

                </div>

                <div class="card-body">
                    <a href="{{ route('addservice')}}">Dodaj usługę</a>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">LP</th>
                                <th scope="col">Nazwa</th>
                                <th scope="col">Usługa kluczowa</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($services as $key => $service)
                            <tr>
                                <th scope="row">{{$key+1}}</th>
                                
                                <td>{{$service->name}}</td>
                               
                                @if($service->key)
                                <td>TAK</td>
                                @else
                                <td>NIE</td>
                                @endif

                                <td><a href="{{ route('editservice', $service->id)}}" class="btn btn-primary">Edytuj</a></td>
                                <td>
                                    <form action="{{ route('deleteservice', $service->id)}}" method="POST">
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
