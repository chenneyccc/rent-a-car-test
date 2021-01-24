@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <a href="{{ url('/prnpriview') }}" class="btnprn btn">Print Overzicht</a>
                    <script type="text/javascript">
                        $(document).ready(function(){
                            $('.btnprn').printPage();
                        });
                    </script>
                    <div class="card-header">{{ __('Reservering') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Begindatum</th>
                                <th>Einddatum</th>
                                <th>Naam</th>
                                <th>Auto merk</th>
                                <th>Auto Kenteken</th>
                            </tr>
                            </thead>
                            <tbody>

                            @foreach($data as $row)
                                <tr>
                                    <td>{{$row->begintijd}}</td>
                                    <td>{{$row->eindtijd}}</td>
                                    <td>{{$row->name}}</td>
                                    <td>{{$row->merk}}</td>
                                    <td>{{$row->kenteken}}</td>


                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
@endsection
