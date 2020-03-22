<?php

namespace App\Http\Controllers;

use App\ContentType;
use Illuminate\Http\Request;
use App\Http\Resources\ContentType as ContentTypeResource;

class ContentTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ContentTypeResource::collection(ContentType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contentType = ContentType::create($this->validateData());

        return (new ContentTypeResource($contentType))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContentType  $contentType
     * @return \Illuminate\Http\Response
     */
    public function show(ContentType $contentType)
    {
        return new ContentTypeResource($contentType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContentType  $contentType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ContentType $contentType)
    {
        $contentType->update($this->validateDataUpdate($contentType));

        return (new ContentTypeResource($contentType))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ContentType $contentType
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(ContentType $contentType)
    {
        $contentType->delete();
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

    private function validateDataUpdate(ContentType $contentType)
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
    }
}
