<?php

namespace App\Http\Controllers;

use App\GroupCategorie;
use App\Http\Resources\GroupCategorie as GroupCategorieResource;
use Illuminate\Http\Request;

class GroupCategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return GroupCategorieResource::collection(GroupCategorie::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $gc = GroupCategorie::create($this->validateData());

        return (new GroupCategorieResource($gc))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\GroupCategorie  $groupCategorie
     * @return \Illuminate\Http\Response
     */
    public function show(GroupCategorie $groupCategorie)
    {
        return new GroupCategorieResource($groupCategorie);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\GroupCategorie  $groupCategorie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, GroupCategorie $groupCategorie)
    {
        $groupCategorie->update($this->validateDataUpdate($groupCategorie));

        return (new GroupCategorieResource($groupCategorie))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\GroupCategorie $groupCategorie
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(GroupCategorie $groupCategorie)
    {
        $groupCategorie->delete();
        return response([]);
    }

    private function validateData()
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
    }

    private function validateDataUpdate(GroupCategorie $gc)
    {
        return request()->validate([
            'name' => 'required',
            'description' => 'nullable',
        ]);
    }
}
