@extends('layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid xyz">
        <div class="row">
            <div class="maincontainer">
                <div class="leftwrapper">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="heading">
                                        <h2>Donations</h2>
                                        <div class="underline"></div>
                                    </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                    <div class="heading">
                                        <h2>service taken</h2>
                                        <div class="underline"></div>
                                    </div>
                                
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4"></div>
                            </div>
                        {{-- @if (count($histories)) 
                            @foreach ($histories as $history) --}}
                            {{-- <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="section">
                                    <div class="year"></div>
                                    <div class="month">

                                        <span> </span> 
                                        <p></p>
                                    </div>
                                    
                                
                                    
                        
                                </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="location">
                                    <p><i class="fas fa-map-marker-alt"></i> </p>
                                    <p><i class="fas fa-plus-square"></i></p>
                                    
                        
                                </div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-4">
                                <div class="blod-stts">
                                    <p>O+</p>
                                    <span></span>
                                </div>
                                </div>
                            </div> --}}
                            {{-- @endforeach
                        @endif --}}
                        <div class="row">
                            <div class="col-md-4">
                            <div class="section">
                                <div class="year">2021</div>
                                <div class="month">
                                    <span>january </span> 
                                    <p>12</p>
                                </div>
                                
                            
                                
                    
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="location">
                                <p><i class="fas fa-map-marker-alt"></i> shyamoli,dhaka 1207</p>
                                <p><i class="fas fa-plus-square"></i> idne sina hospital</p>
                                
                    
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="blod-stts">
                                <p>O+</p>
                                <span>121 days ago</span>
                            </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-4">
                            <div class="section">
                                <div class="year">2020</div>
                                <div class="month">
                                    <span>september </span> 
                                    <p>05</p>
                                </div>
                            </div>
                            <div class="section">
                                
                                <div class="month">
                                    <span>may </span> 
                                    <p>23</p>
                                </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="location">
                                <p><i class="fas fa-map-marker-alt"></i> shyamoli,dhaka 1207</p>
                                <p><i class="fas fa-plus-square"></i> idne sina hospital</p>
                                
                    
                            </div>
                            <div class="location">
                                <p><i class="fas fa-map-marker-alt"></i> shyamoli,dhaka 1207</p>
                                <p><i class="fas fa-plus-square"></i> idne sina hospital</p>
                                
                    
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="blod-stts">
                                <p>O+</p>
                                <span>121 days ago</span>
                            </div>
                            <div class="blod-stts">
                                <p>O+</p>
                                <span>121 days ago</span>
                            </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                            <div class="section">
                                <div class="year">2019</div>
                                <div class="month">
                                    <span>december </span> 
                                    <p>01</p>
                                </div>
                                
                            
                                
                    
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="location">
                                <p><i class="fas fa-map-marker-alt"></i> shyamoli,dhaka 1207</p>
                                <p><i class="fas fa-plus-square"></i> idne sina hospital</p>
                                
                    
                            </div>
                            </div>
                            <div class="col-md-4">
                            <div class="blod-stts">
                                <p>O+</p>
                                <span>121 days ago</span>
                            </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-5 donation-img">
                        
                        <img src="{{asset('assates/images/donation.JPG')}}" alt="">
                    </div>
                </div>
            
            </div>
            
            </div>
           



            @endsection
