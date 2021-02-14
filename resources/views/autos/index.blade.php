@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
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
                                    <th>Status</th>
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
                                        @if($auto->status == 0)
                                           <td> {{$auto->status = 'beschikbaar'}}</td>
                                            @else
                                            <td>{{$auto->status = 'Niet beschikbaar'}}</td>
                                            @endif
                                    <td><a href="{{route('autos.edit',$auto->id)}}" class="btn btn-success">Wijzig</a> </td>
                                    <td>
                                        <form action="{{route('autos.destroy',$auto->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="submit" onclick="return confirm('Ben je zeker dat je dit wilt verwijderen')"
                                                    class="btn btn-danger">Verwijderen</button>

                                        </form>
                                    </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            {{--Hier eindigt de container--}}
        </div>

@endsection
