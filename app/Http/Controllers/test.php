<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class test extends Controller
{
    public function index(){

        $tasks = Task::all();

        return view('home',[
            'tasks' => $tasks,
        ]);
    }

    public function tambah(Request $request){
        $request->validate([
            'task'=>'required|min:5',
        ]);

        Task::create([
            'task'=>$request->task,
            'tanggal'=>now(),
        ]);

        return redirect('/');
    }

    public function hapus(Task $task){
        $task->delete();

        return redirect('/');
    }

}
