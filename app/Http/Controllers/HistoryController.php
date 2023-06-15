<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;
use App\Models\Order;

class HistoryController extends Controller
{
    public function index()
    {
        $histories = Order::all();
        return view('histories', compact('histories'),
        [
            "title" => "Cek Pesanan",
            "histories" => History::latest()
        ]);
    }

    public function show(History $history)
    {
        return view('history',
        [
            "title" => "Detail Pesanan",
            "history" => $history
        ]);
    }
}
