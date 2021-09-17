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
    <script>
 function change_tab(id)
 {
   document.getElementById("page_content").innerHTML=document.getElementById(id+"_desc").innerHTML;
   document.getElementById("page1").className="notselected";
   document.getElementById("page2").className="notselected";
   document.getElementById("page3").className="notselected";
   document.getElementById(id).className="selected";
 }
</script>
<style>
    #main_content
{
 margin-top:50px;

}
#main_content li
{
    display: inline;
    list-style-type: none;
    padding: 10px 40px;
    border-radius: 5px;
    color: #292A0A;
    font-weight: bold;
    cursor: pointer;
}
#main_content li.notselected
{

 color:#292A0A;	
}
#main_content li.selected
{

 color:white;	
}
#main_content .hidden_desc
{
 display:none;
 visibility:hidden;
}
#main_content #page_content
{

 padding:10px;
 margin-top:9px;
 border-radius:0px 5px 5px 5px;
 color:#2E2E2E;
 line-height: 1.6em;
 word-spacing:4px;
}

#phoneInput .form-group {
  min-width: 300px;
  width: 50%;
  display: flex;
  border: 1px solid rgba(96,100,104,0.3);
}

#phoneInput .letter {
  height: 43px;
  border-radius: 0;
  border: none;
  text-align: center;
  max-width: calc((100% / 7) - 1px);
  flex-grow: 1;
  flex-shrink: 1;
  flex-basis: calc(100% / 10);
  outline-style: none;
  padding: 5px 0;
  font-size: 18px;
  font-weight: bold;
}
#phoneInput{
  width: 70%;
  margin:0 auto;
}

.rdc{
  color: red;
}
.clw{
  color: white;
}

#phoneInput .letter + .letter {
  border-left: 1px solid rgba(96,100,104,0.3);
}

@media (max-width: 480px) {
  #phoneInput .letter {
      font-size: 16px;
      padding: 2px 0;
      height: 38px;
  }
}
</style>
    <title>Document</title>
</head>
<body class="login"">
    <div class="container">
      <div class="logo">
        <a href="{{route('login')}}">
           <img src="{{asset('assates/images/logo.png')}}" alt="">
        </a>
       
      </div>
       
          
       
           <div id="main_content" class="forgate-pass">
                <div class='hidden_desc' id="page1_desc">
                       <div class="row">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <div class="col-md-12 login-form">
                                       <h3>Forgate Password</h3>
                                    <div class="under-line">
                                        <i class="fas fa-tint"></i>
                                    </div>
                                    <p class="mt-5">
                                      <i class="far fa-envelope"></i>  We have sent a code to your email address. Write the code here
                                    </p>
                                 
                                  
                                    {{-- <div class="under-line">
                                        <i class="fas fa-tint"></i>
                                    </div> --}}
                                    
                                    @if (Session::has('message'))
                                    <div class="alert alert-success font-weight-bold"> {{Session::get('message')}}</div>
                                    
                                    @endif
                                    <form id="login" action=""  enctype="multipart/form-data">
                                
                                    <div class="row">
                                        <div class="col-md-12 col-12 login-form">

                                          

                                            
                                         <div id="phoneInput">
                                            <div class="form-group phone">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                              <input type="text" name="letters[]" class="letter"
                                                    pattern="[0-9]*" inputmode="numeric" maxlength="1">
                                             
                                            </div>
                                        </div>

                                        
                                        </div>
                                        
                                    
                                    </div>
                                    
                                        
                                        <div class="rgt-btm ">
                                            <ul>
                                                  {{-- <li class="selected" id="page1" onclick="change_tab(this.id);">Next</li> --}}
                                                 {{-- <li class="notselected cs-button-lg " id="page2" onclick="change_tab(this.id);">Previous</li> --}}
                                            </ul>
                                        <button class="btn cs-button-lg mt-5" type="submit">verify</button>
                                        <p>Didn’t Get The Code? It Can Take Upto 3 minutes 
                                          To Reach</p>
                                          <a href="" style="color : #c70100;">Resend Code</a>
                                        
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

                        {{-- <div class='hidden_desc' id="page2_desc">
                        <h2>Page 2</h2>
                        
                        </div>
                         --}}
                        {{-- <div class='hidden_desc' id="page3_desc">
                        <h2>Page 3</h2>
                        Hello this is Page 3 description and this is just a sample text .This is the demo of Multiple Tab In Single Page Using JavaScript and CSS. 
                        Hello this is Page 3 description and this is just a sample text .This is the demo of Multiple Tab In Single Page Using JavaScript and CSS.
                        </div> --}}
                        
                        <div id="page_content">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-box">
                                    <div class="col-md-12 login-form">
                                    <h3>Forgate Password</h3>
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
                                            <label for=""><i class="fas fa-email"></i> Email</label>
                                                <input type="email" name="email" id="email" class="form-control" placeholder="Enter your Email" value="{{old('email')}}">
                                                @error('email')
                                                <div class="alert alert-danger">{{$message}}</div>
                                                @enderror
                                            </div>

                                           
                                            
                                        
                                            
                                        
                                        
                                        
                                        </div>
                                        
                                    
                                    </div>
                                    
                                        
                                        <div class="rgt-btm mt-5">
                                             <ul>
                                                  <li class="selected cs-button-lg clw" id="page1" onclick="change_tab(this.id);">GetCode</li>
                {{-- <li class="notselected" id="page2" onclick="change_tab(this.id);">Previous</li> --}}
                                            </ul>
                                        {{-- <button class="btn cs-button-lg mt-5" type="submit">Ragister</button>
                                        <p>Already Have An Account? <a href="{{route('login')}}"> <span style="font-weight: bold">login</span> </a></p> --}}
                                        
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
                    
                        {{-- <li class="notselected" id="page3" onclick="change_tab(this.id);">Page3</li> --}}
                    </div>
              
            </div>
      
    
</div>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="{{asset('assates/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assates/js/bootstrap.min.js')}}"></script>
  <script src="/path/to/dist/jquery.inputLettering.min.js"></script>

  <script>
    $('#phoneInput').letteringInput({
        inputClass: 'letter'
      });
      $('#phoneInput').letteringInput({
     inputClass: 'letter',
     forbiddenKeyCodes: [ 9, 16, 17, 18, 20, 27, 32, 33, 34, 38, 40, 45, 144 ]
   });
   $('#phoneInput').letteringInput({
    inputClass: 'letter',
    onFocusLetter: function() {},
    onBlurLetter: function() {},
    onLetterKeyup: function($item, event) {},
    onSet: function($el, event, value) {}
   });
  </script>
  <script>
    $(document).ready(function(){
      $('#registration').submit(function(e){
        e.preventDefault();
          var name = $('#name').val();
          var email = $('#email').val();
          var password = $('#password').val();
      
          console.log(fname,lname,email,password);
          $.ajax({

             method   : 'post',
             url      : '{{route('registration.store')}}',
             dataType : 'json', 
             data     : {

                "_token"    : '{{csrf_token()}}',
                'name'    : fname,
                'email'    : email,
                'password' : password,
               
             },

             success : function(res){
                  console.log(res);

                  if(res.status == 'success'){
                      Swal.fire({
                        position: 'center-center',
                        icon: 'success',
                        title: 'Registration Successfully Created',
                        showConfirmButton: false,
                        timer: 1500
                      })
                       $('#fname').val('');
                  $('#lname').val('');
                  $('#email').val('');
                  $('#password').val('');
                  }else if(res.status == 'validation_error'){
                      Swal.fire({
                      icon: 'error',
                      title: 'Validation Error',
                      text: 'Field must not be empty',
                    
                    })
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
