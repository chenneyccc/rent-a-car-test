@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-14">
                <div class="card">

                    <a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Overzicht</a>
                    <div class="card-header">{{ __('Reservering') }}</div>
                    <div class="card-body">
                        {{--HIer begint de table--}}
                        <table class="table">
                            <thead>
                            <tr>

                                <th>id</th>
                                <th>Begindatum</th>
                                <th>Einddatum</th>
                                <th>Naam</th>
                                <th>Telefoonnummer</th>
                                <th>Auto merk</th>
                                <th>Auto Kenteken</th>
                                <th>Status</th>
                                <th>Aanpassen</th>
                                <th>Verwijderen</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->begintijd}}</td>
                                    <td>{{$row->eindtijd}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->phone_number}}</td>
                                    <td>{{$row->merk}}</td>
                                    <td>{{$row->kenteken}}</td>
                                        <td>{{$row->status}}</td>
                                    <td><a href="{{route('gereserveerd.edit',$row->id)}}" class="btn btn-success">Wijzig</a> </td>
                                    <td>
                                        <form action="{{route('gereserveerd.destroy',$row->id)}}" method="post">
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
                        {{--Hier eindigt de table--}}
                    </div>
                </div>
            </div>
        </div>
    </div>{{--Hier eindigt de container--}}
@endsection
