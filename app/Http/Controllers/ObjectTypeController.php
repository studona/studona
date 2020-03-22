<?php

namespace App\Http\Controllers;

use App\ObjectType;
use Illuminate\Http\Request;
use App\Http\Resources\ObjectType as OTResource;

class ObjectTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return OTResource::collection(ObjectType::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ot = ObjectType::create($this->validateData());

        return (new OTResource($ot))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ObjectType  $objectType
     * @return \Illuminate\Http\Response
     */
    public function show(ObjectType $objectType)
    {
        return new OTResource($objectType);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ObjectType  $objectType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ObjectType $objectType)
    {
        $objectType->update($this->validateDataUpdate($objectType));

        return (new OTResource($objectType))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\ObjectType $objectType
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(ObjectType $objectType)
    {
        $objectType->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }

    private function validateDataUpdate(ObjectType $ot)
    {
        return request()->validate([
            'name' => 'required',
        ]);
    }
}
