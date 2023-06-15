<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("order.order", [
            "title" => "Pesan"
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start' => 'required',
            'finish' => 'required',
            'date' => 'required',
            'time' => 'required',
            'bus' => 'required',
            'total_seat' => 'required|numeric',
        ], [
            // 'keterangan.required' => 'Keterangan harus diisi',
            // 'jumlah_uang.required' => 'Jumlah Uang harus diisi',
            // 'jumlah_uang.numeric' => 'Jumlah Uang harus berupa angka',
            // 'id_kategori.not_in' => 'Pilih Kategori yang sesuai',
        ]);

        Order::create($validated);
        return redirect('/payment');
    }

    public function show(Order $order)
    {
        return view('order.show', [
            'title' => 'Detail Pesanan',
            'order' => $order
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        return view('order.edit', [
            'title' => 'Edit Pesanan',
            'order' => $order
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        $validated = $request->validate([
            'name' => 'required',
            'start' => 'required',
            'finish' => 'required',
            'date' => 'required',
            'time' => 'required',
            'bus' => 'required',
            'total_seat' => 'required|numeric',
        ]);

        $order->update($validated);

        return redirect('/order/'.$order->id);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        $order->delete();
        return redirect('order');
    }
}
