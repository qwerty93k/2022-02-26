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
                <a class="btn btn-primary" href="{{route('task.create')}}">Create Task</a>
                <div class="card">
                        <table class="table table-striped">
                            <tr>
                                <th>@sortablelink('id','Id')</th>
                                <th>@sortablelink('title','Title')</th>
                                <th>@sortablelink('description','Description')</th>
                                <th>@sortablelink('start_date','Start Date')</th>
                                <th>@sortablelink('end_date','End Date')</th>
                                <th>Logo</th>
                                <th>@sortablelink('owner_id','Owner')</th>
                                <th>Action</th>
                            </tr>
                            @foreach ($tasks as $task)
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
                                        <a class="btn btn-secondary" href="{{route('task.show', [$task])}}">Show</a>
                                        <form method="post" action="{{route('task.destroy', [$task])}}">
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