@extends('layouts.app')

@section('content')

    <!-- Modal create Task-->
    <form method="POST" action="">
        @csrf
        <div class="modal fade" id="create" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Create a new customer</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="formGroupExampleInput" class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" id="formGroupExampleInput">
                        </div>
                        <div class="mb-3">
                            <label for="formGroupExampleInput2" class="form-label">Description</label>
                            <input type="text" name="description" class="form-control" id="formGroupExampleInput2">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- Modal create-->
    <div class="panel-body">

    <!-- Display Validation Errors -->
    @include('common.errors')

    <!-- Current Tasks -->

        <div class="table-wrapper mt-5">
            <div class="table-title">
                <h4 class="row justify-content-center">Tasks Details</h4>

                <!-- Add Task Button -->
                <div class="display justify-content-center">
                    <button type="button" class="btn btn-info add-new mb-4" data-bs-toggle="modal" data-bs-target="#create"> Add New Task </button>
                </div>

                <table id="customer" class="table table-bordered">
                    <thead>
                    <tr>
                        <th>id </th>
                        <th>Name </th>
                        <th>Description </th>
                        <th>Actions </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($tasks as $task)
                        <tr>
                            <td>{{ $task->id}}</td>
                            <td>{{ $task->name }}</td>
                            <td>{{ $task->description }}</td>
                            <td>
                                <div class="btn-group" role="group">
                                    <a type="button" class="btn btn-success btn-sm" href="{{ route('tasks.edit',$task->id) }}"><i class="fas fa-edit"></i></a>
                                    <form action="{{ route('tasks.destroy',$task->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')"><i class="fas fa-trash-alt"></i></button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>

@endsection
