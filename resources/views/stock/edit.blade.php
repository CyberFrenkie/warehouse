@extends('layout.layout')

@section('main')
    <h1>Edit Stock Item</h1>
    <form action="{{ route('stock.update', $stockItem->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="order_number">Order Number:</label>
        <input type="number" id="order_number" name="order_number" value="{{ $stockItem->order_number }}"><br><br>
    
        <label for="name_SH">Name SH:</label>
        <input type="text" id="name_SH" name="name_SH" value="{{ $stockItem->name_SH }}"><br><br>
    
        <label for="name_EN">Name EN:</label>
        <input type="text" id="name_EN" name="name_EN" value="{{ $stockItem->name_EN }}"><br><br>
    
        <label for="manufacturer">Manufacturer:</label>
        <input type="text" id="manufacturer" name="manufacturer" value="{{ $stockItem->manufacturer }}"><br><br>
    
        <label for="model">Model:</label>
        <input type="text" id="model" name="model" value="{{ $stockItem->model }}"><br><br>
    
        <label for="location">Location:</label>
        <input type="text" id="location" name="location" value="{{ $stockItem->location }}"><br><br>
    
        <label for="sap_number">SAP Number:</label>
        <input type="text" id="sap_number" name="sap_number" value="{{ $stockItem->sap_number }}"><br><br>
    
        <label for="use">Use:</label>
        <input type="text" id="use" name="use" value="{{ $stockItem->use }}"><br><br>
            
        <label for="unit">Unit:</label>
        <input type="text" id="unit" name="unit" value="{{ $stockItem->unit }}"><br><br>
    
        <label for="stock_count">Stock Count:</label>
        <input type="text" id="stock_count" name="stock_count" value="{{ $stockItem->stock_count }}"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection


    
