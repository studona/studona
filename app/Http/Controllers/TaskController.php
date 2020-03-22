<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;
use App\Http\Resources\Task as TaskResource;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TaskResource::collection(Task::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $task = Task::create($this->validateData());

        return (new TaskResource($task))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        return new TaskResource($task);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Task $task)
    {
        $task->update($this->validateDataUpdate($task));

        return (new TaskResource($task))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Task $task
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Task $task)
    {
        $task->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'dueUntil' => 'nullable|date',
            'data' => 'nullable',
        ]);
    }

    private function validateDataUpdate(Task $task)
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'dueUntil' => 'nullable|date',
            'data' => 'nullable',
        ]);
    }
}
