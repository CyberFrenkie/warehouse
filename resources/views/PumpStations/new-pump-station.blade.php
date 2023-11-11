@extends('layout')


@section('content')
    <div class="of-wrapper">
        <div class="heading col-12">
            <h1>Nova pumpna stanica</h1>
        </div>
        
        <div class="levels">
            <ul class="level-list">
                
                <a href="/of/second" class="list-item-link">
                    <li class="list-item">Second floor</li>
                </a>

                <a href="/of/first" class="list-item-link">
                    <li class="list-item">First floor</li>
                </a>

                <a href="/of/ground" class="list-item-link">
                    <li class="list-item">Ground level</li>
                </a>

                <a href="/of/basement" class="list-item-link">
                    <li class="list-item">Basement</li>
                </a>
            </ul>
        </div>
    </div>
    
    
@endsection
