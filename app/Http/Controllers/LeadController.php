<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    
    public function store(Request $request){

        $lead = Lead::create([
            'name' => $request->Name,
            'phone' => $request->Phone,
            'email' => $request->Email,
            'message' => $request->Message
        ]);

        if($lead){
            return redirect('/#contact')->with('success','تم إرسال طلبكم و سيتم التواصل معكم في أقرب فرصة ممكنة');
        }else{
            return redirect('/#contact')->with('error','حدث خطأ يرجى إعادة المحاولة');
        }

    }

}
