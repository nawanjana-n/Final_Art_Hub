<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

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

    public function AllClient()
    {
        // Implementation for AllSeller method goes here
    }

    public function AddClient()
    {
        return view('client.backend.pages.client.add_client');
    }

    public function StoreClient(Request $request)
    {
        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make('ArtTradeHub');
        $user->role = 'client';
        $user->status = 'active';
        $user->save();

        $notification = array(
            'message' => 'New Client Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.client')->with($notification);
    }

    public function EditClient($id)
    {
        $user = User::findOrFail($id);
        $roles = User::all(); // Assuming you have a Role model and a roles table
        return view('client.backend.pages.client.edit_client', compact('user', 'roles'));
    }
}





