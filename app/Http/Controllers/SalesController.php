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
        $totalPrice = $cartItems->where('cart_status', 'pending')->sum('total_price');

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
        $totalPrice = $checkoutItems->where('cart_status', 'pending')->sum('total_price');

        // Retrieve products created by the currently authenticated user
        $checkouts = SalesModel::where('customer_id', $userId)
            ->where('cart_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        if ($checkouts->isEmpty()) {
            return redirect()->route('shop');
        }

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


    public function CheckoutAdd(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|digits_between:2,15',
            'address' => 'required|string|max:255',
            'town' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'zip' => 'required|string|max:10',
            'country' => 'required|string',
            'order_note' => 'nullable|string',

        ]);

        // Retrieve all cart items for the authenticated user
        // $cartItems = CartModel::where('customer_id', auth()->id())->get();
        $carts = SalesModel::where('customer_id', auth()->id())
            ->where('cart_status', 'pending')
            ->get();

        // Update each cart item with the new data
        foreach ($carts as $item) {
            $item->update([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
                'town' => $request->town,
                'state' => $request->state,
                'zip' => $request->zip,
                'country' => $request->country,
                'order_note' => $request->order_note,

                'cart_status' => 'bought',
            ]);



        }
        return redirect()->route('cart');
    }
}
