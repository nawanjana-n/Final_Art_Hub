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

    // Missing closing brace for AllSeller method

    public function AllSeller()
    {
        // Implementation for AllSeller method goes here
    }

    public function AddSeller()
    {
        return view('seller.backend.pages.seller.add_seller');
    }

    public function StoreSeller(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make('ArtTradeHub');
        $user->role = 'seller';
        $user->status = 'active';
        $user->save();

        $notification = array(
            'message' => 'New Seller Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.seller')->with($notification);
    }

    public function EditSeller($id)
    {
        $user = User::findOrFail($id);
        $roles = User::all(); // Assuming you have a Role model and a roles table
        return view('seller.backend.pages.seller.edit_seller', compact('user', 'roles'));
    }
}
