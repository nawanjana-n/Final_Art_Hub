<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryType;

class CategoryTypeController extends Controller
{
    public function AllCategory(){
        $types = CategoryType::latest()->get();
        return view ('admin.backend.category.all_category',compact('types'));
    } // End Method

public function AddCategory(){
return view ('admin.backend.category.add_category');
} // End Method

public function StoreCategory(Request $request){
    $request->validate([
        'category_name' => 'required',


    ]);
    CategoryType::insert([
'category_name'=> $request->category_name,




    ]);

    $notification = array(
        'message' => 'Category Added Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.category')->with($notification);

} //End Method


public function EditCategory($id){
$categories =CategoryType::findOrFail($id);
return view('admin.backend.category.edit_category',compact('categories'));

} // End Method

public function UpdateCategory(Request $request){
   $cid = $request->id;
    CategoryType::findOrFail($cid)->update([

'category_name'=> $request->category_name,




    ]);

    $notification = array(
        'message' => 'Category Updated Successfully',
        'alert-type' => 'success'
    );

    return redirect()->route('all.category')->with($notification);

} //End Method

public function DeleteCategory($id){
CategoryType::findOrFail($id)->delete();

$notification = array(
    'message' => 'Category Deleted Successfully',
    'alert-type' => 'success'
);

return redirect()->back()->with($notification);

} //End Method



}
