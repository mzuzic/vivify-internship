<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use DB;
use App\Todo;
use Illuminate\Http\Request;


class TodoController extends BaseController 
{   

    public function createTodo(Request $request)
    {
        $todo = Todo::create($request->all());
        return Todo::find($todo->id);
    }

    public function getTodos()
    {   
        return Todo::all();
    }

    public function deleteTodo($id) {
        $todo = Todo::find($id);
        $todo->delete();

        return 204;
    }

    public function updateTodo(Request $request) {
        $todo = Todo::find($request->id);
        $todo->title = $request->title;
        $todo->priority = $request->priority;
        $todo->save();

        return 204;
    }

    public function markAsDone($id) {
        $todo = Todo::find($id);
        $todo->done = true;
        $todo->save();

        return "marked";
    }
}