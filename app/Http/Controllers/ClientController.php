<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\SalesModel;


class ClientController extends Controller
{
    public function ClientDashboard()
    {

        return view('client.index');
    }//End Method


    public function ClientLogout(Request $request)
    {


        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function ClientProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.client_profile_view', compact('profileData'));
    }

    public function ClientProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/client_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Client Profile Updated Successfully',
            'alert type' => 'success',
        );
        return redirect()->back()->with($notification);

    }
    public function ClientChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('client.client_change_password', compact('profileData'));

    }

    public function ClientUpdatePassword(Request $request)
    {

        //Validation

        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'

        ]);

        ///Match The Old Password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error'
            );

            return back()->with($notification);

        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);




        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }



    public function AllOrders()
    {


        $userId = Auth::id();

        // Retrieve products created by the currently authenticated user
        $allorders = SalesModel::where('customer_id', $userId)
            ->where('cart_status','bought')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('client.backend.orders.all_orders',compact('allorders'));
    }

    public function EditOrders($id)
    {
        $orders = SalesModel::findOrFail($id);
        if ($orders->customer_id != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to Edit this Order.',
                'alert-type' => 'error'
            ];
            return redirect()->route('all.orders')->with($notification);
        }
        return view('client.backend.orders.edit_orders', compact('orders'));

    } // End Method

    public function UpdateOrders(Request $request)
    {
        $pid = $request->id;
        $orders = SalesModel::findOrFail($pid);


        // Update other fields
        $orders->delivery_status = $request->delivery_status;



        // Save the changes to the database
        $orders->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Products Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.orders')->with($notification);
    }


}
