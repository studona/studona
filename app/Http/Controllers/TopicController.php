<?php

namespace App\Http\Controllers;

use App\Topic;
use Illuminate\Http\Request;
use App\Http\Resources\Topic as TopicResource;

class TopicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return TopicResource::collection(Topic::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $topic = Topic::create($this->validateData());

        return (new TopicResource($topic))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function show(Topic $topic)
    {
        return new TopicResource($topic);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Topic  $topic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topic $topic)
    {
        $topic->update($this->validateDataUpdate($topic));

        return (new TopicResource($topic))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Topic $topic
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Topic $topic)
    {
        $topic->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'manualPrediction' => 'nullable',
        ]);
    }

    private function validateDataUpdate(Topic $topic)
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'manualPrediction' => 'nullable',
        ]);
    }
}
