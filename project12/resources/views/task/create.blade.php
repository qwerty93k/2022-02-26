@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Owner</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('task.store')}}" enctype="multipart/form-data">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="title" class="col-md-4 col-form-label text-md-end">Title</label>
    
                                <div class="col-md-6">
                                    <input id="title" type="text" class="form-control" name="title">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="description" class="col-md-4 col-form-label text-md-end">Description</label>
    
                                <div class="col-md-6">
                                    <textarea id="description" type="text" class="form-control" name="description" cols="30" rows="10"></textarea>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="start_date" class="col-md-4 col-form-label text-md-end">Start Date</label>
    
                                <div class="col-md-6">
                                    <input id="start_date" type="text" class="form-control" name="start_date">
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="end_date" class="col-md-4 col-form-label text-md-end">End Date</label>
    
                                <div class="col-md-6">
                                    <input id="end_date" type="text" class="form-control" name="end_date">
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
                                            <option value={{$owner->id}}>{{$owner->name}} {{$owner->surname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            {{--Buttons--}}
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                    <a class="btn btn-secondary" href="{{route('task.index')}}">Back</a>
                                </div>
                            </div>           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection