@extends('layouts.app')

@section('content')
<div class="d-flex container align-content-center">
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
