<?php

namespace App\Http\Controllers;

use App\Content;
use App\Http\Resources\Content as ContentResource;
use Illuminate\Http\Request;

class ContentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContentResource::collection(Content::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $content = Content::create($this->validateData());

        return (new ContentResource($content))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function show(Content $content)
    {
        return new ContentResource($content);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Content  $content
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Content $content)
    {
        $content->update($this->validateDataUpdate($content));

        return (new ContentResource($content))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Content $content
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Content $content)
    {
        $content->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'data' => 'nullable',
        ]);
    }

    private function validateDataUpdate(Content $content)
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
            'data' => 'nullable',
        ]);
    }
}
