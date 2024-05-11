<?php

namespace App\Http\Controllers;

use App\Models\SalesModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ProductsModel;

class SellerController extends Controller
{
    public function SellerDashboard()
    {

        $user_id = auth()->id(); // Get the ID of the currently authenticated user

        // Count all products added by the user regardless of their status
        $total_products_added_by_user = ProductsModel::where('seller_id', $user_id)->count();
        $pending_orders = SalesModel::where('cart_status', 'bought')
            ->where('delivery_status', 'pending')
            ->where('seller_id', $user_id)
            ->count();

        $all_orders = SalesModel::where('cart_status', 'bought')
            ->where('seller_id', $user_id)
            ->count();

        $totalPrice = SalesModel::whereIn('delivery_status', ['shipped', 'received'])
            ->where('cart_status', 'bought')
            ->where('seller_id', $user_id)
            ->sum('total_price');
        $formattedPrice = number_format($totalPrice, 0, '.', ',');

        return view('seller.index', compact('total_products_added_by_user', 'pending_orders', 'all_orders','formattedPrice'));
    }

    public function SellerLogout(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function SellerProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('seller.seller_profile_view', compact('profileData'));
    }

    public function SellerProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/seller_images'), $filename);
            $data->photo = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Seller Profile Updated Successfully',
            'alert type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function SellerChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('seller.seller_change_password', compact('profileData'));
    }

    public function SellerUpdatePassword(Request $request)
    {
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        if (!Hash::check($request->old_password, Auth::user()->password)) {
            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error'
            );
            return back()->with($notification);
        }

        User::whereId(Auth::user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function AllSales()
    {


        $userId = Auth::id();

        // Retrieve products created by the currently authenticated user
        $allsale = SalesModel::where('seller_id', $userId)
            ->where('cart_status', 'bought')
            ->where('delivery_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('seller.backend.sales.all_sales', compact('allsale'));
    }


    public function EditSale($id)
    {
        $sales = SalesModel::findOrFail($id);
        if ($sales->seller_id != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to Edit this Sale.',
                'alert-type' => 'error'
            ];
            return redirect()->route('all.sales')->with($notification);
        }
        return view('seller.backend.sales.edit_sales', compact('sales'));

    } // End Method

    public function UpdateSales(Request $request)
    {
        $pid = $request->id;
        $sales = SalesModel::findOrFail($pid);


        // Update other fields
        $sales->delivery_status = $request->delivery_status;



        // Save the changes to the database
        $sales->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Products Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.sales')->with($notification);
    }

    public function SellerMeetingList()
    {
        $userId = Auth::id();
        // Retrieve cart items
        $zoomItems = SalesModel::all();


        // Retrieve products created by the currently authenticated user
        $zooms = SalesModel::where('seller_id', $userId)
            ->where('delivery_status', 'pending')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('seller.backend.zoom-meetings.all_meeting', compact('zooms'));
    }

    public function SellerMeetingConfirm($id)
    {
        $zooms = SalesModel::findOrFail($id);
        if ($zooms->seller_id != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to confirm this meeting.',
                'alert-type' => 'error'
            ];
            return redirect()->route('all.meetings')->with($notification);
        }
        return view('seller.backend.zoom-meetings.confirm_req_meeting', compact('zooms'));

    } // End Method

    public function UpdateReq(Request $request)
    {
        $pid = $request->id;
        $meetings = SalesModel::findOrFail($pid);


        // Update other fields
        $meetings->zoom_link = $request->zoom_link;
        $meetings->zoom_time = $request->zoom_time;
        $meetings->zoom_date = $request->zoom_date;



        // Save the changes to the database
        $meetings->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Meeting Confirmed',
            'alert-type' => 'success'
        );

        return redirect()->route('all.meetings')->with($notification);
    }

    public function zoomStatus($id)
    {
        $zoomStatus = SalesModel::find($id);

        if ($zoomStatus) {

            $zoomStatus->update(['zoom_status' => 'finished']);
            return redirect()->back()->with('success', 'Your Messege Send');
        }
        return redirect()->back()->with('error', 'Your Message not sent');

    }


}
