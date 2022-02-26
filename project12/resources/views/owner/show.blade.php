@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Owner</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Surname</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Action</th>
                        </tr>
                            <tr>
                                <td>{{$owner->id}}</td>
                                <td>{{$owner->name}}</td>
                                <td>{{$owner->surname}}</td>
                                <td>{{$owner->email}}</td>
                                <td>{{$owner->phone}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('owner.edit', [$owner])}}">Edit</a>
                                    <a class="btn btn-secondary" href="{{route('owner.index', [$owner])}}">Back</a>
                                    <form method="post" action="{{route('owner.destroy', [$owner])}}">
                                        @csrf
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </td>
                            </tr>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection