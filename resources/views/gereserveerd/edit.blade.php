@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        <form action="{{route('gereserveerd.update',$reservering->id)}}" method="POST">
                            @method('PUT')
                            @csrf
                            <div class="form-group row">
                                <label for="status" class="col-md-4 col-form-label text-md-right">{{ __('status') }}</label>

                                <div class="col-md-6">
                                    <input id="status" type="text" value=" {{$reservering['status']}}"  class="form-control @error('status') is-invalid @enderror" name="status" value="{{ old('status') }}" required autocomplete="status">

                                    @error('status')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">
                                Wijzig
                            </button>
                        </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        {{--Hier eindigt de container--}}
    </div>

@endsection
