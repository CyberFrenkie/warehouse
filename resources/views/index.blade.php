@extends('layout/layout')


@section('main')
    <div class="front-page-wrap">
        <div class="filtration half-page col-md-6 col-sm-12 ">            
            <img src="/img/filtraza.jpg" alt=""  class="bckg-img" >
            <a href="/facility" class="section-link one">
                <h1>Facility layout</h1>
            </a>
            
        </div>
        <div class="warehouse half-page col-md-6 col-sm-12 ">
            <img src="/img/warehouse.jpg" alt="" class="bckg-img">
            <a href="/warehouse" class="section-link two">
                <h1>Warehouse</h1>
            </a>
            
        </div>
    </div>        
    
@endsection