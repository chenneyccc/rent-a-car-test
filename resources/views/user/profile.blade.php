@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <h1>{{$user['name']}}</h1>
        {{--Hier eindigt de container--}}
    </div>
@endsection
<script type="text/javascript">
    document.title = `{{ $user ['name'] }}'s profile`;
</script>
