<?php

namespace App\Http\Controllers;

use App\Events\NotifyUser;
use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $onGoingOrder = Order::where('user_id',auth()->user()->id)->where('status','pending')->first();
        if (!$onGoingOrder){
            $onGoingOrder =  Order::create([
                'total'=>0,
                'user_id'=>auth()->user()->id,

            ]);

        }

        $alreadyExistingCart =  Cart::where('product_id',$request->product_id)->where('order_id',$onGoingOrder->id)->first();
        if ($alreadyExistingCart) {
            $alreadyExistingCart->qty += $request->qty;

            $alreadyExistingCart->save();
        } else{

            $cart =  Cart::create([
                'product_id'=>$request->product_id,
                'qty'=> (int)$request->qty,
                'order_id'=>$onGoingOrder->id
            ]);
        }

        $total = 0;
        foreach ($onGoingOrder->carts as $cart){


            $price = $cart->qty * $cart->product->price;

            $total += $price;

        }




        $onGoingOrder->total = $total;

        $onGoingOrder->save();

        return back();





        return redirect('products');
    }


    /**
     * Display the specified resource.
     */
    public function show()
    {
        $order = Order::where('user_id', auth()->user()->id)->where('status', 'pending')->first();

        if ($order) {
            $carts = $order->carts;

            return view('cart.show', [
                'order' => $order,
                'carts' => $carts
            ]);
        } else {

            return redirect()->route('dashboard')->with('error', 'No pending order found.');
        }

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request)
    {
        $order = Order::find($request->order_id);

        if ($order) {
            $newTotal = 0;

            foreach ($order->carts as $cart) {
                $newTotal += $cart->qty * $cart->product->price;
                event(new NotifyUser($cart));
                $cart->delete();
            }

            $order->total = $newTotal;

            // Set the order status to "completed"
            $order->status = 'finished';

            $order->save();
        }

        return back();
    }










    public function removeFromeCart(Request $request)
    {
        $cart = Cart::where('product_id', $request->product_id)
            ->where('order_id', $request->order_id)
            ->first();

        if ($cart) {
            $order = Order::find($request->order_id);


            $removedProductTotal = $cart->qty * $cart->product->price;


            $order->total -= $removedProductTotal;
            $order->save();


            $cart->delete();
        }

        return back();



    }




}
