<?php

namespace App\Http\Controllers;

use App\Models\InquiriesModel;

use Illuminate\Http\Request;

class InquiriesController extends Controller
{
    //
    public function AllInquiries()
    {
        return view('contact');
    }


    public function InsertInquiries(Request $request)
    {

        $inquiries = new InquiriesModel;
        $inquiries->f_name = trim($request->f_name);
        $inquiries->l_name = trim($request->l_name);
        $inquiries->email = trim($request->email);
        $inquiries->subject = trim($request->subject);
        $inquiries->message = trim($request->message);

        $inquiries->save();



        return redirect()->route('contact')->with('success', 'Your message has been sent successfully!');

    } //End Method

    // public function updateStatus(Request $request)
    // {
    //     // Validate the request data
    //     $request->validate([
    //         'id' => 'required|exists:inquiries,id',
    //     ]);

    //     // Find the inquiry by ID
    //     $inquiry = InquiriesModel::findOrFail($request->id);

    //     // Update the status field
    //     $inquiry->status = 'old';
    //     $inquiry->save();

    //     // Redirect back or return a response as needed
    //     return redirect()->back()->with('success', 'Status updated successfully');
    // }

    public function updateStatus($id)
    {
        $contactStatus = InquiriesModel::find($id);

        if ($contactStatus) {
            $contactStatus->update(['status' => 'old']);
            return redirect()->back()->with('success', 'fhghu');
        }
        return redirect()->back()->with('error', 'dgfhgggddhu');

    }



}
