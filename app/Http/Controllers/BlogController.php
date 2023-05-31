<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Http\Requests\StoreBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $blogs =  Blog::get();
        return view('controlPanel.blog.index', ['blogs' => $blogs]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controlPanel.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBlogRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'description' => 'string | min:3 | max:250',
            'completed_time' => 'required',
        ]);
        if (!$validator->fails()) {
            $blog = new Blog();
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->completed_time = $request->input('completed_time');
            $blog->save();
            if ($request->hasFile('image')) {
                // $branch->images[0]->delete();
                $this->saveImage($request->image, 'images', $blog);
            }
            return redirect()->route('blog.index');
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('controlPanel.blog.edit', ['blog' => $blog]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBlogRequest  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        // dd($blog);
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'description' => 'string | min:3 | max:250',
            'completed_time' => 'required',
        ]);
        if (!$validator->fails()) {
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->completed_time = $request->input('completed_time');
            $blog->save();
            if ($request->hasFile('image')) {
                foreach ($blog->images as $image) {
                    File::delete($image->url);
                }
                $this->saveImage($request->image, 'images', $blog);
            }
            return redirect()->route('blog.index');
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {

        $isDeleted = $blog->delete();
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
}
