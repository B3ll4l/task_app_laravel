<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;
use App\Http\Requests;

class TasksController extends Controller
{
	public function index(){
		$tasks =  Task::orderBy('created_at', 'asc')->get();
		return view('tasks.index', ['tasks' => $tasks]);
	}

    public function addTask(Request $request){
    	$this->validate($request, [
    		'task' => 'required|max:255|min:1'
		]);
    	Task::create($request->all());
    	return back();
    }

    public function deleteTask(Task $task){
    	$task->delete();
    	return back();
    }
}

