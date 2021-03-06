<?php

namespace App\Http\Controllers;

use App\Http\Requests\ModelRequest;
use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     */
    public function index()
    {
        $tasks = Task::all();
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     */
    public function store(ModelRequest $request)
    {

        Task::create($request->all());
        return redirect()->route('tasks.index')->with('success','Post created successfully.');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show(Task $task)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     */
    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    /**
     * Update the specified resource in storage.
     *
     */
    public function update(ModelRequest $request, Task $task)
    {

        $task->update($request->all());
        return redirect()->route('tasks.index')->with('success','Task updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('tasks.index')->with('success','Task deleted successfully');
    }
}
