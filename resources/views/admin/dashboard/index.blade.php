@extends('layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid xyz">
        <div class="row">
            <div class="col-md-9 col-sm-12">
                <div class="row">
                    <div class="col-md-7 top-left">
                        <div class="search-bd">
                            <h4>search for blood?</h4>
                        </div>
                        <div class="underline"></div>
                        <div class="wrt-post">
                            <span><i class="fas fa-edit"></i></span>
                            <p>write post</p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <p class="bnt-st">you have <br> donate blood</p>
                                <div class="dash-box dash-box2">

                                    <div class="dash-text float-left">
                                        <h6> <span>102</span>
                                            <p>days ago</p>
                                        </h6>

                                    </div>

                                </div>
                                <p class="can-dnt"> ** you can blood donate know</p>
                            </div>
                            <div class="col-md-6">
                                <p class="bnt-st">People Searching <br> For Blood (O-)</p>
                                <div class="dash-box dash-box2">

                                    <div class="dash-text float-left">
                                        <h6> <span>24</span>
                                            <p>Near you</p>
                                        </h6>


                                    </div>

                                </div>
                                <p class="can-dnt"> ** you can blood donate know</p>
                            </div>



                        </div>


                    </div>

                    <div class="col-md-5">
                        <img src="{{asset('assates/images/blood-mg.JPG')}}" width="100%">
                    </div>
                </div>
                <div class="bootom-part">
                    <div class="search-bd">
                        <h4>who are seeking for blood</h4>
                    </div>
                    <div class="underline"></div>
                    <div class=" mt-b d-flex seeking-blood">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="search-bar">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Select location"
                                            aria-label="Search">
                                        <button type="submit"><i class="fas fa-map-marker-alt"
                                                aria-hidden="true"></i></button>
                                    </form>
                                </div>
                            </div>
                            <div class="col-md-6 ">
                                <div class="search-bar">
                                    <form class="form-inline my-2 my-lg-0">
                                        <input class="form-control mr-sm-2" type="search" placeholder="Near You"
                                            aria-label="Search">
                                        <button type="submit"><i class="fas fa-search"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="row" id="postdata">

                     

                        {{-- <div class="col-md-4">

                            <a href="{{route('dashboard.post')}}"
                                style="list-style: none;text-decoration:none;color:black">
                                <div class="dash-box need-dnr emergency">
                                    <div class="profile-top">
                                        <img src="{{asset('assates/images/profile.jpg')}}" alt="" height="30"
                                            width="30">
                                        <h6 class="name">Rupomehsan</h6>
                                        <i class="fas fa-tint"></i>
                                        <div class="bld-nm"> <span>B</span>(posative)</div>
                                    </div>
                                    <hr style="background: white;">
                                    <div class="need-dnr-bottom">
                                        <div class="col-8 left">
                                            <p> <i class="fas fa-map-marker-alt"></i> Dhaka,bangaldesh</p>
                                            <p> <i class="fas fa-plus-square"> </i> Squire hospital </p>
                                        </div>
                                        <div class="col-4">


                                            <i class="fas fa-bell"></i><br><br>
                                            <p>emergency</p>


                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="col-md-4 userpost">

                            <a href="{{route('dashboard.post')}}"
                                style="list-style: none;text-decoration:none;color:black">
                                <div class="dash-box need-dnr">
                                    <div class="profile-top">
                                        <img src="{{asset('assates/images/profile.jpg')}}" alt="" height="30"
                                            width="30">
                                        <h6 class="name">Rupomehsan</h6>
                                        <i class="fas fa-tint"></i>
                                        <div class="bld-nm"> <span>B</span>(posative)</div>
                                    </div>
                                    <hr style="background: white;">
                                    <div class="need-dnr-bottom">
                                        <div class="col-8 left">
                                            <p> <i class="fas fa-map-marker-alt"></i> Dhaka,bangaldesh</p>
                                            <p> <i class="fas fa-plus-square"></i> Squire hospital</p>
                                        </div>
                                        <div class="col-4">
                                            <div style="opacity:0;">
                                                <i class="fas fa-bell"></i><br><br>
                                                <p>emergency</p>
                                            </div>




                                        </div>
                                    </div>
                                </div>
                            </a>



                        </div> --}}







                    </div>
                </div>


            </div>
            @include('partial.right_sight')



            @endsection
@push('custom_js')

<script>
    $(document).ready(function(){
        $.ajax({
            url : '{{url('api/post')}}',
            method : 'get',
            dataType : 'json',
            success : function(res){
                console.log(res)
                if(res.status == 'success'){
                    
                    res.data.data.forEach(function(item){
                        // console.log(item)
                        $('postdata').empty()
                        $('#postdata').append(`
                               <div class="col-md-4 ${item.emer_status == 'on' ? 'userpost' :'' }">
                                    <a href="/admin/post/${item._id}"
                                        style="list-style: none;text-decoration:none;color:black">
                                        <div class="dash-box need-dnr emergency">
                                            <div class="profile-top">
                                                <img src="{{asset('assates/images/profile.jpg')}}" alt="" height="30"
                                                    width="30">
                                                <h6 class="name">${item.user.name}</h6>
                                                <i class="fas fa-tint"></i>
                                                <div class="bld-nm"> <span></div>
                                                 <div class="bld-nm"> <span style="font-weight:bold;">${item.bloodgp}</span></div>
                                            </div>
                                            <hr style="background: white;">
                                            <div class="need-dnr-bottom">
                                                <div class="col-md-8 col-8">
                                                    <div class="left">
                                                     <p> <i class="fas fa-map-marker-alt"></i>${item.location}</p>
                                                     <p> <i class="fas fa-plus-square"> </i>${item.hosp_name} </p>
                                                    </div>
                                                   
                                                </div>
                                                <div class="col-4 col-md-4" style="display: block">
                                                        <div class="${item.emer_status == 1 ? '' :'emr-hide' }">
                                                          <i class="fas fa-bell"></i><br><br>
                                                           <p>emergency</p>
                                                       </div>
                                                    

                                                </div>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                        
                        `)
                    })
                }
            },
            error : function(err){
                console.log(err)
            }
        });
    })
</script>
    
@endpush
