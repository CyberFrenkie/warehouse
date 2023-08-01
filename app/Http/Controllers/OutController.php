<?php

namespace App\Http\Controllers;

use App\Models\Out;
use App\Models\Stock;
use Illuminate\Http\Request;

class OutController extends Controller
{
    public function index()
    {
        $outItems = Out::all();
        $outItems = Out::orderBy('created_at', 'desc')->get();
        return view('out.index', compact('outItems'));
       
    }

    public function create()
    {
        return view('out.create');
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
            ->where('manufacturer', $validatedData['manufacturer'])
            ->where('model', $validatedData['model'])
            ->where('location', $validatedData['location'])
            ->where('sap_number', $validatedData['sap_number'])
            ->first();

        if ($existingStockItem) {
            $existingStockItem->decrement('stock_count', $validatedData['stock_count']);
        }

        Out::create($validatedData);

        return redirect()->route('out.index')->with('success', 'OUT Item created successfully.');
    }



    public function show($id)
    {
        $item = Out::findOrFail($id);

        return view('out.show', compact('item'));
    }
}
