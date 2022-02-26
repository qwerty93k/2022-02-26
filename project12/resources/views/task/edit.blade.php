@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Task</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('task.update', [$task])}}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title" value={{$task->title}}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
    
                                <div class="col-md-6">
                                    <input id="description" type="text" class="form-control" name="description" value={{$task->description}}>
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="start_date" class="col-md-4 col-form-label text-md-end">Start Date</label>
                                <div class="col-md-6">
                                    <input id="start_date" type="text" class="form-control" name="start_date" value={{$task->start_date}}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="end_date" class="col-md-4 col-form-label text-md-end">Start Date</label>
                                <div class="col-md-6">
                                    <input id="end_date" type="text" class="form-control" name="end_date" value={{$task->end_date}}>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="logo" class="col-md-4 col-form-label text-md-end">Logo</label>
    
                                <div class="col-md-6">
                                    <input id="logo" type="file" class="form-control" name="logo">
    
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="owner_id" class="col-md-4 col-form-label text-md-end">Owner</label>
    
                                <div class="col-md-6">
                                    <select name="owner_id" id="owner_id" type="text" class="form-control">
                                        @foreach ($owners as $owner)
                                            @if($owner->id == $task->owner_id)
                                                <option value={{$owner->id}} selected>{{$owner->name}} {{$owner->surname}}</option>
                                            @else
                                                <option value={{$owner->id}}>{{$owner->name}} {{$owner->surname}}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Save
                                    </button>
                                    <a class="btn btn-secondary" href="{{route('task.index', [$task])}}">Back</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection