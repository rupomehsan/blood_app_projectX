
   
@extends('layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid xyz">
        <div class="row">
            <div class="user-dashbord view_post">
        <div class="row">
            <div class="col-md-9">
                <div class="wrapper">
                    <div class="top-part">
                        <div class="imgname">
                            <img src="{{asset('assates/images/profile.jpg')}}" alt="">
                            <h6 class="name">{{$userpost->user->name}}</h6>
                            <i class="fas fa-tint"></i><i class="bld-gp">{{$userpost->bloodgp}}</i>
                        </div>
                        
                       
                        <div class="emg-blg {{($userpost->emer_status == 1 ? '' : 'emr-hide')}}">
                           
                            {{-- @if ($postdoner->emergency == 1) --}}
                               <i class="fas fa-bell"></i><br>
                              <span>emergency</span>
                            {{-- @endif --}}
                            {{-- <i class="fas fa-bell"></i><br>
                           <span>emergency</span> --}}
                        </div>
                        
    
                    </div>
                    <div class="middle-part">
                        <p><i class="fas fa-map-marker-alt"></i>{{$userpost->location}}</p>
                        <p> <i class="fas fa-plus-square"></i>{{$userpost->hosp_name}}</p>
                        @if ($userpost->emer_status !=  1 )
                             <p> <i class="fa fa-calendar" aria-hidden="true"></i>{{$userpost->date}}</p>
                        @endif
                       
                       <p>{{$userpost->desc}}</p>
                    </div>
                    <div class="bottom-part">
                        <p class="number"><i class="fas fa-phone-alt"></i>{{$userpost->phone}}</p>
                        <div class="donatin-part">
                            <p>are you Donating?</p>
                            {{-- <button class="btn btn-danger" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Yes I'm</button> --}}
                           <!-- Button trigger modal -->
                       
                       


                            {{-- @if ($userdonate)
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">Can't Apply</button>
                            @elseif ($countapply > 3)
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">3 person Apply</button>
                            @else
                            <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal">Yes I'm</button> 
                            @endif --}}
                            @if ($applyuser)
                                 <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">Appied</button> 
                                 @else 
                                    <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal">Yes I'm</button> 
                            @endif
                           
                            <!-- Trigger the modal with a button -->
                            
                            {{-- @if (!$userdonate)
                            <button type="button" class="btn btn-danger btn-lg " data-toggle="modal" data-target="#myModal">Yes I'm</button>    
                            @else
                            <button type="button" class="btn btn-danger btn-lg disabled" data-toggle="modal" data-target="#myModal">Can't Apply</button>
                            @endif
                            --}}
                          
                            <!-- Modal -->
                            <div class="modal fade" id="myModal" role="dialog">
                              <div class="modal-dialog">
                              
                                <!-- Modal content-->
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <button type="button" class="btn close btn-primary" data-dismiss="modal">Close</button>
                                   
                                  </div>
                                  @if (Session::has('message'))
                                  <div class="alert alert-success font-weight-bold" > {{Session::get('message')}}</div> 
                                  @endif
                                  <form id="applyForm" method="post">
                                    @csrf
                                      <div class="modal-body">
                                
                                            <input type="hidden" name="post_id" id="post_id" value="{{$userpost->_id}}">
                                            <label for="" style="float: left">Enter your Date :</label>
                                            <div class="form-group">
                                              <input type="text" class="form-control" name="date" id="date" placeholder="D/M/Y">
                                              @error('bloodgp_id')
                                              <div class="alert alert-danger">{{$message}}</div>
                                              @enderror
                                              <button type="submit" class="btn btn-danger mt-3">Apply Now</button>
                                            </div>
                                          
                                   
                                      </div>
                                      
                                  </form>
                                 
                                </div>
                                
                             
                            </div>
                            
                          </div>





                        </div>
                      
                    </div>
                   
                </div>
               
              </div>
              @include('partial.right_sight')
        </div>
      
    </div>
          



            @endsection
@push('custom_js')
    <script>
        $(document).ready(function(){
            $('#applyForm').submit(function(e){
                e.preventDefault()
   
                    $date = $('#date').val();
                    $post_id = $('#post_id').val();

                    $.ajax({
                        url : '{{url('/admin/post/apply')}}',
                        method : 'post',
                        data : {
                            "_token"    : '{{csrf_token()}}',
                            "date"    : $date,
                            "post_id" : $post_id,
                        },

                        success:function(data){
                            console.log(data)
                            if(data.status === "validation_error"){
                                toastr.error("Field Must Not Be Empty")

                            }else if(data.status == 'success'){
                                 toastr.success("You Are Successfully Applyed")
                                  setTimeout((function() {
                                    window.location.reload();
                                    }), 1000);
                            }
                           

                        },
                        error : function(err){
                            console.log(err);
                           
                        
                        }


                    })

                
               


               

            })
        })
    </script>
@endpush
