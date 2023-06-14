<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        return view('histories', [
            "title" => "Cek Pesanan",
            "histories" => History::latest()->paginate(1)
        ]);
    }

    public function show(History $history)
    {
        return view('history', [
            "title" => "Detail Pesanan",
            "history" => $history
        ]);
    }
}
