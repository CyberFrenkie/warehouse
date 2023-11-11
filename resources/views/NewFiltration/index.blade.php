@extends('layout')


@section('content')
    <div class="of-wrapper">
        <div class="heading col-12">
            <h1>New filtration</h1>
        </div>
        
        <div class="levels">
            <ul class="level-list">
                
                <a href="/nf/second" class="list-item-link">
                    <li class="list-item">Second floor</li>
                </a>

                <a href="/nf/first" class="list-item-link">
                    <li class="list-item">First floor</li>
                </a>

                <a href="/nf/ground" class="list-item-link">
                    <li class="list-item">Ground level</li>
                </a>

                <a href="/nf/newPS" class="list-item-link">
                    <li class="list-item">Nova pumpna stanica</li>
                </a>
            </ul>
        </div>
    </div>
    
    
@endsection
