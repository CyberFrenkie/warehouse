@extends('layout')


@section('content')
    <div class="second-wrapper">
        <div class="heading col-12">
            <h1>Second floor</h1>
        </div>
        
        <div class="levels">
            <ul class="level-list">
                
                <a href="/second" class="list-item-link">
                    <li class="list-item">Second floor</li>
                </a>

                <a href="/first" class="list-item-link">
                    <li class="list-item">First floor</li>
                </a>

                <a href="ground" class="list-item-link">
                    <li class="list-item">Ground level</li>
                </a>

                <a href="/basement" class="list-item-link">
                    <li class="list-item">Basement</li>
                </a>
            </ul>
        </div>
    </div>
    
    
@endsection
