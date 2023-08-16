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

    public function edit($id)
    {
        $stockItem = Stock::findOrFail($id);
        return view('stock.edit', compact('stockItem'));
    }
    
    public function update(Request $request, $id)
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

        $stockItem = Stock::findOrFail($id);
        $stockItem->update($validatedData);

        return redirect()->route('stock.index')->with('success', 'Stock Item updated successfully.');
    }

    public function destroy($id)
    {
        $stockItem = Stock::findOrFail($id);
        $stockItem->delete();

        return redirect()->route('stock.index')->with('success', 'Stock Item deleted successfully.');
    }


    public function filter(Request $request)
{
    $filteredItems = Stock::query();

    if ($request->has('name_SH')) {
        $nameSH = $request->input('name_SH');
        $filteredItems->where('name_SH', $nameSH);
    }

    if ($request->has('name_EN')) {
        $nameEN = $request->input('name_EN');
        $filteredItems->where('name_EN', $nameEN);
    }

    if ($request->has('manufacturer')) {
        $manufacturer = $request->input('manufacturer');
        $filteredItems->where('manufacturer', $manufacturer);
    }

    if ($request->has('model')) {
        $model = $request->input('model');
        $filteredItems->where('model', $model);
    }
    if ($request->has('location')) {
        $location = $request->input('location');
        $filteredItems->where('location', $location);
    }

    $filteredItems = $filteredItems->get();

    return view('stock.filtered', compact('filteredItems'));
}



}
