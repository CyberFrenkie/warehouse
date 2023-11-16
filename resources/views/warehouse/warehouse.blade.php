@extends('layout/layout')


@section('main')
<div class="warehouse-wrapper container-fluid d-flex flex-column">
    <img src="img/warehouse2.jpg" alt="img">
    <div class="container">
        <div class="warehouse-heading">
            <h1 class="f-heading">Warehouse</h1>
        </div>
    
        <div class="warehouse-sections d-flex ">
            <div class="in-wrap col-md-4 col-sm-12">
                <a href="/in" class="section-link one"> 
                    <h1>Arrived items</h1>
                
                </a>
            </div>
    
            <div class="out-wrap col-md-4 col-sm-12">
                <a href="/out" class="section-link two">
                    <h1>Given items</h1>        
                </a>
            </div>
    
            <div class="stock-wrap col-md-4 col-sm-12">
                <a href="/stock" class="section-link three">
                    <h1>Stock</h1>        
                </a>
            </div>
        </div>  
    </div>
    
    
</div>

@endsection