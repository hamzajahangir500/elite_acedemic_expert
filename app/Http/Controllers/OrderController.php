<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use App\Models\Order;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home.pages.order_now');
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
    public function store(OrderRequest $request)
    {
        $inputData = $request->except('_token');
        $inputData['user_id'] = auth()->user()->id ?? null;
        if ($request->hasFile('additional_material')) {
            $inputData['attachement'] = fileUpload($request->file('additional_material'), 'attachments');
        }
        Order::create($inputData);
        return redirect()->route('order.index')->with('success', __('Order Placed successfully'));

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
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    
    /**
     * Get Orders to show on Dashbaord.
     */
    public function getOrders() {
        $orders = Order::orderBy('created_at', 'DESC')->get();
        return view('admin.pages.orders.index', [
            'orders'=> $orders
        ]);
    }
}
