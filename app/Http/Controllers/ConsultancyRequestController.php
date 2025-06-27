<?php

namespace App\Http\Controllers;

use App\Models\ConsultancyRequest;
use Illuminate\Http\Request;

/**
 * For Admin
 */
class ConsultancyRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $consultancyRequests = ConsultancyRequest::orderBy('created_at', 'DESC')->get();
        return view('admin.pages.consultancy_request.index', [
            'consultancyRequests'=> $consultancyRequests
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'status' => 'required|in:0,1',
        ]);

        $consultancyRequest = ConsultancyRequest::findOrFail($id);
        $consultancyRequest->status = $request->status;
        $consultancyRequest->save();

        return redirect()->back()->with('success', 'Consultancy request status updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
