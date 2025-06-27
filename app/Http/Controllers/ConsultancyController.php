<?php

namespace App\Http\Controllers;

use App\Models\ConsultancyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ConsultancyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(),[
            'name' => 'required|string|regex:/^[a-zA-Z\s]+$/|max:255',
            'email' => 'required|email|max:255|regex:/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com)$/i',
            'phone' => 'required|regex:/^(\+?\d{1,3})?[-. ]?\d{10}$/',
            'message' => 'required|string|regex:/^[a-zA-Z\s]+$/',
        ]);
        if(!$validator->passes()) { // If not validated
            return redirect()->back()->withInput()->withErrors($validator);
        } 

        ConsultancyRequest::create($request->only(['name', 'email', 'phone', 'message']));
        return redirect()->back()->with('success', 'Consultancy Request Sent Successfully!');
    }
}
