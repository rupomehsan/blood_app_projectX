@extends('layouts.index')
@section('content')

<!-- Page Content -->
<div id="page-content-wrapper">

    <div class="container-fluid xyz">
        <div class="row">
            <div class="post-container">
        <div class="row">
            <div class="col-md-7">
                <div class="content">

               
               <div class="form-container">
                @if (Session::has('message'))
                <div class="alert alert-success font-weight-bold" > {{Session::get('message')}}</div> 
                @endif
                   <div class="form-wrapper">
                   
                    <h4>Write Blood Post</h4>
                     <i class="fas fa-arrow-right"></i>
                    <form action="" method="post" id="postForm">
                       
                      
                        
                          <div class="form-group">
                                 <i class="fas fa-tint" style="font-size: 18px;"></i>
                                  <label for="">Select Blood Group <span style="color:#c70100;margin-left:10px">*</span></label>
                            </div>
                        <div class="bloodgp">
                          
                           
                            <input type="radio" class="hide-box"  name="blood-radio" id="1" value="A+">
                            <label for="1" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">A+</div>
                                </div>
                            </label>

                             <input type="radio" class="hide-box"  name="blood-radio" id="2" value="A-">
                            <label for="2" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">A-</div>
                                </div>
                            </label>

                             <input type="radio" class="hide-box"  name="blood-radio" id="3" value="O+">
                            <label for="3" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">O+</div>
                                </div>
                            </label>

                            <input type="radio" class="hide-box"  name="blood-radio" id="4" value="O-">
                            <label for="4" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">O-</div>
                                </div>
                            </label>
                             <input type="radio" class="hide-box"  name="blood-radio" id="5" value="AB+">
                            <label for="5" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">AB+</div>
                                </div>
                            </label>
                             <input type="radio" class="hide-box"  name="blood-radio" id="6" value="AB-">
                            <label for="6" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">AB-</div>
                                </div>
                            </label>
                             <input type="radio" class="hide-box"  name="blood-radio" id="7" value="B+">
                            <label for="7" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">B+</div>
                                </div>
                            </label>
                            <input type="radio" class="hide-box"  name="blood-radio" id="8" value="B-">
                            <label for="8" class="lbl-radio">
                                <div class="displaybox">
                                    <div class="blood-name">B-</div>
                                </div>
                            </label>

                            
                        </div>
                       
                        <div class="row input-container">
                            <div class="col-md-4 ">
                                <div class="form-group">
                                    <label for=""> <i class="fas fa-tint" style="font-size: 18px;"></i> Quantity <span style="color:#c70100;margin-left:10px">*</span></label>
                                  
                                    <div class="custom-select" style="width:200px;">
                                       <select name="" id="quantity" class="form-control">
                                        <option selected disabled>Select your quantity</option>
                                         <option value="1">1 Bag</option>
                                         <option value="2">2 Bag</option>
                                         <option value="3">3 Bag</option>
                                         <option value="4">4 Bag</option>
                                         <option value="5">5 Bag</option>

                                          </select>
                                        </div>
                                      
                                   
                                </div>
                             

                            </div>
                            <div class="col-md-4">
                               
                                            <div class="form-group gender">
                                                <label for="" class="mb-5 mt-2"><i class="fas fa-tint" style="font-size: 18px;"></i>Type</label>
                                               <div class="row">
                                                 <div class="col-md-6">
                                                    
                                                     <input type="radio" class="form-check-input" name="type" id="type" value="plazma"> Plazma
                                                 </div>
                                                
                                                 <div class="col-md-6">
                                              
                                                     
                                                     <input type="radio" class="form-check-input" id="type" name="type" value="blood"> Blood
                                               
                                                 </div>
                                               </div>
                                               
                                            </div>
                              
                                
                                 
                               
                              
                            </div>
                            <div class="col-md-4">
                                  <div class="form-group mt-4">
                                    <label for=""><i class="fas fa-calendar-alt"></i>Scadule Date</label>
                                       <div class="emrg-btn">
                                           
                                            <label class="switch">
                                            <input type="checkbox" id="emergency" name="emergency"  >
                                            <span class="slider round"></span>
                                        </label>
                                        </div>
                                        <input type="date" name="date" id="date" class="form-control" placeholder="Enter your " value="">
                                        @error('email')
                                        <div class="alert alert-danger">{{$message}}</div>
                                        @enderror
                                    </div>
                            </div>
                          
                        </div>
                        <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for=""><i class="fab fa-acquisitions-incorporated"></i>Write Headline <span style="color:#c70100;margin-left:10px">*</span></label>
                                <input type="text" name="" class="form-control" id="title" placeholder="Write Headline">
                            </div>
                        </div>
                        </div>
                        <div class="row">
                         <div class="col-md-12">
                            <div class="form-group">
                                <label for=""><i class="fas fa-align-left"></i>Write Description<span style="color:#c70100;margin-left:10px">*</span></label>
                                <textarea name="" id="desc" cols="30"  class="form-control textarea" rows="10"></textarea>
                            </div>
                        </div>
                        </div>
                       
                       
                       
                         <div class="row">
                            <div id="mapid"></div>
                           <div class="col-md-12">
                            <div class="form-group">
                              <label for=""><i class="fas fa-map-marker-alt"></i>Aria Location <span style="color:#c70100;margin-left:10px">*</span></label>
                               <label for="" style="float:right;cursor:pointer"><i class="fas fa-map-marker-alt"></i>Get Location</label>
                               <input type="hidden" id="latlng" value="">
                              <input type="text" name="" class="form-control" id="location" placeholder="Write Headline">
                             </div>
                             </div>
                        </div>
                        
                         <div class="row">
                            <div class="col-md-12">
                             <div class="form-group">
                            <label for=""><i class="fas fa-plus-square"> </i>Hospital Name/Blood Bank Name <span style="color:#c70100;margin-left:10px">*</span></label>
                            <input type="text" name="" class="form-control" id="hosp_name" placeholder="Write Headline">
                            </div>
                            </div>
                        </div>
                          
                         <div class="row">
                            <div class="col-md-6">
                            <div class="form-group">
                             <label for=""><i class="fas fa-phone-alt"></i> Contact Number <span style="color:#c70100;margin-left:10px">*</span></label>
                             <input type="number" name="" class="form-control" id="phone" placeholder="Write Headline">
                             </div>
                           </div>

                            <div class="col-md-6">
                             <div class="form-group">
                              <label for=""><i class="fas fa-phone-alt"></i> Alternate Number <span style="color:#c70100;margin-left:10px">*</span></label>
                            <input type="number" name="" class="form-control" id="alt_phone" placeholder="Write Headline">
                            </div>
                            </div>

                        </div>
                      
                         <div class="row">
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for=""><i class="fas fa-star-and-crescent"></i>Religion</label>
                                      <div class="custom-select" style="width:200px;">
                                       <select class="form-control"  name="" id="religion_name">
                                   
                                    
                                           <option disabled selected>Select Religion</option>
                                       
                                            <option value="muslim">Muslim</option>
                                            <option value="hindu">Hindu</option>
                                       
                                        </select>
                                        </div>
                                   
                                </div>  

                            </div>
                        </div>
                       
                        <div class="col-md-6"></div>
                        <div class="col-md-12">
                            <input type="submit" class="btn btn-danger post-btn mb-5 mt-5" value="Post Request">
                        </div>
                        
                       
                       
                    </form>
                   </div>
                   
               </div>
            </div>

            </div>
           <div class="col-md-5">
               <div class="post-right-site">
                   <div class="post-top">
                       <h3>my request</h3>
                       <a href="">view histroy</a>
                   </div>
                   <div class="post-right-body">
                       <div class="row">
                           <div class="col-md-3">
                                <div class="poat-date">
                                    <h3>12</h3>
                                    <p>Jan</p>
                                    <p>2021</p>
                                </div>
                           </div>
                            <div class="col-md-6">
                                <div class="post-middle">
                                       <p> <i class="fas fa-map-marker-alt"></i> Dhaka,bangaldesh</p>
                                       <p> <i class="fas fa-plus-square"></i>  Squire hospital</p>
                                </div>
                                 
                                       

                            </div>
                            <div class="col-md-3">
                                <div class="post-bottom">
                                <i class="fas fa-tint"></i>
                                 <span>B</span>(posative)
                                <button type="btn" class="btn-manage">managed</button>
                                </div>
                              
                            </div>
                           </div>
                            
                       </div>
                       <div class="post-right-body mt-5">
                       <div class="row">
                           <div class="col-md-3">
                                <div class="poat-date">
                                    <h3>12</h3>
                                    <p>Jan</p>
                                    <p>2021</p>
                                </div>
                           </div>
                            <div class="col-md-6">
                                <div class="post-middle">
                                       <p> <i class="fas fa-map-marker-alt"></i> Dhaka,bangaldesh</p>
                                       <p> <i class="fas fa-plus-square"></i>  Squire hospital</p>
                                </div>
                                 
                                       

                            </div>
                            <div class="col-md-3">
                                <div class="post-bottom">
                                <i class="fas fa-tint"></i>
                                 <span>B</span>(posative)
                                <button type="btn" class="btn-search">Searching</button>
                                </div>
                              
                            </div>
                           </div>
                            
                       </div
                  
                    </div>

                    
             <div class="post-bottom-part">
                 <img src="{{asset('assates/images/learn-more.png')}}" alt="">
                 <p>How Your Blood Request Is Reachable To 
                     Most Number Of People</p>
                     <button class="btn-learnmore">Learn More...</button>
             </div>
                   
                 </div>
             </div>
           
           </div>
        </div>
    </div>
           



