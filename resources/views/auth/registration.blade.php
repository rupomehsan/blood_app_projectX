<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('assates/css/fontawesome.min.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
        integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('assates/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assates/css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>



    </script>
    <style>
        #main_content {
            margin-top: 50px;

        }

        #main_content li {
            display: inline;
            list-style-type: none;
            padding: 10px 40px;
            border-radius: 5px;
            color: #292A0A;
            font-weight: bold;
            cursor: pointer;
        }

        #main_content li.notselected {

            color: #292A0A;
        }

        #main_content li.selected {

            color: #ffffff;
        }

        #main_content .hidden_desc {
            display: none;
            visibility: hidden;
        }

        #main_content #page_content {

            padding: 10px;
            margin-top: 9px;
            border-radius: 0px 5px 5px 5px;
            color: #2E2E2E;
            line-height: 1.6em;
            word-spacing: 4px;
        }

        .custom-select {
            position: relative;
            font-family: Arial;
        }

        .custom-select select {
            display: none;
            /*hide original SELECT element: */
        }

        .select-selected {
            background-color: DodgerBlue;
        }

        /* Style the arrow inside the select element: */
        .select-selected:after {
            position: absolute;
            content: "";
            top: 14px;
            right: 10px;
            width: 0;
            height: 0;
            border: 6px solid transparent;
            border-color: #fff transparent transparent transparent;
        }

        /* Point the arrow upwards when the select box is open (active): */
        .select-selected.select-arrow-active:after {
            border-color: transparent transparent #fff transparent;
            top: 7px;
        }

        /* style the items (options), including the selected item: */
        .select-items div,
        .select-selected {
            color: #ffffff;
            padding: 8px 16px;
            border: 1px solid transparent;
            border-color: transparent transparent rgba(0, 0, 0, 0.1) transparent;
            cursor: pointer;
        }

        /* Style items (options): */
        .select-items {
            position: absolute;
            background-color: DodgerBlue;
            top: 100%;
            left: 0;
            right: 0;
            z-index: 99;
        }

        /* Hide the items when the select box is closed: */
        .select-hide {
            display: none;
        }

        .select-items div:hover,
        .same-as-selected {
            background-color: rgba(0, 0, 0, 0.1);
        }

    </style>
    <title>Document</title>
</head>

