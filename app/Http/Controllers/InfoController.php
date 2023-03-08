<?php

namespace App\Http\Controllers;

use App\Models\Info;
use App\Http\Requests\StoreInfoRequest;
use App\Http\Requests\UpdateInfoRequest;

class InfoController extends Controller
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
     * @param \App\Http\Requests\StoreInfoRequest $request
     * @return array
     */
    public function store(StoreInfoRequest $request)
    {
        if ($request->file('image')){
            $file = $request->file('image');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('public/Image'), $filename);
        }

        switch ($request->json_key) {
            case 'slider':
                $info = Info::create([
                    'json_key' => $request->json_key,
                    'json_data' =>json_encode([
                        'image' => $filename
                        , 'title_en' => $request->title_en
                        , 'sub_title_en' => $request->sub_title_en
                        , 'title_ar' => $request->title_ar
                        , 'sub_title_ar' => $request->sub_title_ar

                    ])
                ]);
                return ['message' => 'added Successfully',
                    'data' => $info,
                ];
            case 'note':
                $info = Info::create([
                    'json_key' => $request->json_key,
                    'json_data' =>json_encode([
                         'title_en' => $request->title_en
                        , 'title_ar' => $request->title_ar
                    ])
                ]);
                return ['message' => 'added Successfully',
                    'data' => $info,
                ];
            case 'about':
                $file2 = $request->file('image2');
                $filename2 = date('YmdHi') . $file2->getClientOriginalName();
                $file2->move(public_path('public/Image'), $filename2);
              $info=  Info::create([
                    'json_key' => $request->json_key,
                    'json_data' => json_encode([
                        'image1' => $filename
                        , 'image2' => $filename2
                        , 'title_en1' => $request->title_en1
                        , 'sub_title_en1' => $request->sub_title_en1
                        , 'title_ar1' => $request->title_ar1
                        , 'sub_title1_ar1' => $request->sub_title1_ar1

                        , 'title_en2' => $request->title_en2
                        , 'sub_title_en2' => $request->sub_title_en2
                        , 'title_ar2' => $request->title_ar2
                        , 'sub_title_ar2' => $request->sub_title_ar2

                        , 'title_en3' => $request->title_en3
                        , 'sub_title_en3' => $request->sub_title_en3
                        , 'title_ar3' => $request->title_ar3
                        , 'sub_title_ar3' => $request->sub_title_ar3

                        , 'section_title' => $request->section_title
                        , 'section_title_ar' => $request->section_title_ar
                    ])
                ]);
                return ['message' => 'added Successfully',
                    'data' => $info,
                ];
            default:
                dd('ddd');

        }

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Info $info
     * @return \Illuminate\Http\Response
     */
    public function show(Info $info)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Info $info
     * @return \Illuminate\Http\Response
     */
    public function edit(Info $info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateInfoRequest $request
     * @param \App\Models\Info $info
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInfoRequest $request, Info $info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Info $info
     * @return \Illuminate\Http\Response
     */
    public function destroy(Info $info)
    {
        //
    }
}
