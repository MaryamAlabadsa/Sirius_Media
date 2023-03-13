<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Models\Service;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\DB;

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
        $about = Info::select('json_data')
            ->where('json_key', 'about')
            ->first()->about;
        $note = Info::select('json_data')
            ->where('json_key', 'note')
            ->first()->note;
        $services=Service::all();
//        $services=Service::paginate(4);
        return view('home', compact('slider','about','note','services'));
    }
}
