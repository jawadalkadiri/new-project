<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{

    public function create(){
        return view('pages.task.create');
    }
    public function index(){
        $tasks = Task::all();
        return view('pages.task.index',['tasks'=>$tasks]);
    }
    public function store(Request $request){
      $title = $request->title;
      $description = $request->description;
      $id = 2;

        Task::create(['title'=>$title,'description'=>$description,'user_id'=>$id]);
       return to_route('task.index')->with('success', 'Task created successfully!');
    }
    public function show($id){
        $singleTask = Task::findorFail($id);

        if(is_null($singleTask)){
            return view('pages.task.show',['task'=>$singleTask]);
        }
        return view('pages.task.show',['task'=>$singleTask]);
    }

    public function edit($id){
        $singleTask = Task::findorFail($id);
        return view('pages.task.edit',['task' => $singleTask]);
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'=>'required',
            'description'=>'required',
        ]);
        $task = Task::findorFail($id);
        $task->update($request->all());


        return to_route('task.index');
    }

    public function softdestroy($id){
        $task = Task::findorFail($id);
        $task->update(['status' => '0']);

        return to_route('task.index');
    }

    public function destroy($id){
        $task = Task::findorFail($id);
        $task->delete();

        return to_route('task.index');
    }

    public function trashindex(){
        $tasks = Task::all();
        return view('pages.task.trash.index',['tasks'=>$tasks]);
    }

    public function taskrestore($id){
        $task = Task::findorFail($id);
        $task->update(['status'=>'1']);
        return to_route('task.index');
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
