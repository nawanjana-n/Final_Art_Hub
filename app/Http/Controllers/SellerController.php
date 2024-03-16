<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function SellerDashboard()
    {

        return view('seller.index');
    } //End Method

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



    } //End Method

    public function SellerProfileStore(Request $request)
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
            $file->move(public_path('upload/seller_images'), $filename);
            $data['photo'] = $filename;
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




}





