<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModel;
use App\Models\CategoryType;
use Illuminate\Support\Facades\Auth;
class ProductsController extends Controller

{
    public function AllProducts()
    {
        $types = ProductsModel::latest()->get();
        return view('seller.backend.products.all_products', compact('types'));
    } // End Method

    public function AddProducts()
    {
        $categoryall = CategoryType::all();
        return view('seller.backend.products.add_products',compact('categoryall'));
    } // End Method



    public function StoreProducts(Request $request)
    {
        // $request->validate([
        //     'category_name' => 'required',


        // ]);
        // CategoryType::insert([
        //     'category_name' => $request->category_name,
        // ]);

        // $notification = array(
        //     'message' => 'Category Added Successfully',
        //     'alert-type' => 'success'
        // );

        // return redirect()->route('all.category')->with($notification);

        $products = new ProductsModel;
        $products->name = trim($request->name);
        $products->price = trim($request->price);
        $products->category = $request->category;
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
        return view('seller.backend.product.edit_products', compact('products'));

    } // End Method

    public function UpdateProduct(Request $request)
    {
        $cid = $request->id;
        ProductsModel::findOrFail($cid)->update([

            'product_name' => $request->product_name,




        ]);

        $notification = array(
            'message' => 'Product Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.products')->with($notification);

    } //End Method


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

}
