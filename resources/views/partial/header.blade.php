<!DOCTYPE html>
<html lang="en" >
<head>
   <meta charset="UTF-8">
   <title>Blood Management system </title>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css'> -->
   <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="{{asset('assates/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/dataTables.bootstrap5.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/all.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/fontawesome.min.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/style.css')}}">
   <link rel="stylesheet" href="{{asset('assates/css/responsive.css')}}">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css"
        integrity="sha512-vKMx8UnXk60zUwyUnUPM3HbQo8QfmNx7+ltw8Pm5zLusl1XIfwcxo8DbWCqMGKaWeNxWA8yrx5v3SaVpMvR3CA=="
        crossorigin="anonymous" />
   <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
   integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
   crossorigin=""></script>
   <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
   integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
   crossorigin=""/>
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<!-- partial:index.partial.html -->

      <nav class="navbar navbar-light bg-light fixed-top">
      <div class="container"> 
       
        
         <div class="user-profile">
            <div class="user-image">
               <ul>
                 
                  <ul>
                     <li>
                        <a href="#">
                          <span>{{auth()->user()->name}}</span>
                           <img src="{{asset('assates/images/profile.jpg')}}" alt="">
                           <i class="fas fa-caret-down"></i>
                        </a>
                     </li>
                  </ul>
               </ul>
            </div>
             <div class="user-info">
                  <div class="user-child-profile">
                     <img src="{{asset('assates/images/profile.jpg')}}" alt="">
                    <span>{{auth()->user()->email}}</span> 
                      <span></span> 
                  </div>
                  <div class="user_navbar">
                     <ul>
                        {{-- <li><a href=""><i class="fas fa-user"></i> Profile</a></li> --}}
                        <li><a href="{{route('logout')}}"><i class="fas fa-sign-out-alt"></i> Log Out</a></li>
                     </ul>
                  </div>
               </div>
         </div>
      </div> 
   </nav>
<body>
   
  
      
      <!-- Header Top End -->
