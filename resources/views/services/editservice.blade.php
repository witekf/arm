@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edytuj usługę

                </div>

                <div class="card-body">
                    <form action="{{ route('updateservice', $service->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Nazwa</label>
                            <input type="text" class="form-control" id="name" placeholder="Nazwa" name="name" value="{{$service->name}}" required>
                        </div>

                        <div class="form-group">
                            <label for="service-kind">Typ usługi</label>
                            <select name="service-kind" id="service-kind" class="form-control">
                                @foreach($service_kinds as $service_kind)
                                    @if($service->service_kind->id == $service_kind->id)
                                    <option value="{{$service_kind->id}}" selected>{{$service_kind->name}}</option> 
                                    else
                                    <option value="{{$service_kind->id}}">{{$service_kind->name}}</option>  
                                    @endif
                                @endforeach                       
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="key"><input type="checkbox" id="key" name="key" value="{{$service->key}}"> Usługa kluczowa</label>
                        </div>


                        <button type="submit" class="btn btn-primary">Zapisz</button>
                        <a class="btn btn-default btn-close" href="{{ route('services') }}">Anuluj</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
