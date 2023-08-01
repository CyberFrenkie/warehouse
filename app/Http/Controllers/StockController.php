<?php

namespace App\Http\Controllers;

use App\Models\Stock;
use Illuminate\Http\Request;

class StockController extends Controller
{
    public function index()
    {
        $stockItems = Stock::all();
        $stockItems = Stock::orderBy('updated_at', 'desc')->get();
        
        return view('stock.index', compact('stockItems'));
        
    }
}