<body class="login">
    <div class="container">
        <div class="logo">
            <a href="{{ route('login') }}">
                <img src="{{ asset('assates/images/logo.png') }}" alt="">
            </a>
        </div>


        <form id="registrationForm" action="" enctype="multipart/form-data">
            <div id="main_content">
                <div class='hidden_desc' id="page1_desc">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-box">
                                <div class="col-md-12 login-form">
                                    <h2>
                                        We Are Few More Steps Away From
                                        Making You a Donor
                                    </h2>
                                    <div class="dott">
                                        <div class="dotet"></div>
                                        <div class="dotet"></div>
                                        {{-- <div class="dotet"></div> --}}
                                    </div>

                                    {{-- <div class="under-line">
                                        <i class="fas fa-tint"></i>
                                    </div> --}}

                                    @if (Session::has('message'))
                                        <div class="alert alert-success font-weight-bold">
                                            {{ Session::get('message') }}
                                        </div>

                                    @endif


                                    <div class="row">
                                        <div class="col-md-12 col-12 login-form">

                                            <div class="form-group">
                                                <label for=""><i class="fa fa-user"
                                                        aria-hidden="true"></i>Age</label>
                                                <input type="text" name="age" id="age" class="form-control"
                                                    placeholder="Enter your Age" value="{{ old('email') }}">
                                                @error('email')
                                                    <div class="alert alert-danger">{{ $message }}</div>
                                                @enderror
                                            </div>


                                            <div class="form-group">
                                                <label for=""><i class="fas fa-tint"></i>Bloog Group</label>

                                                <select class="form-control" name="" id="bloodgp">


                                                    <option disabled selected>Select Blood Group</option>

                                                    <option value="A-">A(Negative)</option>
                                                    <option value="A+">A(Posative)</option>
                                                    <option value="AB+">AB(Negative)</option>
                                                    <option value="AB+">AB(Posative)</option>
                                                    <option value="O-">O(Negative)</option>
                                                    <option value="O+">O(Posative)</option>
                                                    <option value="B-">B(Negative)</option>
                                                    <option value="B+">B(Posative)</option>


                                                </select>

                                            </div>

                                            <div class="form-group gender">
                                                <label for=""><i class="fa fa-male"
                                                        aria-hidden="true"></i>Gender</label>
                                                <div class="row">
                                                    <div class="col-md-5">

                                                        <img src="{{ asset('assates/images/male.png') }}" alt=""
                                                            width="100"><br>
                                                        <input type="radio" name="gender" class="form-check-input"
                                                            value="male"> Male
                                                    </div>
                                                    <div class="col-md-2 or">OR</div>
                                                    <div class="col-md-5">

                                                        <img src="{{ asset('assates/images/female.png') }}" alt=""
                                                            width="100"><br>
                                                        <input type="radio" name="gender" class="form-check-input"
                                                            value="female">
                                                        Female

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="form-group gender">
                                                <label for=""><i class="fas fa-weight"></i>Weight</label>
                                                <div class="row mt-5">
                                                    <div class="col-md-5">
                                                        <img src="{{ asset('assates/images/weight.png') }}" alt=""
                                                            width="100"><br>
                                                        <input type="radio" name="weight" class="form-check-input"
                                                            value="50+">
                                                        Weight > 50
                                                    </div>
                                                    <div class="col-md-2 or">OR</div>
                                                    <div class="col-md-5">

                                                        <img src="{{ asset('assates/images/weight.png') }}" alt=""
                                                            width="100"><br>
                                                        <input type="radio" name="weight" class="form-check-input"
                                                            value="50-">
                                                        Weight < 50 </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="rgt-btm mt-5">
                                            <ul>
                                                {{-- <li class="selected" id="page1" onclick="change_tab(this.id);">Next</li> --}}
                                                {{-- <li class="notselected cs-button-lg " id="page2" onclick="change_tab(this.id);">Previous</li> --}}
                                            </ul>
                                            <button class="btn cs-button-lg mt-5" type="submit">Ragister</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="log-right">
                                    <img src="{{ asset('assates/images/more-info.png') }}" alt="">
                                    <div class="log-right-text">
                                        <div class="h3">We Need Your Information</div>
                                        <p>We Need These Information From You ToUnderstand the physical
                                            ConditionOf You
                                            To
                                            Be
                                            Able To
                                            Donate Blood</p>
                                    </div>


                                </div>

                            </div>
                        </div>
                    </div>

                    <div id="page_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <div class="col-md-12 login-form">
                                        <h1>Register</h1>
                                        <div class="under-line">
                                            <i class="fas fa-tint"></i>
                                        </div>
                                        <div class="dott mt-5">
                                            <div class="dotet"></div>
                                            <div class="dotet" style="background:rgb(238, 237, 237)"></div>
                                            {{-- <div class="dotet"></div> --}}
                                        </div>



                                        <div class="row">
                                            <div class="col-md-12 col-12 login-form">

                                                <div class="form-group">
                                                    <label for=""><i class="fa fa-user" aria-hidden="true"></i>Full
                                                        Name</label>
                                                    <input type="text" name="name" id="name" class="form-control"
                                                        placeholder="Enter your Email" value="{{ old('email') }}">

                                                </div>



                                                <div class="form-group">
                                                    <label for=""> <i class="fas fa-tint"
                                                            style="font-size: 18px;"></i>Phone</label>
                                                    <input type="phone" name="phone" id="phone" class="form-control"
                                                        placeholder="Enter your Phone" value="{{ old('phone') }}">
                                                </div>
                                                <div class="form-group">
                                                    <label for=""><i class="far fa-envelope"></i>
                                                        Email</label>
                                                    <input type="email" name="email" id="email" class="form-control"
                                                        placeholder="Enter your Email" value="{{ old('email') }}">
                                                    @error('email')
                                                        <div class="alert alert-danger">{{ $message }}</div>
                                                    @enderror
                                                </div>


                                                <div class="form-group">

                                                    <label for=""><i class="fas fa-key"></i>
                                                        Password</label>
                                                    <div class="password">
                                                        {{-- <i class="fas fa-key pass-icon"></i> --}}
                                                        <i class="fa fa-eye-slash pass-icon" aria-hidden="true"></i>
                                                    </div>
                                                    <input type="password" name="password " id="password"
                                                        placeholder="Enter your password" class="form-control "
                                                        value="{{ old('password') }}">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="rgt-btm mt-5">
                                            <ul>
                                                {{-- <button class="btn cs-button-lg mt-5" type="submit">Ragister</button> --}}
                                                <li class="selected cs-button-lg registerform" id="page1">
                                                    Next
                                                    <i class="fas fa-arrow-right"></i>
                                                    {{-- onclick="change_tab(this.id);" --}}
                                                </li>
                                                {{-- <li class="notselected" id="page2" onclick="change_tab(this.id);">Previous</li> --}}
                                            </ul>
                                            {{-- <button class="btn cs-button-lg mt-5" type="submit">Ragister</button> --}}
                                            <p>Already Have An Account? <a href="{{ route('login') }}">
                                                    <span style="font-weight: bold">login</span> </a></p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="log-right">
                                    <img src="{{ asset('assates/images/register.png') }}" alt="">

                                </div>

                            </div>
                        </div>
                        {{-- <li class="notselected" id="page3" onclick="change_tab(this.id);">Page3</li> --}}
                    </div>
                </div>
            </div>

        </form>
    </div>


    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
    <script src="{{ asset('assates/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assates/js/bootstrap.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"
        integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw=="
        crossorigin="anonymous"></script>

    <script>
        
        $(document).ready(function() {

             

            $('#page1').click(function() {

                if($('#name').val() == ''){
                    toastr.error("Name Field Is Required");
                }else if($('#phone').val() == ''){

                     toastr.error("Phone Field Is Required");

                }else if($('#email').val() == ''){

                     toastr.error("Email Field Is Required");
                    
                }else if($('#password').val() == ''){

                     toastr.error("Password Field Is Required");
        
                }
                else{

                    $('#page_content').addClass('hidden_desc')
                    $('#page1_desc').removeClass('hidden_desc')


                }
              
                // document.getElementById("page_content").innerHTML = document.getElementById('page1' +
                //     "_desc").innerHTML;


                // var name = $('#name').val()
                // var email = $('#email').val();
                // var password = $('#password').val();
                // var phone = $('#phone').val();

                // var name = document.getElementById('name').value
                // var email = document.getElementById('email').value
                // var password = document.getElementById('password').value
                // var phone = document.getElementById('phone').value

                // console.log(name, email, password, phone)

                document.getElementById("page1").className = "notselected";
                document.getElementById("page2").className = "notselected";
                document.getElementById("page3").className = "notselected";
                document.getElementById('page1').className = "selected";

            })

            var gender = null;
            var weight = null;

            $('[name="gender"]').click(function() {
                gender = $(this).val()
                console.log(gender)
            })
            $('[name="weight"]').click(function() {
                weight = $(this).val()
                console.log(weight)
            })

            $('#registrationForm').submit(function(e) {
                e.preventDefault();
             
                if($('#age').val() == ''){
                     toastr.error("Age Field Is Required");
                }else if($('#bloodgp').val() == null){
                     toastr.error("BloodGroup Field Is Required");
                }else if(weight == null){
                     toastr.error("Weight Field Is Required");
                }else if(gender == null){
                     toastr.error("Gender Field Is Required");
                }else{

                var name = $('#name').val();
                var email = $('#email').val();
                var password = $('#password').val();
                var phone = $('#phone').val();
                var age = $('#age').val()
                var bloodgp = $('#bloodgp').val();
                // console.log('Last Call', bloodgp, name, email, phone, password, age, gender, weight)

                $.ajax({

                    method: 'post',
                    url: '{{ route('registration.store') }}',
                    dataType: 'json',
                    data: {

                        "_token": '{{ csrf_token() }}',
                        'name': name,
                        'email': email,
                        'password': password,
                        'phone': phone,
                        'age': age,
                        'bloodgp': bloodgp,
                        'gender': gender,
                        'weight': weight,


                    },

                    success: function(res) {
                        console.log(res);

                        if (res.status == 'success') {
                            Swal.fire({
                                position: 'center-center',
                                icon: 'success',
                                title: 'Registration Successfully Created',
                                showConfirmButton: false,
                                timer: 1500
                            })
                            setTimeout(function(){
                               window.location.href = '{{route('login')}}'
                            },2000)
                          

                        } else if (res.status == 'validation_error') {
                            Swal.fire({
                                icon: 'error',
                                title: 'Validation Error',
                                text: 'Field must not be empty',

                            })
                        }

                    },
                    error: function(err) {
                        console.log(err);

                    },

                })

                }

              


            })


        })
    </script>

</body>

</html>
