<?php

namespace App\Http\Controllers;

use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pricing =  Pricing::get();

        return view('controlPanel.pricing.index', ['pricing' => $pricing]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('controlPanel.pricing.create');
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
            'name_en' => 'required | string | min:3 | max:100',
            'name_ar' => 'required | string | min:3 | max:100',
            'description_en' => 'required | string',
            'description_ar' => 'required | string',
            'price' => 'required | numeric',
        ]);
        if (!$validator->fails()) {

            $pricing = new Pricing();
            $pricing->name_en = $request->input('name_en');
            $pricing->name_ar = $request->input('name_ar');
            $pricing->description_en = $request->input('description_en');
            $pricing->description_ar = $request->input('description_ar');
            $pricing->price = $request->input('price');
            $isSaved = $pricing->save();

            return redirect()->route('pricing.index')->with('success', 'Created successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        return view('controlPanel.pricing.edit', compact('pricing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        $validator = Validator($request->all(), [
            'name_en' => 'required | string | min:3 | max:100',
            'name_ar' => 'required | string | min:3 | max:100',
            'description_en' => 'required | string',
            'description_ar' => 'required | string',
            'price' => 'required | numeric',
        ]);
        if (!$validator->fails()) {

            $pricing->name_en = $request->input('name_en');
            $pricing->name_ar = $request->input('name_ar');
            $pricing->description_en = $request->input('description_en');
            $pricing->description_ar = $request->input('description_ar');
            $pricing->price = $request->input('price');

            $isSaved = $pricing->save();

            return redirect()->route('pricing.index')->with('success', 'Updated successfully');
        } else {
            return Redirect::back()->withErrors($validator)->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $isDeleted = $pricing->delete();
        if ($isDeleted) {
            return redirect()->route('pricing.index')->with('success', 'Deleted successfully');
        } else {
            return redirect()->back()->with('error', 'Deteled failed');
        }
    }

    public function showLanding(Request $request)
    {
        $pricing =  Pricing::get();
        return view('landing_page.pricing', ['pricing' => $pricing]);
    }
}
