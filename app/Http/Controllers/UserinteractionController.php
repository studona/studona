<?php

namespace App\Http\Controllers;

use App\Userinteraction;
use Illuminate\Http\Request;
use App\Http\Resources\Userinteraction as UiResource;

class UserinteractionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return UiResource::collection(Userinteraction::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $userinteraction = Userinteraction::create($this->validateData());

        return (new UiResource($userinteraction))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Userinteraction  $userinteraction
     * @return \Illuminate\Http\Response
     */
    public function show(Userinteraction $userinteraction)
    {
        return new UiResource($userinteraction);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Userinteraction  $userinteraction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Userinteraction $userinteraction)
    {
        $userinteraction->update($this->validateDataUpdate($userinteraction));

        return (new UiResource($userinteraction))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Userinteraction $userinteraction
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Userinteraction $userinteraction)
    {
        $userinteraction->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'objectId' => 'required',
        ]);
    }

    private function validateDataUpdate(Userinteraction $ui)
    {
        return request()->validate([
            'objectId' => 'required',
        ]);
    }
}
