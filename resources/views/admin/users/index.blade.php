@extends('layouts.app')

@section('content')
    {{--Hier begint de container--}}
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Users</div>
                    <div class="card-body">
                        {{--Hier begint de table--}}
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Roles</th>
                                <th scope="col">Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <th scope="row">{{$user->id}}</th>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                    <td>
                                        @can('edit-users')
                                            <a href="{{route('admin.users.edit', $user ->id)}}">
                                                @endcan
                                                @can('delete-users')
                                                    <button type="button" class=" float-left btn btn-primary">edit</button></a>
                                            <form action="{{route('admin.users.destroy', $user)}}" method="POST">
                                                @csrf
                                                {{method_field('DELETE')}}
                                                <button type="submit" class="btn btn-warning float-left">delete</button>
                                            </form>
                                        @endcan
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                            {{--Hier eindigt de table--}}
                        </table>
                    </div>
                </div>
            </div>
        </div>
        {{--Hier eindigt de container--}}
    </div>
@endsection
