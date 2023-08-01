<?php

namespace App\Http\Controllers;

use App\Models\In;
use App\Models\Stock;
use Illuminate\Http\Request;

class InController extends Controller
{
    public function index()
    {
        $inItems = In::all();
        $inItems = In::orderBy('created_at', 'desc')->get();
        return view('in.index', compact('inItems'));
        
       
    }
  

    public function create()
    {
        return view('in.create');
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'order_number' => 'required',
            'name_SH' => 'required',
            'name_EN' => 'required',
            'manufacturer' => 'required',
            'model' => 'required',
            'location' => 'required',
            'sap_number' => 'required',            
            'use' => 'required',
            'unit' => 'required',
            'stock_count' => 'required|numeric',
        ]);

        $existingStockItem = Stock::where('name_SH', $validatedData['name_SH'])
        ->where('name_EN', $validatedData['name_EN'])
        ->where('model', $validatedData['model'])
        ->where('sap_number', $validatedData['sap_number'])
        ->first();

        if ($existingStockItem) {
            $existingStockItem->increment('stock_count', $validatedData['stock_count']);
        } else {
            $inItem = In::create($validatedData);

            Stock::create($inItem->toArray());
        }

        return redirect()->route('in.index')->with('success', 'IN Item created successfully.');
    }

    public function show($id)
    {
        $item = In::findOrFail($id);

        return view('in.show', compact('item'));
    }
}
