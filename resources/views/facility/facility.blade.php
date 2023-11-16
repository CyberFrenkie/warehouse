@extends('layout/layout')


@section('main')
    <div class="facility-wrapper container-fluid d-flex flex-column">

        <div class="facility-heading">
            <h1 class="f-heading">Facility layout</h1>
        </div>

        <div class="facility-sections d-flex ">
            <div class="nf-wrap col-md-4 col-sm-12">
                <a href="/nf" class="section-link one"> 
                    <h1>New</h1>
                    <img src="/img/new_deh.jpg" alt="" class="bckg-img">
                
                </a>
            </div>
    
            <div class="of-wrap col-md-4 col-sm-12">
                <a href="/of" class="section-link two">
                    <h1>Old</h1>
                    <img src="/img/old_deh.jpg" alt="" class="bckg-img">            
                </a>
            </div>
    
            <div class="pool-wrap col-md-4 col-sm-12">
                <a href="/pool" class="section-link three">
                    <h1>Sedimentation</h1>
                    <img src="/img/pool.jpg" alt="" class="bckg-img">            
                </a>
            </div>
        </div>
       
        
    </div>
   
    
@endsection