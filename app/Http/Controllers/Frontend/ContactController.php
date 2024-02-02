<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function contact_message_store(Request $request){
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email',
            'number' => 'required|numeric|digits:11',
            'company_name' => 'required|max:255',
            'message' => 'required|max:255',
        ]);
        
        Contact::insert([
            'name' => $request->name,
            'email' => $request->email,
            'number' => $request->number,
            'company_name' => $request->company_name,
            'subject' => $request->subject,
            'message' => $request->message,
            'created_at' => Carbon::now(),
        ]);
        return back()->with('succ', 'Contact send successfully...');
    }
}
