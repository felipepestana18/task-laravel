<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Response;
use App\Jobs\TaskJob;

class taskController extends Controller
{
    public function index(){

     $tasks = Task::All();
     return Response::json($tasks, 200);
    }

    public function show($id)
    {
        $task = Task::findOrFail($id);
        return Response::json($task, 200);
    }

    public function update(Request $request)
    {
        $data = $request->all();
        $data["updated"] = true;
        $eventEdited = Task::findOrFail($data['id'])->update($data);
        return Response::json($eventEdited);
    }

    public function store(Request $request) {

         
     
        TaskJob::dispatch([ 
          'title' => $request->title,
          'description' => $request->description,
          "created" => true,
          "updated" => false,
          "delete" => false
        ]);

        return Response::json(["msg" => "Task created with success!"]);

    }
    public function destroy($id){

        print($id);
        Event::findOrFail($id)->delete();
        return Response::json(["msg" => "Evento Excluido com sucesso"], 200);
    }

    public function somar($value1, $value2){

        return $value1 + $value2;

    }
}
