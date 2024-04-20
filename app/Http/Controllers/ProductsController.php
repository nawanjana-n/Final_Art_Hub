<?php

namespace App\Http\Controllers;

use App\Models\InquiriesModel;
use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\CategoryType;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class ProductsController extends Controller
{
    public function AllProducts()
    {
        // Retrieve the currently authenticated user's ID
        $userId = Auth::id();

        // Retrieve products created by the currently authenticated user
        $types = ProductsModel::where('seller_id', $userId)
            ->orderBy('created_at', 'desc')->get();

        return view('seller.backend.products.all_products', compact('types'));
    } // End Method

    public function AddProducts()
    {
        $categoryall = CategoryType::all();
        return view('seller.backend.products.add_products', compact('categoryall'));

    } // End Method



    public function StoreProducts(Request $request)
    {

        $products = new ProductsModel;
        $products->name = trim($request->name);
        $products->price = trim($request->price);
        $products->category_id = $request->category_id;
        $products->description = trim($request->description);

        $products->seller_id = Auth::user()->id;



        if ($request->hasFile('photo')) {
            foreach ($request->file('photo') as $image) {
                $filename = date('Ymdh') . '_' . $image->getClientOriginalName(); // Generate unique filename
                $image->move(public_path('upload/product_images'), $filename); // Move image to storage directory
                $imagePaths[] = 'upload/product_images/' . $filename; // Store image path in an array
            }
            $products['photo'] = json_encode($imagePaths); // Save array of image paths as JSON string in database
        }

        if ($request->file('main_photo')) {
            $file = $request->file('main_photo');
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/product_main_image'), $filename);
            $products->main_photo = $filename;
        }




        $products->save();

        $notification = array(
            'message' => 'Product Added Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.products')->with($notification);

    } //End Method


    public function EditProducts($id)
    {
        $products = ProductsModel::findOrFail($id);
        $categories = CategoryType::all();
        if ($products->seller_id != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to view this product.',
                'alert-type' => 'error'
            ];
            return redirect()->route('all.products')->with($notification);
        }
        return view('seller.backend.products.edit_products', compact('products', 'categories'));

    } // End Method


    public function UpdateProducts(Request $request)
    {
        $pid = $request->id;
        $products = ProductsModel::findOrFail($pid);


        // Update other fields
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;



        // Save the changes to the database
        $products->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Products Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.products')->with($notification);
    }

    public function DeleteProducts($id)
    {
        $products = ProductsModel::findOrFail($id);
        if ($products->photo) {
            // Determine the file path
            $imagePath = public_path('upload/product_images/' . $products->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $products->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } //End Method

    public function ViewProducts($id)
    {
        $products = ProductsModel::findOrFail($id);
        if ($products->seller_id != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to view this product.',
                'alert-type' => 'error'
            ];
            return redirect()->route('all.products')->with($notification);
        }

        return view('seller.backend.products.view_products', compact('products'));

    } // End Method

    public function AdminAllProducts()
    {


        // Retrieve products created by the currently authenticated user
        $typess = ProductsModel::orderBy('created_at', 'desc')->get();

        $sellers = User::all();
        return view('admin.backend.products.all_products', compact('typess', 'sellers'));
    } // End Method

    public function AdminViewProducts($id)
    {
        $productsts = ProductsModel::findOrFail($id);


        return view('admin.backend.products.view_products', compact('productsts'));

    } // End Method

    public function destroy($id)
    {
        $productts = ProductsModel::findOrFail($id);
        $productts->delete();

        $notification = [
            'message' => 'Product Deleted Success',
            'alert-type' => 'success'
        ];

        return redirect()->route('admin.all.products')->with($notification);
    }

    public function AdminDeleteProducts($id)
    {
        $products = ProductsModel::findOrFail($id);
        if ($products->photo) {
            // Determine the file path
            $imagePath = public_path('upload/product_images/' . $products->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $products->delete();

        $notification = array(
            'message' => 'Product Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } //End Method

    public function index()
    {
        // Retrieve products with their regular price and sale price
        $products = ProductsModel::orderBy('created_at', 'desc')->get();





        // Pass data to the view
        return view('shop', compact('products'));
    }




    public function InsertInquiries(Request $request)
    {

        $inquiries = new InquiriesModel;
        $inquiries->f_name = trim($request->f_name);
        $inquiries->l_name = trim($request->l_name);
        $inquiries->email = $request->email;
        $inquiries->subject = trim($request->subject);
        $inquiries->message = trim($request->message);

        $inquiries->save();

        $notification = array(
            'message' => 'Inquiry Sent Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('contact')->with($notification);

    } //End Method



}
