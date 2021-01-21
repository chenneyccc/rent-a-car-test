@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Reservering') }}</div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                            <tr>

                                <th>Begindatum</th>
                                <th>Einddatum</th>
                                <th>Naam</th>
                                {{--<th>Email</th>--}}
                            </tr>
                            </thead>
                        <tbody>
                        @foreach($reserverings as $reservering)
                            <tr>
                            <td>{{$reservering->begintijd}}</td>
                            <td>{{$reservering->eindtijd}}</td>
                            <td>{{$reservering->user_id}}</td>

                            </tr>
                            @endforeach
                        @foreach($user as $users)
                            <tr>
                                <td>{{$user->name}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                        </table>
                    </div>
                    </div>
                </div>
            </div>

                    <div class="form-group">
                        <form action="{{route('reservering.store')}}" method="POST">
                            @csrf
                            <label for="begintijd" class="col-md-4 col-form-label text-md-right">{{ __('begintijd') }}</label>
                        <input  type="date" name="begintijd" id="begintijd" class="form-control @error('begintijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="begintijd" autofocusclass="form-control">
                            <label for="begintijd" class="col-md-4 col-form-label text-md-right">{{ __('eindtijd') }}</label>
                        <input type="date" name="eindtijd" id="eindtijd" class="form-control @error('eindtijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="eindtijd" autofocusclass="form-control">
                            <button type="submit" class="btn btn-success"> Reserveer nu</button>

                        </form>
                    </div>
    </div>
                    @endsection
