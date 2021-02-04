<?php

namespace App\Http\Controllers;

use App\Http\Requests\TaskStoreOrUpdateRequest;
use App\Http\Resources\TaskResource;
use App\Models\task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function index(Request $request)
    {
        $tasks = $request->user()->tasks()->latest()->paginate(5);

        return TaskResource::collection($tasks);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(TaskStoreOrUpdateRequest $request)
    {
        $task = Task::create([
          'name' => $request->name,
          'user_id' => $request->user()->id
        ]);

        if($task) {
          return response()->json(['message' => 'task created'],200) ;
        } else {
          return response()->json(['message' => 'Unsuccessful'],500) ;

        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, task $task)
    {
        //
    }

  public function toggleCompletedStatus(Task $task) {
    $task->toggleCompletedStatus();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy(task $task)
    {
        //
    }
}
