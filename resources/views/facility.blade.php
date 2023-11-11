@extends('layout')


@section('content')
<div class="facility-wrapper container-fluid d-flex flex-row">

    <div class="nf-wrap col-md-4 col-sm-12">
        <a href="/nf" class="nf-link link"> 
            <h1>Nova</h1>
            <img src="/img/filtraza.jpg" alt="" class="bckg">
           
        </a>
    </div>

    <div class="of-wrap col-md-4 col-sm-12">
        <a href="/of" class="of-link link">
            <h1>Stara</h1>
            <img src="/img/filtraza.jpg" alt="" class="bckg">            
        </a>
    </div>

    <div class="pool-wrap col-md-4 col-sm-12">
        <a href="/pool" class="of-link link">
            <h1>Taloznici</h1>
            <img src="/img/filtraza.jpg" alt="" class="bckg">            
        </a>
    </div>
    
</div>
   
    
@endsection
