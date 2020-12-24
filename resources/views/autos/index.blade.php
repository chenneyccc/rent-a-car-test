@extends('layouts.app')

@section('content')


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-header">{{ __('Assortiment') }}</div>
                        <div class="card-body">
                            <a href ="{{route('autos.create')}}" class="btn btn-primary">
                                Voeg je auto toe</a>
                            <br> <br>
                            <table class="table">
                                <thead>
                                <tr>
                                    <th> Kenteken</th>
                                    <th>merk</th>
                                    <th>type</th>
                                    <th>Prijs</th>
                                    <th>Wijzigen</th>
                                    <th>Verwijderen</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($autos as $auto)
                                    <tr>
                                    <td>{{$auto->kenteken}}</td>
                                    <td>{{$auto->merk}}</td>
                                    <td>{{$auto->type}}</td>
                                    <td>{{$auto->prijs_per_dag}}</td>
                                    <td><a href="{{$auto->id}}" class="btn btn-success">Wijzig</a> </td>
                                    <td><a href="{{$auto->id}}" class="btn btn-danger">Deleting</a> </td>
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