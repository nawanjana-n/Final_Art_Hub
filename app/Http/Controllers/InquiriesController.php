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

    }

    public function updateStatus($id)
    {
        $contactStatus = InquiriesModel::find($id);

        if ($contactStatus) {
            $contactStatus->update(['status' => 'old']);
            return redirect()->back()->with('success', 'Your Messege Send');
        }
        return redirect()->back()->with('error', 'Your Message not sent');

    }



}
