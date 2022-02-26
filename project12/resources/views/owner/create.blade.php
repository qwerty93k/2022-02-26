@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Owner</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{route('owner.store')}}" >
                            @csrf
    
                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">Name</label>
    
                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control" name="name" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="surname" class="col-md-4 col-form-label text-md-end">Surname</label>
    
                                <div class="col-md-6">
                                    <input id="surname" type="text" class="form-control" name="surname" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="text" class="form-control" name="email" autofocus>
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-form-label text-md-end">Phone</label>
    
                                <div class="col-md-6">
                                    <input id="phone" type="text" class="form-control" name="phone" autofocus>
                                </div>
                            </div>

                            {{--Buttons--}}
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Add
                                    </button>
                                    <a class="btn btn-secondary" href="{{route('owner.index')}}">Back</a>
                                </div>
                            </div>           
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>  
@endsection