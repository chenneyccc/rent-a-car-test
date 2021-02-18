@extends('layouts.app')
@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="card mb-12">
                <img class="card-img-top" src="{{ asset('storage/'. $auto->image)}}" height="350px" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Merk: {{$auto->merk}} {{$auto->type}}</h5>
                    <p class="card-text">{{$auto->kenteken}}</p>
                    <p class="card-text">Prijs per dag: {{$auto->prijs_per_dag}}</p>
                    <div class="card">
                    <form action="{{route('reservering.store')}}" method="POST">
                        @csrf
                        <input value="{{ auth()->id() }}" name="user_id" type="hidden" />
                        <input value="{{$auto->id}}" name="auto_id" type="hidden">
                        <label for="begintijd" class="col-4 col-form-label ">{{ __('begintijd') }}</label>
                        <input  type="date" name="begintijd" id="begintijd" class="form-control col-6"  value="{{ old('begintijd') }}" required autocomplete="begintijd" autofocusclass="form-control">
                        <label for="begintijd" class="col-4 col-form-label">{{ __('eindtijd') }}</label>
                        <input type="date" name="eindtijd" id="eindtijd" class="form-control col-6" value="{{ old('begintijd') }}" required autocomplete="eindtijd" autofocusclass="form-control">
                        <button type="submit" class="btn btn-success"> Reserveer nu</button>
                    </form>
                </div>
            </div>
            </div>
        </div>

    </div>
    </div>
@endsection