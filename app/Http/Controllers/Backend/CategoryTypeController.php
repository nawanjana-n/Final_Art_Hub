<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryType;

class CategoryTypeController extends Controller
{
    public function AllCategory()
    {
        $types = CategoryType::latest()->get();
        return view('admin.backend.category.all_category', compact('types'));
    } // End Method

    public function AddCategory()
    {
        return view('admin.backend.category.add_category');
    } // End Method

    public function index()
    {
        $categories = CategoryType::all();
        return view('welcome', compact('categories'));
    }

    public function StoreCategory(Request $request)
    {


        $category = new CategoryType;
        $category->category_name = trim($request->category_name);


        if ($request->file('photo')) {
            $file = $request->file('photo');
            $filename = date('Ymdh') . $file->getClientOriginalName();
            $file->move(public_path('upload/category_images'), $filename);
            $category['photo'] = $filename;
        }




        $category->save();

        $notification = array(
            'message' => 'Category Created Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    } //End Method


    public function EditCategory($id)
    {
        $categories = CategoryType::findOrFail($id);
        return view('admin.backend.category.edit_category', compact('categories'));

    } // End Method

    public function UpdateCategory(Request $request)
    {
        $cid = $request->id;
        CategoryType::findOrFail($cid)->update([

            'category_name' => $request->category_name,




        ]);

        $notification = array(
            'message' => 'Category Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    } //End Method


    public function DeleteCategory($id)
    {
        $category = CategoryType::findOrFail($id);
        if ($category->photo) {
            // Determine the file path
            $imagePath = public_path('upload/category_images/' . $category->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        $category->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);

    } //End Method


}


