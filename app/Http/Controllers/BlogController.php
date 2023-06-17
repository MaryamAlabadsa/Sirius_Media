<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

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
            'description' => 'required',
            'short_description' => 'required | string | min:3 | max:250',
            'completed_time' => 'required',
        ]);
        if (!$validator->fails()) {
            $blog = new Blog();
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->short_description = $request->input('short_description');
            $blog->completed_time = $request->input('completed_time');
            $blog->save();
            //image
            if ($request->hasFile('image')) {
                $this->saveImage($request->image, 'images', $blog);
            }
            return redirect()->route('blog.index')->with('success', 'Created Successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
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
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'description' => 'required | string | min:3 | max:250',
            'short_description' => 'required | string | min:3 | max:250',
            'completed_time' => 'required',
        ]);
        if (!$validator->fails()) {
            $blog->title = $request->input('title');
            $blog->description = $request->input('description');
            $blog->short_description = $request->input('short_description');
            $blog->completed_time = $request->input('completed_time');
            $blog->save();
            if ($request->hasFile('image')) {
                foreach ($blog->images as $image) {
                    File::delete($image->url);
                }
                $this->saveImage($request->image, 'images', $blog);
            }
            return redirect()->route('blog.index')->with('success', 'Updated Successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
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
            return redirect()->route('blog.index')->with('success', 'Deleted Successfully');
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

    public function showLanding()
    {
        $blogs =  Blog::get();
        return view('landing_page.blog.index', ['blogs' => $blogs]);
    }

    public function showDetailsLanding($id)
    {
        $allBlog =  Blog::take(3)->get();
        $allBlog2 =  Blog::take(5)->get();
        $blog =  Blog::findOrFail($id);
        return view('landing_page.blog.show', ['blog' => $blog, 'allBlog' => $allBlog, 'allBlog2' => $allBlog2]);
    }

    public function store_Comment(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'email' => 'required | string | string | min:3 | max:100',
            'comment' => 'required | string | string | min:3 | max:100',
        ]);
        if (!$validator->fails()) {
            $blog = Blog::findOrFail($id);
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');

            $isSaved = $blog->comments()->save($comment);

            return redirect()->route('bloglandingdetails', $blog->id)->with('success', 'Add Comment successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }
}
