@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edytuj komórkę organizacyjną

                </div>

                <div class="card-body">
                    <form action="{{ route('updateunit', $unit->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="code">Skrót</label>
                            <input type="text" class="form-control" id="code" placeholder="Skrót" name="code" value={{$unit->code}} required>
                        </div>
                        <div class="form-group">
                            <label for="name">Nazwa</label>
                            <input type="text" class="form-control" id="name" placeholder="Nazwa" name="name" value={{$unit->name}} required>
                        </div>

                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a class="btn btn-default btn-close" href="{{ route('units') }}">Cancel</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
