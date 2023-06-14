<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function indexCart(Request $request)
    {
        $carts = Cart::where('user_id', $request->cookie('user_id'))->get();
        // dd($carts);
        return view('landing_page.payment.payment', ['carts' => $carts]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $id)
    {

        $cart = new Cart();
        $cart->user_id = $request->cookie('user_id');
        $cart->pricing_id = $id;
        $isSaved = $cart->save();
        if ($isSaved) {
            return redirect()->route('landing.pricing.show')->with('success', 'Add to cart successfully');
        } else {
            return redirect()->back()->with('error', 'deteled failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::findOrFail($id);
        // dd($cart);

        $isDeleted = $cart->delete();
        if ($isDeleted) {
            return redirect()->route('cart.show.payment')->with('success', 'deleted successfully');
        } else {
            return redirect()->back()->with('error', 'deteled failed');
        }
    }
}
