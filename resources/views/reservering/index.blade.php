@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="col-md-8">
                <form action="{{route('reservering.store')}}" method="POST">
                    @csrf
                    <input value="{{ auth()->id() }}" name="user_id" type="hidden" />
                    <label for="begintijd" class="col-4 col-form-label ">{{ __('begintijd') }}</label>
                    <input  type="date" name="begintijd" id="begintijd" class="form-control col-6" @error('begintijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="begintijd" autofocusclass="form-control">
                    <label for="begintijd" class="col-4 col-form-label">{{ __('eindtijd') }}</label>
                    <input type="date" name="eindtijd" id="eindtijd" class="form-control col-6" @error('eindtijd') is-invalid @enderror" value="{{ old('begintijd') }}" required autocomplete="eindtijd" autofocusclass="form-control">
                    <button type="submit" class="btn btn-success"> Reserveer nu</button>
                </form>
            </div>
        </div>
    </div>
@endsection
