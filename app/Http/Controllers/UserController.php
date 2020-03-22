<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Resources\User as UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function index()
    {
        $this->authorize('viewAny', User::class);

        return UserResource::collection(User::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function store(Request $request)
    {
        $this->authorize('create', User::class);

        $user = User::create($this->validateData());

        return (new UserResource($user))
            ->response();
    }

    /**
     * Display the specified resource.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function show(User $user)
    {
        $this->authorize('view', $user);
        return new UserResource($user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     */
    public function update(Request $request, User $user)
    {
        $this->authorize('update', $user);

        $user->update($this->validateDataUpdate($user));

        return (new UserResource($user))
            ->response();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\User $user
     * @return \Illuminate\Http\Response
     * @throws \Illuminate\Auth\Access\AuthorizationException
     * @throws \Exception
     */
    public function destroy(User $user)
    {
        $this->authorize('delete', $user);
        $user->delete();
        return response([]);
    }

    private function validateData(User $user=NULL)
    {
        return request()->validate([
            'surname' => 'required',
            'firstName' => 'required',
            'email' => 'bail|required|email:rfc,dns|unique:users,email'.(isset($user) ? ','.$user->id : ''),
            'lastLogin' => 'nullable|date',
        ]);
    }

    private function validateDataUpdate(User $user=NULL)
    {
        return request()->validate([
            'surname' => 'required',
            'firstName' => 'required',
            'email' => 'bail|required|email:rfc,dns|unique:users,email'.(isset($user) ? ','.$user->id : ''),
            'lastLogin' => 'nullable|date',
        ]);
    }
}
