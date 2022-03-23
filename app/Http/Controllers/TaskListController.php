<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\TaskList;

class TaskListController extends Controller
{

    public function index()
    {
        //return view('welcome', ['tasksList' => TaskList::all()]);
        return view('welcome', ['tasksList' => TaskList::where('is_complete', 0)->get()]);
    }

    public function checkComplete($id)
    {
        //Log::info($id);
        $taskList = TaskList::find($id);
        //Log::info($taskList);
        $taskList->is_complete = 1;
        $taskList->save();
        return redirect('/');
    }

    public function saveTask(Request $request)
    {
        // Log::info(json_encode($request->all()));
        $newTaskList = new TaskList;
        $newTaskList->name = $request->taskList;
        $newTaskList->is_complete = 0;
        $newTaskList->save();

        return redirect('/');
    }
}
