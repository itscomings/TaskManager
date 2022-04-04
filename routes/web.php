<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::resource('tasks', TaskController::class);

///**
// * Display All Tasks
// */
//Route::get('/', function () {
//    $tasks = Task::orderBy('created_at', 'asc')->get();
//
//    return view('tasks', [
//        'tasks' => $tasks
//    ]);
//});
//
///**
// * Add A New Task
// */
//Route::post('/task', function (Request $request) {
//    $validator = Validator::make($request->all(), [
//        'name' => 'required|max:255',
//        'description' => 'required|max:255',
//    ]);
//
//    if ($validator->fails()) {
//        return redirect('/')
//            ->withInput()
//            ->withErrors($validator);
//    }
//
//    $task = new Task;
//    $task->name = $request->name;
//    $task->description = $request->description;
//    $task->save();
//
//    return redirect('/');
//});
//
///**
// * Delete An Existing Task
// */
//Route::delete('/task/{id}', function ($id) {
//    Task::findOrFail($id)->delete();
//
//    return redirect('/');
//});
