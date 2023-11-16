@extends('layout/layout')


@section('main')
    <div class="of-wrapper">
        <div class="heading col-12">
            <h1>New filtration</h1>
        </div>
        
        <div class="levels">
            <ul class="level-list">
                
                <a href="/nf/second" class="list-item-link">
                    <li class="list-item">
                        <img src="/img/zijin.png" alt="" class="bckg-img">
                        <h1>Second floor</h1>
                    </li>
                </a>

                <a href="/nf/first" class="list-item-link">
                    <li class="list-item">
                        <img src="/img/zijin.png" alt="" class="bckg-img">
                        <h1>First floor</h1>
                    </li>
                </a>

                <a href="/nf/ground" class="list-item-link">
                    <li class="list-item">
                        <img src="/img/zijin.png" alt="" class="bckg-img">
                        <h1>Ground level</h1>
                    </li>
                </a>

                <a href="/nf/newPS" class="list-item-link">
                    <li class="list-item">
                        <img src="/img/zijin.png" alt="" class="bckg-img">
                        <h1>Nova pumpna stanica</h1>
                    </li>
                </a>
            </ul>
        </div>
    </div>
    
    
@endsection