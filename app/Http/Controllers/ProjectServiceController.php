<?php

namespace App\Http\Controllers;

use App\Models\ProjectService;
use App\Http\Requests\StoreProjectServiceRequest;
use App\Http\Requests\UpdateProjectServiceRequest;

class ProjectServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectServiceRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProjectServiceRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ProjectService  $projectService
     * @return \Illuminate\Http\Response
     */
    public function show(ProjectService $projectService)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ProjectService  $projectService
     * @return \Illuminate\Http\Response
     */
    public function edit(ProjectService $projectService)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectServiceRequest  $request
     * @param  \App\Models\ProjectService  $projectService
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProjectServiceRequest $request, ProjectService $projectService)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ProjectService  $projectService
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProjectService $projectService)
    {
        //
    }
}
