<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Payment;
use App\Models\Pricing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PaymentController extends Controller
{

    public function index()
    {
        // $arrprice = [
        //     '1' =>
        //     [
        //         'id' => '1',
        //         'name' => 'Starter',
        //         'price' => '19'
        //     ],
        //     '2' =>
        //     [
        //         'id' => '2',
        //         'name' => 'Silver',
        //         'price' => '39'
        //     ],
        //     '3' =>
        //     [
        //         'id' => '3',
        //         'name' => 'Gold',
        //         'price' => '49'
        //     ],
        //     '4' =>
        //     [
        //         'id' => '4',
        //         'name' => 'Platium',
        //         'price' => '99'
        //     ],
        // ];
        $payments = Payment::get();
        $pricing = Pricing::get();
        return view('controlPanel.payment.index', ['payments' => $payments, 'pricing' => $pricing]);
    }

    public function create()
    {
        return view('landing_page.payment.payment');
    }

    public function stripeOrder(Request $request)
    {
        $validator = Validator($request->all(), [
            'text' => 'required | string | min:3 | max:100',
            'email' => 'required | string | min:3 | max:250',
            'phone' => 'required | numeric',
            // 'pricing' => 'required',
        ]);
        if (!$validator->fails()) {

            $carts = Cart::where('user_id', $request->cookie('user_id'))->withSum('pricing', 'price')->get();
            if ($carts->isEmpty()) {
                return redirect()->back()->with('error', 'Cart is Empty');
            }
            $sum = $carts->pluck('pricing_sum_price')->sum();

            $selectedOptions = [];
            foreach ($carts as $cart) {
                array_push($selectedOptions, $cart->pricing_id);
            }

            \Stripe\Stripe::setApiKey('sk_test_51NFbr7E0grVaVRvAWpuk6mX723Me7vddau2IrIaVsipMx72fGlVXldUFzAZNYDXMafNwIGfYERsEf33J96PWbfaV007hyWLbLJ');

            $token = $_POST['stripeToken'];

            $charge = \Stripe\Charge::create([
                'amount' => $sum * 100,
                'currency' => 'usd',
                'description' => 'sirus media',
                'source' => $token,
                // 'metadata' => ['pricing_id' => '6735'],
            ]);
            $paymentMethod = $charge->payment_method;
            $paymentMethodType = explode("_", $paymentMethod)[0];
            if ($charge->status == 'succeeded') {
                $payment = new Payment();
                $payment->name = $request->input('text');
                $payment->email = $request->input('email');
                $payment->phone = $request->input('phone');
                $payment->amount = $sum;
                $payment->currency = $charge->currency;
                $payment->method = $paymentMethodType;
                $payment->service = json_encode($selectedOptions);
                $payment->status = 'succeeded';
                $payment->save();
                $deleted = Cart::where('user_id', $request->cookie('user_id'))->delete();
            }

            return redirect()->route('landing.home.page')->with('success', 'Payment Successfully');
        } else {
        }
    } // End Method

    // public function createStripePaymentIntent()
    // {
    //     $stripe = new \Stripe\StripeClient(config('services.stripe.secret_key'));
    //     $paymentIntent = $stripe->paymentIntents->create([
    //         'amount' => 2000,
    //         'currency' => 'usd',
    //         'automatic_payment_methods' => [
    //             'enabled' => true,
    //         ],
    //     ]);
    //     return ['clientSecret' => $paymentIntent->client_secret,];
    // }

    // public function confirm()
    // {
    //     $stripe = new \Stripe\StripeClient(config('services.stripe.secret_key'));
    //     $paymentIntent = $stripe->paymentIntents->retrieve([
    //         // 'amount' => 2000,
    //         // 'currency' => 'usd',
    //         // 'automatic_payment_methods' => [
    //         //     'enabled' => true,
    //         // ],
    //     ]);
    // }
}
