@extends('layout.layout')


@section('main')



    <div class="heading col-12">
        <h1>OUT Table</h1>
    </div>


    <div class="addbtn col-12">
        <a class="add" href="{{ route('out.create') }}">Add New Item</a>

    </div>


    <table class="table col-12">
        <thead>
            <tr>
                <th>ID</th>
                <th>Order Number</th>
                <th>Name SH</th>
                <th>Name EN</th>
                <th>Manufacturer</th>
                <th>Model</th>
                <th>Location</th>
                <th>SAP Number</th>                
                <th>Use</th>
                <th>Unit</th>
                <th>Stock count</th>
                <th>Created At</th>
                <th>Updated At</th>
            </tr>
        </thead>
        
        <tbody>
            @foreach($outItems as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->order_number }}</td>
                <td>{{ $item->name_SH }}</td>
                <td>{{ $item->name_EN }}</td>
                <td>{{ $item->manufacturer }}</td>
                <td>{{ $item->model }}</td>
                <td>{{ $item->location }}</td>
                <td>{{ $item->sap_number }}</td>                
                <td>{{ $item->use }}</td>
                <td>{{ $item->unit }}</td>
                <td>{{ $item->stock_count }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    

@endsection