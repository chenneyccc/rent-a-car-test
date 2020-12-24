@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @foreach($autos as $auto)

            <div class="col-sm-4" style="width: 18rem;">

                <div class="card text-center">
                    <div class="card-body">
                        <img src="{{ URL::to('../img/')}}/{{$auto->merk}}.png" class="card-img-top" alt="...">
                        <h5 class="card-title">{{$auto->merk}} {{$auto->type}}</h5>
                        <p class="card-text">{{$auto->kenteken}}</p>
                        <p class="card-text">{{$auto->prijs_per_dag}}</p>
                        <a href="#" class="btn btn-primary">Reserveer nu</a>
                    </div>
                </div>

            </div>
            @endforeach

        </div>
    </div>
@endsection