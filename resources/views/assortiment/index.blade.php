@extends('layouts.app')

@section('content')
    {{--hier begint de container--}}
    <div class="container">
        <div class="row">
            @foreach($autos as $auto)

            <div class="col-sm-4" style="width: 18rem;">

                <div class="card text-center" style="height:450px;">
                    <div class="card-body">
                        <img src="{{ URL::to('../img/')}}/{{$auto->merk}}.png" class="card-img-top" alt="...">
                        <h5 class="card-title">Merk: {{$auto->merk}} {{$auto->type}}</h5>
                        <p class="card-text">Kenteken: {{$auto->kenteken}}</p>
                        <p class="card-text">Prijs per dag: {{$auto->prijs_per_dag}}</p>
                        {{--Dit zorgt ervoor dat je alleen een auto kan huren als je ingelogd bent --}}
                        @guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @endif
                        {{--Dit zorgt ervoor als je ingelogd bent dat je een auto kan huren--}}
                        @else
                            <a href="{{route('reservering.index', $auto->id)}}" class="btn btn-primary">Reserveer nu</a>
                        @endguest
                    </div>
                </div>

            </div>
            @endforeach

        </div>
        {{--Hier eindigt de container--}}
    </div>
@endsection
