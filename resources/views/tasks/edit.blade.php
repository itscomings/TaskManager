@extends('layouts.app')
@section('content')

        <div class="container mt-5">
            <div class="row justify-content-center mb-5">
                <div class="list-group">
                    <form class="container" action="{{ route('tasks.update',$task->id) }}" method="POST">
                        <div class="row">
                            <div class="col-lg-12">
                                <h3 class="pull-left">Edit Post</h3>
                                <a class="btn btn-primary pull-right" href="{{ route('tasks.index') }}"> Back</a>
                            </div>
                        </div>
                        <!-- Display Validation Errors -->
                        @include('common.errors')

                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="form-group">
                                <strong>Name:</strong>
                                <input type="text" name="name" value="{{ $task->name }}" class="form-control">
                            </div>
                            <div class="form-group">
                                <strong>Description:</strong>
                                <input type="text" name="description" value="{{ $task->description }}" class="form-control">
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
