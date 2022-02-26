@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session()->has('error_message'))
                    <div class="alert alert-danger">
                        {{session()->get('error_message')}}
                    </div>
                 @endif
        
                @if(session()->has('success_message'))
                    <div class="alert alert-success ">
                        {{session()->get('success_message')}}
                    </div>
                @endif
                <a class="btn btn-primary" href="{{route('owner.create')}}">Create Owner</a>
                <div class="card">
                        <table class="table table-striped">
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Surname</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($owners as $owner)
                                <tr>
                                    <td>{{$owner->id}}</td>
                                    <td>{{$owner->name}}</td>
                                    <td>{{$owner->surname}}</td>
                                    <td>{{$owner->email}}</td>
                                    <td>{{$owner->phone}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('owner.edit', [$owner])}}">Edit</a>
                                        <a class="btn btn-secondary" href="{{route('owner.show', [$owner])}}">Show</a>
                                        <form method="post" action="{{route('owner.destroy', [$owner])}}">
                                            @csrf
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection