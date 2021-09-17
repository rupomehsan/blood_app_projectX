@extends('layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid xyz">
            <div class="profile-container">
                <div class="row">
                    <div class="col-md-5">
                        <div class="profile">
                            <div class="icon">
                                <button type="button" class="btn btn-danger btn-lg " data-toggle="modal"
                                    data-target="#myModal"> <i class="fas fa-edit"></i></button>
                            </div>
                            {{-- @if ($profiles->image)
                     <img src="{{$profiles->image}}" alt="">
                            @else
                            <img src="{{asset('assates/images/avatar.png')}}" alt="">
                            @endif --}}
                            <img src="{{asset('assates/images/avatar.png')}}" alt="">

                            <h4>Rupom ehsan</h4>

                            {{-- @if($profiles->user_desc)
                            <p>{{$profiles->user_desc}}</p>
                            @endif --}}
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi reprehenderit quae
                                dicta molestias aspernatur, autem quos nostrum nihil. Ducimus sequi sit explicabo
                                consectetur, corrupti est reprehenderit repudiandae deserunt officia quibusdam accusamus
                                enim molestias voluptatem eius. Quasi qui, aspernatur distinctio officia fugit non
                                facilis, iure, reiciendis blanditiis nobis quia perferendis voluptate!</p>

                            <p><i class="fas fa-map-marker-alt"></i> location : Dhaka,bangladesh</p>
                            <div class="bld-rp">
                                <i class="fas fa-tint"></i>
                                <p>blood group</p>
                                <span>B(posative)</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="activity">
                            <div class="heading">
                                <h2>activity log</h2>
                                <div class="underline"></div>
                            </div>
                            <table class="profile-table">
                                <tr>
                                    <th>Date</th>
                                    <th>time</th>
                                    <th>action</th>
                                    <th></th>

                                    <div class="tbl-underline">
                                        <div class="dot"></div>
                                    </div>
                                </tr>
                                <tr></tr>

                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>
                                <tr>
                                    <td>01/05/2021</td>
                                    <td>12:43:02</td>
                                    <td>login vhia google crome</td>
                                </tr>

                            </table>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="btn close btn-primary" data-dismiss="modal">Close</button>

                        </div>
                        @if (Session::has('message'))
                        <div class="alert alert-success font-weight-bold"> {{Session::get('message')}}</div>
                        @endif
                        <form id="updateProfile" method="post">
                            @csrf
                            <div class="modal-body">


                               <input type="hidden" id="profile_id" value="{{$userprofile->_id}}">
                                <label for="" style="float: left">Enter your Bio-data :</label>
                                <div class="form-group">
                                    <textarea name="user_desc" id="user_desc" cols="30" rows="10"
                                        class="form-control"></textarea>
                                   
                                </div>
                                <div class="form-group">
                                  <input type="text" id="name" name="name" class="form-control" placeholder="Update Your Name" value="{{$userprofile->name}}"> 
                                </div>
                                 <div class="form-group">
                                  <input type="text" id="age" name="age" class="form-control" placeholder="Update Your Age" value="{{$userprofile->age}}"> 
                                </div>
                                <div class="form-group">
                                  <input type="text" id="phone" name="phone" class="form-control" placeholder="Update Your Phone" value="{{$userprofile->phone}}"> 
                                </div>
                                <div class="form-group">
                                  <input type="text" id="address" name="address" class="form-control" placeholder="Update Your Address" value="{{$userprofile->address}}"> 
                                </div>
                                <div class="form-group">
                                  <select name="" id="bloodgp" class="form-control">
                                     <option selected disabled>Select Your Bloodgp</option>
                                     <option value="A-">A(Negative)</option>
                                     <option value="A+">A(Posative)</option>
                                     <option value="AB+">AB(Posative)</option>
                                     <option value="AB-">AB(Negative)</option>
                                     <option value="B-">B(Negative)</option>
                                     <option value="B+">B(Posative)</option>
                                     <option value="O-">O(Negative)</option>
                                     <option value="O+">O(Posative)</option>
                                  </select>
                                </div>
                                 <div class="form-group">
                                  <label for="" style="float: left">Upload Image : </label>
                                  <input type="file" id="image" name="image"  placeholder="Update Your Age" value=""> 
                                </div>

                                <button type="submit" class="btn btn-danger mt-3">Submit</button>
                            </div>

                        </form>

                    </div>


                </div>

            </div>




            @endsection







            @push('custom_js')
            <script>
                $(document).ready(function () {
                    $('#updateProfile').submit(function (e) {
                        e.preventDefault();
                        $user_desc = $('#user_desc').val();
                        $name = $('#name').val();
                        $age = $('#age').val();
                        $phone = $('#phone').val();
                        $address = $('#address').val();
                        $bloodgp = $('#bloodgp').val();
                        $profile_id = $('#profile_id').val();
                       
                        $.ajax({
                            url: '{{url('/api/userprofile')}}/' + $profile_id,
                            method: 'post',
                            data: {
                                '_method': 'PATCH',
                                '_token': '{{csrf_token()}}',
                                'age': $age,
                                'phone': $phone,
                                'address': $address,
                                'bloodgp': $bloodgp,
                                'user_desc': $user_desc,
                                'name': $name,
                                
                            },
                            success: function (res) {
                                console.log(res);
                                if (res.status === "validation_error") {
                                    toastr.error('Field Is required')
                                   
                                }else if(res.status ==='success'){
                                     toastr.success('Successfully Update Profile')
                                      setTimeout((function () {
                                        window.location.reload();
                                     }), 1000);
                                }
                            },
                            error: function (err) {
                                console.log(err);
                            }
                        })
                    })
                })

            </script>
            @endpush
