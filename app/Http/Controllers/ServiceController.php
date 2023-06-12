<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::all();
        return view('controlPanel.servicesSection.index', compact('services'));
    }

    public function create()
    {

        return view('controlPanel.servicesSection.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'title_ar' => 'required | string | string | min:3 | max:100',
            'description' => 'required | string | string | min:3',
            'description_ar' => 'required | string | string | min:3',
            'image' => 'required',
        ]);
        if (!$validator->fails()) {
            if ($request->hasFile('image')) {

                $file_name = str::random(10) . '_' . time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('images', $file_name);
                $url = 'images' . '/' . $file_name;
                $data['image'] = $url;
            }
            Service::create($data);

            return redirect()->route('services.index')->with('success', 'Service created successfully');
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    public function edit($id)
    {
        $service = Service::findOrFail($id);
        return view('controlPanel.servicesSection.edit', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $validator = Validator($request->all(), [
            'title' => 'required | string | min:3 | max:100',
            'title_ar' => 'required | string | string | min:3 | max:100',
            'description' => 'required | string | string | min:3',
            'description_ar' => 'required | string | string | min:3',
        ]);
        if (!$validator->fails()) {

            $service = Service::findOrFail($id);
            if ($request->hasFile('image')) {
                File::delete($service->image);
                //
                $file_name = str::random(10) . '_' . time() . '.' . $request->image->getClientOriginalExtension();
                $request->image->move('images', $file_name);
                $url = 'images' . '/' . $file_name;
                $data['image'] = $url;
            }
            $service->update($data);

            return redirect()->route('services.index')->with('success', 'Service updated successfully');
        } else {
            return redirect()->back()->with('error', $validator->getMessageBag()->first());
        }
    }

    public function destroy($id)
    {
        $service = Service::findOrFail($id);

        $isDeleted = $service->delete();
        if ($isDeleted) {
            return redirect()->route('services.index')->with('success', 'Service deleted successfully');
        } else {
            return redirect()->back()->with('error', 'deteled failed');
        }
    }
}
