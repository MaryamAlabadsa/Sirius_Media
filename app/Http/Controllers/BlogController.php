<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
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
            'short_description' => 'string | min:3 | max:250',
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

    public function showLanding()
    {
        $blogs =  Blog::get();
        // dd('asdfs');
        return view('landing_page.blog.index', ['blogs' => $blogs]);
    }

    public function store_Comment(Request $request, $id)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'email' => 'string | string | min:3 | max:100',
            'comment' => 'string | string | min:3 | max:100',
        ]);
        if (!$validator->fails()) {
            $blog = Blog::find($id);
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            // $comment->completed_time = 'asdfasdfasd';

            $isSaved = $blog->comments()->save($comment);

            return redirect()->back();
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    public function showDetailsLanding($id)
    {
        $allBlog =  Blog::take(3)->get();
        $allBlog2 =  Blog::take(5)->get();
        $blog =  Blog::find($id);
        // dd('asdfs');
        return view('landing_page.blog.show', ['blog' => $blog, 'allBlog' => $allBlog, 'allBlog2' => $allBlog2]);
    }
}
