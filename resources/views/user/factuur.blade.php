@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Factuur</div>
                    <div class="card-body">
                        {{--Hier begint de table--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Begintijd</th>
                                <th scope="col">Eindtijd</th>
                                <th scope="col">auto_id</th>
                                <th scope="col">user_id</th>
                                {{--<th scope="col">{{ auth()->id() }}</th>--}}

                            </tr>
                            </thead>

                            <tbody>

                            @foreach($reserveer as $reservering)
                                <tr>
                                    <td>{{$reservering->begintijd}}</td>
                                    <td>{{$reservering->eindtijd}}</td>
                                    <td>{{$reservering->auto_id}}</td>
                                    <td>{{$reservering->user_id}}</td>
                                    {{--<td>{{$reservering->users->eindtijd}}</td>--}}

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
