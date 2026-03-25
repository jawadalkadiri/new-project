<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

   public function create(){
    return view('admin.pages.tasks.create');
}

public function index(){
    $tasks = Task::all();
    return view('admin.pages.tasks.index', ['tasks' => $tasks]);
}

public function store(Request $request){
    $request->validate([
        'title' => 'required',
        'description' => 'required',
        'user_id' => 'required'
    ]);

    Task::create([
        'title' => $request->title,
        'description' => $request->description,
        'user_id' => $request->user_id
    ]);

    return to_route('admin.task.index')->with('success', 'Task created successfully!');
}

public function show($id){
    $singleTask = Task::findOrFail($id);
    return view('admin.pages.tasks.show', ['task' => $singleTask]);
}

public function edit($id){
    $singleTask = Task::findOrFail($id);
    return view('admin.pages.tasks.edit', ['task' => $singleTask]);
}

public function update(Request $request, $id){
    $request->validate([
        'title' => 'required',
        'description' => 'required',
    ]);

    $task = Task::findOrFail($id);
    $task->update($request->all());

    return to_route('admin.task.index');
}

public function destroy($id){
    $task = Task::findOrFail($id);
    $task->delete();

    return to_route('admin.task.index');
}



   public function indexx(){
    $users = [
        [
            'id'=>1,
            'name'=>'Jawad',
            'age'=> 21,
            'duration'=>'6.2',
            'status'=>1
        ],
        [
            'id'=>2,
            'name'=>'Abbas',
            'age'=> 22,
            'duration'=>'5.2',
            'status'=>0
        ],
        [
            'id'=>3,
            'name'=>'Bob',
            'age'=> 24,
            'duration'=>'2.4',
            'status'=>1
        ],
        [
            'id'=>4,
            'name'=>'Ali',
            'age'=> 30,
            'duration'=>'1.5',
            'status'=>0
        ]

    ];
    return view('pages.task',compact('users'));
}

}
