@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-11">
                <div class="card">
                    <div class="card-header">Factuur</div>
                    <div class="card-body">
                        {{--Hier begint de table--}}
                        <table class="table">
                            <thead>
                            <tr>

                                <th scope="col">Naam</th>
                                <th scope="col">Adres</th>
                                <th scope="col">Postcode</th>
                                <th scope="col">Plaats</th>
                                <th scope="col">Telefoonnummer</th>
                                <th scope="col">Kenteken</th>
                                <th scope="col">Merk</th>
                                <th scope="col">Type</th>
                                <th scope="col">Gereserveerde Periode</th>
                                <th scope="col">Totale Dagen</th>
                                <th scope="col">Prijs Per dag</th>
                                <th scope="col">Totale Prijs</th>


                                {{--<th scope="col">{{ auth()->id() }}</th>--}}

                            </tr>
                            </thead>

                            <tbody>

                            @foreach($factuurs as $factuur)
                                <tr>
                                    <td>{{$factuur->name}}</td>
                                    <td>{{$factuur->adress}}</td>
                                    <td>{{$factuur->zip_code}}</td>
                                    <td>{{$factuur->city}}</td>
                                    <td>{{$factuur->phone_number}}</td>
                                    <td>{{$factuur->kenteken}}</td>
                                    <td>{{$factuur->merk}}</td>
                                    <td>{{$factuur->type}}</td>
                                    <td>{{$factuur->begintijd}}/{{$factuur->eindtijd}} </td>
                                    <td>
                                        <?php
                                            $begindate = $factuur->begintijd;
                                            $enddate = $factuur->eindtijd;
                                            $datetime1 = new DateTime($begindate);
                                            $datetime2 = new DateTime($enddate);
                                            $interval = $datetime1->diff($datetime2);
                                            $days = $interval->format('%a');
                                            echo $days;

                                        ?>
                                    </td>
                                    <td>€{{$factuur->prijs_per_dag}}</td>
                                    <td>€{{$factuur->prijs_per_dag * $days}}</td>
{{--                                    <td>{{$autos->auto->merk}}</td>--}}
                                    {{--<td>{{$reservering->users->eindtijd}}</td>--}}

                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                        <div>
                             <section>*Alle prijzen zijn inclusief btw*</section>
                      </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
