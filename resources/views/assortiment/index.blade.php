@extends('layouts.app')

@section('content')
    {{--hier begint de container--}}

    <div class="container">
        <form class="form-inline" method="GET" action={{route('assortiment.index')}}>

            @csrf
            <label class="sr-only" for="inlineFormInput">Begintijd</label>
            <input type="date" class="form-control mb-2 mr-sm-2 mb-sm-0" name="begintijd" id="inlineFormInput" placeholder="Jane Doe">

            <label class="sr-only" for="inlineFormInputGroup">Eindtijd</label>
            <div class="input-group mb-2 mr-sm-2 mb-sm-0">
                <input type="date" class="form-control" name="eindtijd" id="inlineFormInputGroup" placeholder="Username">
            </div>

            <button type="submit" class="btn btn-primary">Zoeken</button>
        </form>
        </br>

        @if (session('alert'))
            <div class="alert alert-success">
                {{ session('alert') }}
            </div>
        @endif
        <div class="row">
            @foreach($autos as $auto)
                {{--@if($auto->id < 1 )--}}
                    <div class="col-sm-4" style="width: 18rem;">
                <div class="card text-center" style="height:450px;">
                    <div class="card-body">
                        {{--<img src="{{ asset( $auto->image)}}" class="card-img-top">--}}
                        <img src="{{ $auto->url}}" class="card-img-top">
                        <h5 class="card-title">Merk: {{$auto->merk}} {{$auto->type}}</h5>
                        <p class="card-text">Kenteken: {{$auto->kenteken}}</p>
                        <p class="card-text">Prijs per dag: €{{$auto->prijs_per_dag}},-</p>
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
