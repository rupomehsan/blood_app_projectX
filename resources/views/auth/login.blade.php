<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" href="{{asset('assates/css/fontawesome.min.css')}}"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('assates/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assates/css/style.css')}}">
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Document</title>
</head>
<body class="login"">
    <div class="container">
      <div class="logo">
        <a href="{{route('login')}}">
           <img src="{{asset('assates/images/logo.png')}}" alt="">
        </a>
      </div>
        <div class="row ">
             <div class="col-md-6">
              <div class="form-box">
                <div class="col-md-12 login-form">
                 <h1>Login</h1>
                 
                
                 <div class="under-line">
                     <i class="fas fa-tint"></i>
                 </div>
                 
                 @if (Session::has('message'))
                 <div class="alert alert-success font-weight-bold"> {{Session::get('message')}}</div>
                   
                @endif
                <form id="login" action=""  enctype="multipart/form-data">
              
                <div class="row">
                    <div class="col-md-12 col-12 login-form">
                        
                        <div class="form-group">
                          <label for=""><i class="far fa-envelope"></i> Email / Phone</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                            @error('email')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                           <div class="form-group">
                            
                            <label for=""><i class="fas fa-key"></i> Password</label>
                            <div class="password">
                                {{-- <i class="fas fa-key pass-icon"></i> --}}
                                <i class="fa fa-eye-slash pass-icon" aria-hidden="true"></i>
                            </div>
                            <input type="password" name="password " id="password" placeholder="Enter your password" class="form-control " value="{{old('password')}}">
                          
                           
                        </div>
                        
                     
                        
                      
                       
                      
                    </div>
                    
                   
                </div>
                   
                    
                     <div class="rgt-btm">
                      <button class="btn cs-button-lg mt-5" type="submit">Login</button>
                      <p>Need To <span style="color:red"> Blood </span> Donation?  <a href="{{route('registration.index')}}">Create Account?</a></p>
                      <a href="{{route('password.recover')}}">Forgot Password?</a>
                    </div>
                </form>
                
               
              </div>
              </div>
            </div>
            <div class="col-md-5">
                <div class="log-right">
                    <img src="{{asset('assates/images/login.png')}}" alt="">
               
                </div>
                   
            </div>
       
           
        </div>
    
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assates/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assates/js/bootstrap.min.js')}}"></script>
  <script>
    $(document).ready(function(){
      $('#login').submit(function(e){
        e.preventDefault();
          var email = $('#email').val();
          var password = $('#password').val();

          $.ajax({

             method   : 'post',
             url      : '{{route('login')}}',
             dataType : 'json', 
             data     : {

                "_token"    : '{{csrf_token()}}',
                'email'    : email,
                'password' : password,
               
             },

             success : function(res){
                  console.log(res);

                 if(res.status == 'validate_error'){
                      Swal.fire({
                      icon: 'error',
                      title: 'Validation Error',
                      text: 'Field must not be empty',
                    
                    })
                  }else if(res.status == "success"){

                      window.location.href = '{{route('dashboard.index')}}';

                  }
                 
             },
             error  : function(err){
                 console.log(err);
                
              },

           })
          
      })
    
      
    })
  </script>
</body>
</html>
