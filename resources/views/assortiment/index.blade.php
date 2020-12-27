@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($autos as $auto)

            <div class="col-sm-4" style="width: 18rem;">

                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ URL::to('../img/')}}/{{$auto->merk}}.png" class="card-img-top" alt="...">
                        <h5 class="card-title">Merk: {{$auto->merk}} {{$auto->type}}</h5>
                        <p class="card-text">Kenteken: {{$auto->kenteken}}</p>
                        <p class="card-text">Prijs per dag: {{$auto->prijs_per_dag}}</p>
                        @guest
                            @if (Route::has('login'))
                                    <a href="{{ route('login') }}" class="btn btn-primary">Login</a>
                            @endif

                        @else
                            <a href="{{route('reservering.index', $auto->id)}}" class="btn btn-primary">Reserveer nu</a>
                        @endguest
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection
