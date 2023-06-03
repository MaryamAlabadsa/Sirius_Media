<?php

namespace App\Http\Controllers;

use App\Models\Project;
use App\Http\Requests\StoreProjectRequest;
use App\Http\Requests\UpdateProjectRequest;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects =  Project::get();

        return view('controlPanel.project.index', ['projects' => $projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $servies = Service::get();
        $services =  Service::get();
        return view('controlPanel.project.create', ['services' => $services]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProjectRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'service_id' => 'string | numeric',
            'description' => 'string',
        ]);
        if (!$validator->fails()) {

            $project = new Project();
            $project->title = $request->input('title');
            $project->service_id = $request->input('service_id');
            $project->description = $request->input('editordata');
            $project->completed_time = null;
            // $project->completed_time = 'asdfasdfasd';

            $isSaved = $project->save();

            if ($request->hasFile('image')) {
                foreach ($request->image as $image) {
                    $this->saveImage($image, 'images', $project);
                }
            }

            return redirect()->route('project.index');
        } else {

            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        $services =  Service::get();
        return view('controlPanel.project.edit', ['services' => $services, 'project' => $project]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProjectRequest  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {

        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'service_id' => 'string | numeric',
            'description' => 'string',
        ]);
        if (!$validator->fails()) {

            // $project = new Project();
            $project->title = $request->input('title');
            $project->service_id = $request->input('service_id');
            $project->description = $request->input('editordata');
            // $project->completed_time = null;
            // $project->completed_time = 'asdfasdfasd';

            $isSaved = $project->save();

            if ($request->hasFile('image')) {
                foreach ($project->images as $image) {
                    File::delete($image->url);
                }
                foreach ($request->image as $image) {
                    $this->saveImage($request->image, 'images', $project);
                }
            }

            return redirect()->route('project.index');
        } else {

            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $isDeleted = $project->delete();
        if ($isDeleted) {
            return redirect()->route('blog.index');
        } else {
            return redirect()->back()->with('error', 'deteled failed');
        }
    }

    function saveImage($image, $path, $obj,  $imageName = null)
    {

        $file_name = str::random(10) . '_' . time() . '.' . $image->getClientOriginalExtension();
        $image->move($path, $file_name);
        $imageModel = new Image();
        $imageModel->name = $file_name;
        $imageModel->url = $path . '/' . $file_name;
        $obj->images()->save($imageModel);
    }

    // public function showLanding()
    // {
    //     $blogs =  Project::get();
    //     // dd('asdfs');
    //     return view('landing_page.project.index', ['blogs' => $blogs]);
    // }

    public function showDetailsLanding($id)
    {
        $project =  Project::find($id);
        // dd('asdfs');
        return view('landing_page.project.show', ['project' => $project]);
    }

    public function storeComment(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'email' => 'string | string | min:3 | max:100',
            'comment' => 'string | string | min:3 | max:100',
        ]);
        if (!$validator->fails()) {
            $project = Project::find($id);
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            // $comment->completed_time = 'asdfasdfasd';

            $isSaved = $project->comments()->save($comment);

            return redirect()->back();
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }
}
