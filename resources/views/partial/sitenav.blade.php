<div style="margin-top: 90px;" id="" class="toggled-2">
    <!-- Sidebar -->
    <div id="sidebar-wrapper">

     
       <ul class="sidebar-nav nav-pills nav-stacked" id="menu">
          <a href="{{route('dashboard.index')}}">
            <div class="das-image">
               <img src="{{asset('assates/images/logo.png')}}" alt="">
            </div>
          </a>
         
          
           
         <li class="active">
            <a href="{{route('dashboard.index')}}"><span class="fa-stack fa-lg pull-left"><i class="fab fa-windows"></i></span> <b> Home </b></a>
             {{-- <ul class="nav-pills nav-stacked" style="list-style-type:none;">
               <li><a href="">User dashboard</a></li>
             
            </ul>  --}}
         </li>

          {{-- <i class="fas fa-hand-holding-water"></i> --}}
          {{-- <li >
           
             <a href="{{route('dashboard.user')}}"><span class="fa-stack fa-lg pull-left"><i class="fas fa-hand-holding-heart"></i></span> X-donor</a>
           
          </li> --}}
         
          <li>
             <a href="{{route('dashboard.history')}}"><span class="fa-stack fa-lg pull-left"><i class="fas fa-history"></i></span>History</a>
            
          </li>
          <li>
             <a href="{{route('dashboard.profile')}}"> <span class="fa-stack fa-lg pull-left"><i class="fas fa-user-alt"></i></span>Profile</a>
          </li>
          <li>
             <a href="{{route('dashboard.post.create')}}"> <span class="fa-stack fa-lg pull-left"><i class="far fa-edit"></i></span>Post</a>
          </li>
           <li>
             <a href="{{route('dashboard.post.create')}}"> <span class="fa-stack fa-lg pull-left"><i class="fas fa-cog"></i></span>Settings</a>
          </li>
          <hr>
          <li>
              <div class="sitenav-bottm">
                  <img src="{{asset('assates/images/sitenav.png')}}" alt="">
                  <p>If You Have Any Questions
                   Fell Free To Contact Us</p>
               </div>
          </li>
         
       </ul>

       
    </div>
   
    <!-- /#sidebar-wrapper -->
