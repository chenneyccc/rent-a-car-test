@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Voeg uw auto toe') }}</div>
                    <form method="POST" action="{{route('autos.store')}}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="merk" class="col-md-4 col-form-label text-md-right">{{ __('Merk') }}</label>

                            <div class="col-md-6">
                                <input id="merk" type="text" class="form-control" name="merk">

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="kenteken" class="col-md-4 col-form-label text-md-right">{{ __('Kenteken') }}</label>

                            <div class="col-md-6">
                                <input id="kenteken" type="text" class="form-control @error('kenteken') is-invalid @enderror" name="kenteken" value="{{ old('kenteken') }}" required autocomplete="kenteken" autofocus>

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="type" class="col-md-4 col-form-label text-md-right">{{ __('type') }}</label>

                            <div class="col-md-6">
                                <input id="type" type="text" class="form-control @error('domain') is-invalid @enderror" name="type" value="{{ old('type') }}" required autocomplete="type" autofocus>

                                @error('domain')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="prijs" class="col-md-4 col-form-label text-md-right">{{ __('prijs') }}</label>

                            <div class="col-md-6">
                                <input id="prijs" type="text" class="form-control @error('prijs') is-invalid @enderror" name="prijs_per_dag" value="{{ old('prijs') }}" required autocomplete="prijs_per_dag" autofocus>

                                @error('domain')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">foto</label>
                            <div class="col-md-6">
                            <input type="file" class="py-2"  name="image">
                        </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Sla de auto op') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
        {{--Hier eindigt de container--}}
    </div>
@endsection
