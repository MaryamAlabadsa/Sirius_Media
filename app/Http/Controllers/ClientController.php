<?php

namespace App\Http\Controllers;

use App\Models\client;
use Illuminate\Http\Request;
use App\Models\Image;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;


class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients =  Client::get();
        return view('controlPanel.clients.index', ['clients' => $clients]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controlPanel.clients.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'image' => 'required',
        ]);
        if (!$validator->fails()) {
            $client = new Client();
            $client->name = $request->input('name');
            $client->save();
            //image
            if ($request->hasFile('image')) {
                $this->saveImage($request->image, 'images', $client);
            }
            return redirect()->route('client.index')->with('success', 'Created successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        return view('controlPanel.clients.edit', ['client' => $client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        $validator = Validator($request->all(), [
            'name' => 'required | string | min:3 | max:100',
            'image' => 'required',
        ]);
        if (!$validator->fails()) {
            $client->name = $request->input('name');
            $client->save();
            //image
            if ($request->hasFile('image')) {
                foreach ($client->images as $image) {
                    File::delete($image->url);
                }
                $this->saveImage($request->image, 'images', $client);
            }
            return redirect()->route('client.index')->with('success', 'Updated successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        $isDeleted = $client->delete();
        if ($isDeleted) {
            return redirect()->route('client.index')->with('success', 'Deleted successfully');
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

    public function showInLanding()
    {
        $clients =  Client::take(9)->get();
        return view('landing_page.clients', ['clients' => $clients]);
    }
}
