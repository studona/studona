<?php

namespace App\Http\Controllers;

use App\TaskType;
use Illuminate\Http\Request;
use App\Http\Resources\TaskType as TTResource;

class TaskTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TTResource::collection(TaskType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tt = TaskType::create($this->validateData());

        return (new TTResource($tt))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TaskType  $taskType
     * @return \Illuminate\Http\Response
     */
    public function show(TaskType $taskType)
    {
        return new TTResource($taskType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TaskType  $taskType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TaskType $taskType)
    {
        $taskType->update($this->validateDataUpdate($taskType));

        return (new TTResource($taskType))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\TaskType $taskType
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(TaskType $taskType)
    {
        $taskType->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'task' => 'required',
        ]);
    }

    private function validateDataUpdate(TaskType $content)
    {
        return request()->validate([
            'task' => 'required',
        ]);
    }
}
