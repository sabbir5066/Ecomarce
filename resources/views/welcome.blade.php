@extends('layouts.master2')

@section('content')

 <!-- banner section start -->
 <div class="banner_section layout_padding">
            <div class="container">
               <div id="my_slider" class="carousel slide" data-ride="carousel">
                  <div class="carousel-inner">
                   
                     <div class="carousel-item active">
                        <div class="row">
                           <div class="col-sm-12">
                              <h1 class="banner_taital">Get Start <br>Your favriot shoping</h1>
                              <div class="buynow_bt"><a href="#">Buy Now</a></div>
                           </div>
                        </div>
                     </div>
                     
                  </div>
                  <a class="carousel-control-prev" href="#my_slider" role="button" data-slide="prev">
                  <i class="fa fa-angle-left"></i>
                  </a>
                  <a class="carousel-control-next" href="#my_slider" role="button" data-slide="next">
                  <i class="fa fa-angle-right"></i>
                  </a>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- banner bg main end -->
      <!-- fashion section start -->
    
      @foreach($products as $data)
                  <div class="container">
                     <h1 class="fashion_taital"></h1>
                     <div class="fashion_section_2">
                        <div class="row">
                       
                           <div class="col-lg-4 col-sm-4">
                              <div class="box_main">
                                 <h4 class="shirt_text">{{$data->product_name}}</h4>
                                 <div class="tshirt_img">
                                    <img src="{{asset('upload/productphoto/'.$data->product_img)}}" alt="">
                                 </div>
                                 <div class="btn_main">
                                    <div class="buy_bt"><a href="#">Buy Now</a></div>
                                    <div class="seemore_bt"><a href="#">See More</a></div>
                                 </div>
                              </div>
                           </div>
                          
                        </div>
                     </div>
                  </div>
               </div>
               @endforeach













      <!-- jewellery  section end -->

       @endsection