
@extends('frontend.frontdesign')

@section('content')


<section>
          <div class="container">
               <div class="text-center">
                    <h1>Jobs Listing</h1>
                    </br>
              </div>
          </div>
     </section>

     <section class="section-background">
          <div class="container">

               <div class="row">
                    <div class="col-lg-3 col-xs-12">
                         <div class="form">
                              <!-- <form action="#">-->
                                   <h4><b><font color="red">Job Profiles</font></b></h4> 
                                   </br>
                                   @foreach($key as $cat)
                                   <div>
                                        <label>
                                             <!-- <input type="checkbox"> -->

                                             {{$cat->profile}}
                                        </label>
                                   </div>
                                   @endforeach
                                  
                                   <br>
                              <!-- </form> -->
                         </div>
                    </div>

                    <div class="col-lg-9 col-xs-12">
                         <div class="row">
                         @foreach($pkey as $product)
                            
                              <div class="col-lg-6 col-md-4 col-sm-6">
                                
                                   <div class="courses-thumb courses-thumb-secondary">
                                  
                                        <div class="courses-top">
                                        
                                             <div class="courses-image">
                                                  <img src="{{asset('frontend/assets/images/product-1-720x480.jpg')}}" class="img-responsive" alt="">
                                             </div>
                                            </br></br>
                                             <div class="courses-date">
                                                  <span title="Posted on"><i class="fa fa-calendar"></i> 30/06/2021</span>
                                                  <span title="Location"><i class="fa fa-map-marker"></i> <font colour="red">{{$product->Location}}</font></span>
                                                  <span title="Type"><i class="fa fa-file"></i><font colour="red"> {{$product->requirement}}</font></span>
                                             </div>
                                            
                                        </div>

                                        <div class="courses-detail">
                                             <h3><a href="job-details"><b>Company Name</b> : {{$product->name}}</a></h3>

                                             <p class="lead"><strong><b>Company Profile </b>: {{$product->profile}}</strong></p>
                                             </br>
                                             <a href="job-details/{{$product->id}}" class="section-btn btn btn-primary btn-block">View Details</a>
                                             </br>
                                             <!-- <p>Online Job Portal</strong></p>
                                             </br></br> -->
                                          
                                        </div>
                                          </hr>  
                                        
                                        </br></br>
                                   </div>
                                  
                               </div>
                               @endforeach
                              
                         </div>
                    </div>
               </div>
          </div>
     </section>

@endsection