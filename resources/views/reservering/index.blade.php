@extends('layouts.app')

@section('content')
<div class="d-flex container align-content-center">
<div class="form-group">
    <form action="{{route('reservering.store')}}" method="POST">
    <input type="date" name="begintijd" class="form-control">
    <input type="date" name="eindtijd" class="form-control">
     <button type="submit" class="btn btn-success"> Reserveer nu</button>

    </form>
</div>
</div>
@endsection
