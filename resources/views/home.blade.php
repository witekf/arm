@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <ul>
                        <li>
                            <a href="{{ route('users')}}" class="nav-link">Zarządzanie operatorami</a>
                        </li>
                        <li>
                            <a href="{{ route('proposals')}}" class="nav-link">Zarządzanie wnioskami</a>
                        </li>
                        <li>
                            <a href="{{ route('units')}}" class="nav-link">Zarządzanie komórkami organizacyjnymi</a>
                        </li>
                        <li>
                            <a href="{{ route('services')}}" class="nav-link">Zarządzanie usługami</a>
                        </li>
                    </ul>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