@endsection


@push('custom_js')
    <script>

          var mymap = L.map('mapid').setView([23.8103, 90.4125], 13);  
          var marker = L.marker([23.8103, 90.4125]).addTo(mymap);
          var circle = L.circle([51.508, -0.11], {
                            color: 'red',
                            fillColor: '#f03',
                            fillOpacity: 0.5,
                            radius: 500
                        }).addTo(mymap);
          var polygon = L.polygon([
                            [23.8103, 90.4125],
                            [23.8103, 90.4125],
                            [23.8103, 90.4125]
                        ]).addTo(mymap);    



          L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoicnVwb21laHNhbiIsImEiOiJja3Rtc2Fza2ExeGtmMndvNnlzdm1nbnpqIn0.FsEmrKmCdBkMAk0C_ns3rQ', {
                attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
                maxZoom: 18,
                id: 'mapbox/streets-v11',
                tileSize: 512,
                zoomOffset: -1,
                accessToken: 'pk.eyJ1IjoicnVwb21laHNhbiIsImEiOiJja3Rtc2Fza2ExeGtmMndvNnlzdm1nbnpqIn0.FsEmrKmCdBkMAk0C_ns3rQ'
            }).addTo(mymap);

            // function onMapClick(e) {
            //     // alert("You clicked the map at " + e.latlng);
            //     let latlng = e.latlng;
            //     $('#latlng').val(latlng);
            //     // alert(latlng)
                
               
            // }
            mymap.on('click', onMapClick);

            var popup = L.popup();
            function onMapClick(e) {
                     popup
                    .setLatLng(e.latlng)
                    .setContent("You clicked the map at " + e.latlng.toString())
                    .openOn(mymap);
                     let latlng = e.latlng;
                     $('#latlng').val(latlng);
            }

            mymap.on('click', onMapClick);

          $(document).ready(function(){
          
            $("#emergency").click(function(){
                 $('.empty').remove()
                 $falsevalu = $("#emergency")
                if($falsevalu.attr('value')){
                    $falsevalu.removeAttr('value');
                    $('#date').after('<input type="date" name="date" id="date" class="form-control empty" placeholder="Enter your " value="{{old('')}}">')
                }else{
                    $falsevalu.attr('value', "1");
                    $('#date').hide();
                    $('#date').after('<p class="empty" style="color:red">Emergency</p>')
                }
            });

            var type_name = null;
            var bloodgp = null;
           
            $('[name="blood-radio"]').click(function () {
                bloodgp = $(this).val()
                 console.log(bloodgp)
            })
            $('[name="type"]').click(function () {
                type_name = $(this).val()
                console.log(type_name)
            })

            $('#postForm').submit(function(e){
                e.preventDefault();
                // alert($('#date').val())
                // else if($('#date').val() == '' && $('emergency').val()){
                //      toastr.error("Date Is Required");
                if(bloodgp == null){
                     toastr.error("BloodGroup Is Required");
                }else if(type_name == null){
                     toastr.error("Blood Type Is Required");
                }else if($('#quantity').val() == null){
                     toastr.error("Quantity Is Required");
                }else if($('#title').val() == ''){
                     toastr.error("Heading  Is Required");
                }else if($('#desc').val() == ''){
                     toastr.error("Description Is Required");
                }else if($('#location').val() == ''){
                     toastr.error("Location Is Required");
                }else if($('#latlng').val() == ''){
                     toastr.error("Select Your Map Location");
                }else if($('#hosp_name').val() == ''){
                     toastr.error("Hospital Name Type Is Required");
                }else if($('#phone').val() == ''){
                     toastr.error("Phone Number Is Required");
                }
                else{
                        var quantity  = $('#quantity').val()
                        var title     = $('#title').val()
                        var desc      = $('#desc').val()
                        var location  = $('#location').val()
                        var hosp_name = $('#hosp_name').val()
                        var phone     = $('#phone').val()
                        var alt_phone = $('#alt_phone').val()
                        var religion  = $('#religion_name').val()
                        var emer_status = $('#emergency').val()
                        var date        = $('#date').val();
                        var latlng     = $('#latlng').val();
                     
                        // console.log(quantity,type_name,title,desc,location,hosp_name,phone,atl_phone,religion,emer_status, date)

                        $.ajax({
                            url : '{{url('api/post')}}',
                            method : 'post',
                            dataType : 'json',
                            data : {
                                '_token'   : '{{csrf_token()}}',
                                'bloodgp'  : bloodgp,
                                'quantity' : quantity,
                                'type_name' : type_name,
                                'title'    : title,
                                'desc'     : desc,
                                'location' : location,
                                'hosp_name' : hosp_name,
                                'phone'    : phone,
                                'alt_phone' : alt_phone,
                                'religion' : religion,
                                'emer_status' : emer_status,
                                'date'      : date,
                                'latlng'    : latlng 

                                
                            },
                            success : function(res){
                                console.log(res)
                                if(res.status == 'success'){
                                    Swal.fire({
                                    position: 'center-center',
                                    icon: 'success',
                                    title: 'Registration Successfully Created',
                                    showConfirmButton: false,
                                    timer: 1500
                                     });

                                 setTimeout(function(){
                                     window.location.reload()
                                      }, 1000);
                              
                        
                                }else if(res.status == 'validation_error'){
                                    Swal.fire({
                                    icon: 'error',
                                    title: 'Validation Error',
                                    text: 'Field must not be empty',
                                    
                                    })
                                 }
                            },
                            error  : function(err){
                                console.log(err)
                            },
                        });
                     }
               
               
            })
           


        $('#division_id').change(function () {
                var division_id = $('#division_id').val()

                $.ajax({
                    url: '{{url('api/get-district')}}/' + division_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if (res.status == 'done') {
                            $('#district_id').empty()
                            $('#district_id').append(`
                        <option disabled selected>Select Your District</option>
                        `)
                            res.district.forEach(function (item) {
                                $('#district_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                            })
                        }
                    },
                    error: function (err) {
                        console.log(error)
                    }
                })
            })

            $('#district_id').change(function () {
                var district_id = $('#district_id').val()

                $.ajax({
                    url: '{{url('api/get-station')}}/' + district_id,
                    method: 'get',
                    datatype: 'json',
                    success: function (res) {
                        console.log(res)
                        if (res.status == 'done') {
                            $('#station_id').empty()
                            $('#station_id').append(`
                        <option value="">Select Your Station</option>
                        `)
                            res.station.forEach(function (item) {
                                $('#station_id').append(`
                         <option value="${item.id}" >${item.name}</option>
                         `)
                            })
                        }

                    },
                    error: function (err) {
                        console.log(err)
                    }
                })
            })
      })
     </script>
<script>
        var x, i, j, l, ll, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
l = x.length;
for (i = 0; i < l; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  ll = selElmnt.length;
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < ll; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h, sl, yl;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        sl = s.length;
        h = this.parentNode.previousSibling;
        for (i = 0; i < sl; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            yl = y.length;
            for (k = 0; k < yl; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, xl, yl, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  xl = x.length;
  yl = y.length;
  for (i = 0; i < yl; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < xl; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
</script>
@endpush
