
@extends('layout')


@section('content')

<h1>Create IN Item</h1>

    <form action="{{ route('in.store') }}" method="POST" >
        @csrf

        <label for="order_number">Order Number:</label>
        <input type="text" id="order_number" name="order_number" required><br><br>

        <label for="name_SH">Name SH:</label>
        <input type="text" id="name_SH" name="name_SH" required><br><br>

        <label for="name_EN">Name EN:</label>
        <input type="text" id="name_EN" name="name_EN" required><br><br>

        <label for="manufacturer">Manufacturer:</label>
        <input type="text" id="manufacturer" name="manufacturer" required><br><br>

        <label for="model">Model:</label>
        <input type="text" id="model" name="model" required><br><br>

        <label for="location">Location:</label>
        <input type="text" id="location" name="location" required><br><br>

        <label for="sap_number">SAP Number:</label>
        <input type="text" id="sap_number" name="sap_number" required><br><br>

        <label for="use">Use:</label>
        <input type="text" id="use" name="use" required><br><br>
        
        <label for="unit">Unit:</label>
        <input type="text" id="unit" name="unit" required><br><br>

        <label for="stock_count">Stock:</label>
        <input type="number" id="stock_count" name="stock_count" required><br><br>

        <button type="submit">Submit</button>
    </form>


@endsection

    
