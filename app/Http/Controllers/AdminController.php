<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\ProductsModel;
use Illuminate\Support\Facades\Hash;
use App\Models\InquiriesModel;


class AdminController extends Controller
{
    public function AdminDashboard()
    {

        $fakeTotalcustomers = 0;
        $realTotaladmins = User::where('role', 'admin')->where('status', 'active')->count();
        $totaladmins = $fakeTotalcustomers + $realTotaladmins;
        $formattedTotaladmins = number_format($totaladmins);


        $fakeTotalSellers = 0;// Fake number
        $realTotalSellers = User::where('role', 'seller')->where('status', 'active')->count();// Real count of sellers
        $totalsellers = $fakeTotalSellers + $realTotalSellers;// Combine fake number and real count
        $formattedTotalSellers = number_format($totalsellers); // Format the total sellers number with commas for thousands separators

        $fakeTotalcustomers = 0;
        $realTotalcustomers = User::where('role', 'client')->where('status', 'active')->count();
        // User::where('role', 'customer')->count();
        $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        $formattedTotalcustomers = number_format($totalcustomers);

        $total_products = ProductsModel::all()->count();

        return view('admin.index', compact('formattedTotalSellers', 'formattedTotaladmins', 'formattedTotalcustomers','total_products'));
    } //End Method

    public function AdminLogout(Request $request)
    {


        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }



    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_profile_view', compact('profileData'));
    }

    public function AdminProfileStore(Request $request)
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
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => 'Admin Profile Updated Successfully',
            'alert type' => 'success',
        );


        return redirect()->back()->with($notification);
    }


    public function AdminChangePassword()
    {
        $id = Auth::user()->id;
        $profileData = User::find($id);
        return view('admin.admin_change_password', compact('profileData'));

    }

    public function AdminUpdatePassword(Request $request)
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
    }//End method








    //////////////Admin User All Method///////////




    public function AllAdmin()
    {
        $alladmin = User::where('role', 'admin')->get();
        return view('admin.backend.pages.admin.all_admin', compact('alladmin'));
    }

    public function AddAdmin()
    {
        return view('admin.backend.pages.admin.add_admin');
    }

    public function StoreAdmin(Request $request)
    {

        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:9|unique:users',
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username is already taken.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email is already taken.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number must be at least 9 characters.',
            'phone.unique' => 'Phone number is already taken.',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make('ArtTradeHub');
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();

        $notification = array(
            'message' => 'New Admin Inserted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);
    }

    
    public function EditAdmin($id)
    {
        $user = User::findOrFail($id);
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuss = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('admin.backend.pages.admin.edit_admin', compact('user', 'roles', 'statuss'));
    }


    public function UpdateAdmin(Request $request, $id)
    {
        // Validate the request data
    $request->validate([
        'username' => 'required|string|unique:users,username,' . $id,
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email,' . $id,
        'phone' => 'required|string|min:9|unique:users,phone,' . $id,
    ], [
        'username.required' => 'Username is required.',
        'username.unique' => 'Username is already taken.',
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'Invalid email format.',
        'email.unique' => 'Email is already taken.',
        'phone.required' => 'Phone number is required.',
        'phone.min' => 'Phone number must be at least 9 characters.',
        'phone.unique' => 'Phone number is already taken.',
    ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Admin Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }

    public function DeleteAdmin($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }







    public function AllSeller()
    {
        $allseller = User::where('role', 'seller')->get();
        return view('admin.backend.pages.seller.all_seller', compact('allseller'));
    }

    public function AddSeller()
    {
        return view('admin.backend.pages.seller.add_seller');
    }

    public function StoreSeller(Request $request)
    {

        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:9|unique:users',
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username is already taken.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email is already taken.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number must be at least 9 characters.',
            'phone.unique' => 'Phone number is already taken.',
        ]);

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
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuss = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('admin.backend.pages.seller.edit_seller', compact('user', 'roles', 'statuss'));
    }
    public function UpdateSeller(Request $request, $id)
    {

        // Validate the request data
    $request->validate([
        'username' => 'required|string|unique:users,username,' . $id,
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email,' . $id,
        'phone' => 'required|string|min:9|unique:users,phone,' . $id,
    ], [
        'username.required' => 'Username is required.',
        'username.unique' => 'Username is already taken.',
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'Invalid email format.',
        'email.unique' => 'Email is already taken.',
        'phone.required' => 'Phone number is required.',
        'phone.min' => 'Phone number must be at least 9 characters.',
        'phone.unique' => 'Phone number is already taken.',
    ]);


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Seller Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.seller')->with($notification);

    }

    public function DeleteSeller($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Seller Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AllClient()
    {
        $allclient = User::where('role', 'client')->get();
        return view('admin.backend.pages.client.all_client', compact('allclient'));
    }

    public function AddClient()
    {
        return view('admin.backend.pages.client.add_client');
    }

    public function StoreClient(Request $request)
    {

        $request->validate([
            'username' => 'required|string|unique:users',
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'phone' => 'required|string|min:9|unique:users',
        ], [
            'username.required' => 'Username is required.',
            'username.unique' => 'Username is already taken.',
            'name.required' => 'Name is required.',
            'email.required' => 'Email is required.',
            'email.email' => 'Invalid email format.',
            'email.unique' => 'Email is already taken.',
            'phone.required' => 'Phone number is required.',
            'phone.min' => 'Phone number must be at least 9 characters.',
            'phone.unique' => 'Phone number is already taken.',
        ]);

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
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuss = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('admin.backend.pages.client.edit_client', compact('user', 'roles', 'statuss'));
    }
    public function UpdateClient(Request $request, $id)
    {
        // Validate the request data
    $request->validate([
        'username' => 'required|string|unique:users,username,' . $id,
        'name' => 'required|string',
        'email' => 'required|email|unique:users,email,' . $id,
        'phone' => 'required|string|min:9|unique:users,phone,' . $id,
    ], [
        'username.required' => 'Username is required.',
        'username.unique' => 'Username is already taken.',
        'name.required' => 'Name is required.',
        'email.required' => 'Email is required.',
        'email.email' => 'Invalid email format.',
        'email.unique' => 'Email is already taken.',
        'phone.required' => 'Phone number is required.',
        'phone.min' => 'Phone number must be at least 9 characters.',
        'phone.unique' => 'Phone number is already taken.',
    ]);

        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Seller Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.client')->with($notification);

    }

    public function DeleteClient($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Client Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AdminInquiries()
    {
        $admininquiriess = InquiriesModel::where('status', 'new')->orderBy('created_at', 'desc')->get();

        return view('admin.inquiries', compact('admininquiriess'));
    }

}

