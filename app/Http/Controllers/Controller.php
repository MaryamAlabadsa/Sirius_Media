<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Comment;
use App\Models\Info;
use App\Models\Project;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        //        $info = Info::all();
        $slider = Info::select('json_data')
            ->where('json_key', 'slider')
            ->first()->slider;
        $info = Info::first();
        $about = Info::select('json_data')
            ->where('json_key', 'about')
            ->first()->about;
        $note = Info::select('json_data')
            ->where('json_key', 'note')
            ->first()->note;
        $services = Service::all();
        // dd($services);
        $projects = Project::all();
        $blogs = Blog::orderBy('created_at', 'desc')->take(3)->get();
        $projectOne =  Project::first();

        // $services = Service::paginate(4);
        return view('landing_page.home', compact(
            'slider',
            'info',
            'about',
            'note',
            'services',
            'projects',
            'blogs',
            'projectOne'
        ));
    }

    public function storeComment(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'email' => 'string | string | min:3 | max:100',
            'comment' => 'string | string | min:3 | max:100',
        ]);
        if (!$validator->fails()) {
            $info = Info::first();
            $comment = new Comment();
            $comment->name = $request->input('name');
            $comment->email = $request->input('email');
            $comment->comment = $request->input('comment');
            // $comment->completed_time = 'asdfasdfasd';

            $isSaved = $info->comments()->save($comment);

            return redirect()->back();
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }
}
