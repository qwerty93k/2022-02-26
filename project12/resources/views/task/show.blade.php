@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Task</div>
                    <table class="table table-striped">
                        <tr>
                            <th>Id</th>
                            <th>Title</th>
                            <th>Description</th>
                            <th>Start Date</th>
                            <th>End Date</th>
                            <th>Logo</th>
                            <th>Owner</th>
                            <th>Action</th>
                        </tr>
                            <tr>
                                <td>{{$task->id}}</td>
                                <td>{{$task->title}}</td>
                                <td>{{$task->description}}</td>
                                <td>{{$task->start_date}}</td>
                                <td>{{$task->end_date}}</td>
                                <td><img src="/images/{{$task->logo}}" alt="logo" height="100" width="100"></td>
                                <td>{{$task->taskOwner->name}} {{$task->taskOwner->surname}}</td>
                                <td>
                                    <a class="btn btn-primary" href="{{route('task.edit', [$task])}}">Edit</a>
                                    <a class="btn btn-secondary" href="{{route('task.index', [$task])}}">Back</a>
                                    <form method="post" action="{{route('task.destroy', [$task])}}">
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