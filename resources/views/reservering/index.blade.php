@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col md-auto">
                <div class="card">

                <form action="{{route('reservering.store')}}" method="POST">
                    @csrf
                    <input value="{{ auth()->id() }}" name="user_id" type="hidden" />
                    <input value="{{$auto->id}}" name="auto_id" type="hidden">
{{--                    <input id="auto_id" type="text" value=" {{$reservering['auto_id']}}" class="form-control @error('auto_id') is-invalid @enderror" name="auto_id" value="{{ old('name') }}" autocomplete="name" autofocus>--}}
                    <label for="begintijd" class="col-4 col-form-label ">{{ __('begintijd') }}</label>
                    <input  type="date" name="begintijd" id="begintijd" class="form-control col-6" @error('begintijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="begintijd" autofocusclass="form-control">
                    <label for="begintijd" class="col-4 col-form-label">{{ __('eindtijd') }}</label>
                    <input type="date" name="eindtijd" id="eindtijd" class="form-control col-6" @error('eindtijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="eindtijd" autofocusclass="form-control">
                    <button type="submit" class="btn btn-success"> Reserveer nu</button>
                </form>
            </div>

                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ URL::to('../img/')}}/{{$auto->merk}}.png" class="card-img-top" alt="...">
                        <h5 class="card-title">Merk: {{$auto->merk}} {{$auto->type}}</h5>
                        <p class="card-text">Kenteken: {{$auto->kenteken}}</p>
                        <p class="card-text">Prijs per dag: {{$auto->prijs_per_dag}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
