@extends('layout.layout')


@section('main')
    <div class="heading col-12">
        <h1>STOCK Table</h1>
    </div>

    <div class="export-btn">
        <a href="{{ route('export') }}" class="btn btn-primary">Export to Excel</a>

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
            @foreach($stockItems as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->order_number }}</td>
                <td><a href="{{ route('stock.filter', ['name_SH' => $item->name_SH]) }}">{{ $item->name_SH }}</a></td>
                <td><a href="{{ route('stock.filter', ['name_EN' => $item->name_EN]) }}">{{ $item->name_EN }}</a></td>
                <td><a href="{{ route('stock.filter', ['manufacturer' => $item->manufacturer]) }}">{{ $item->manufacturer }}</a></td>
                <td><a href="{{ route('stock.filter', ['model' => $item->model]) }}">{{ $item->model }}</a></td>
                <td><a href="{{ route('stock.filter', ['location' => $item->location]) }}">{{ $item->location }}</a></td>
                <td>{{ $item->sap_number }}</td>                
                <td>{{ $item->use }}</td>
                <td>{{ $item->unit }}</td>
                <td>{{ $item->stock_count }}</td>
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="{{ route('stock.edit', $item->id) }}" class="btn btn-primary">Edit</a>
                    <form action="{{ route('stock.destroy', $item->id) }}" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection