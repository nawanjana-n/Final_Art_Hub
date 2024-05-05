<?php

namespace App\Http\Controllers;

use App\Models\SalesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class SalesController extends Controller
{
    //
    public function CartView()
    {
        // Retrieve the currently authenticated user's ID
        $userId = Auth::id();
        // Retrieve cart items
        $cartItems = SalesModel::all();

        // Calculate total price
        $totalPrice = $cartItems->sum('total_price');

        // Retrieve products created by the currently authenticated user
        $carts = SalesModel::where('customer_id', $userId)
            ->where('cart_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('cart', compact('carts', 'totalPrice'));
    }

    public function CheckoutView()
    {
        // Retrieve the currently authenticated user's ID
        $userId = Auth::id();
        // Retrieve cart items
        $checkoutItems = SalesModel::all();

        // Calculate total price
        $totalPrice = $checkoutItems->sum('total_price');

        // Retrieve products created by the currently authenticated user
        $checkouts = SalesModel::where('customer_id', $userId)
            ->where('cart_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('checkout', compact('checkouts', 'totalPrice'));
    }



    public function CartAdd(Request $request)
    {

        $cart = new SalesModel;
        $cart->seller_id = trim($request->seller_id);
        $cart->p_name = trim($request->p_name);
        $cart->product_id = trim($request->product_id);
        $cart->image = trim($request->image);
        $cart->quantity = trim($request->quantity);
        $cart->price = trim($request->price);
        $cart->total_price = trim($request->total_price);
        $cart->shipping_fee = trim($request->shipping_fee);
        $cart->customer_id = Auth::user()->id;

        $cart->save();



        return redirect()->route('cart');

    } //End Method

    public function DeleteCart($id)
    {
        $cart = SalesModel::findOrFail($id);
        $cart->delete();


        return redirect()->route('cart');
    }

}
