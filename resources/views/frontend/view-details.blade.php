
@extends('frontend.frontdesign2')

@section('content')

  <section>
  <form method="post" action="{{ url('add-application')}}">
								{{csrf_field()}}
                            
          <div class="container">
          @if(Session::has('success'))
							<div class="alert alert-success alert-block" > 
								<button type="button" class="close" data-dismiss="alert">x</button>
									{{session('success')}}
							</div>
							@endif
							@if(Session::has('error'))
								<div class="alert alert-error alert-block" style="background-color:#f4d2d2"> 
									<button type="button" class="close" data-dismiss="alert">x</button>
										{{session('error')}}
								</div>
							@endif
               <div class="row">
                    <div class="col-lg-3 col-md-3 col-xs-12">
                         <div>
                              <br>

                              <!-- <img src="{{asset('frontend/asset/images/product-1-720x480.jpg')}}" alt="" class="img-responsive wc-image"> -->

                              <br>
                         </div>
                    </div>
                    
                    <div class="col-lg-9 col-md-9 col-xs-12">
                    <input type ="hidden" name="product_id" value="{{$product->id}}">
                         <!-- <form action="#" method="post" class="form"> -->
                              <h2>{{$product->name}}</h2>
                              <input type ="hidden" name="name" value="{{$product->name}}">
                              <input type ="hidden" name="desc" value="{{$product->desc}}">
                              <input type ="hidden" name="profile" value="{{$product->profile}}">
                              <input type ="hidden" name="requirement" value="{{$product->requirement}}">
                              <input type ="hidden" name="Location" value="{{$product->Location}}">
                              <input type ="hidden" name="type" value="{{$product->type}}">
                   
                              <p class="lead">Hire <strong class="text-primary">1200+ </strong> employees <small> <b>per year</b></small></p>

                              <p class="lead">
                                   <i class="fa fa-briefcase"></i>@if($product->type ==1) Full-time Developer @else Part-time Developer @endif &nbsp;&nbsp;
                                   <i class="fa fa-map-marker"></i> {{$product->Location}} &nbsp;&nbsp;
                                   <i class="fa fa-calendar"></i> 30-06-2021 &nbsp;&nbsp;
                                   <i class="fa fa-file"></i> {{$product->requirement}}
                              </p>

                              
                         <!-- </form> -->
                    </div>
                   
               </div>
                        </br></br>
               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4>Job Description</h4>
                    </div>

                    <div class="panel-body">
                         <p><h4>{{$product->desc}}</h4></p>
                            </br>
                         <h4><font colour="red"><b>Responsibillitites:</font></b></h4>

                         <p>Regular Report Writing, Liaison between the team and the client and head office, Door Supervision, Staff Search, Random Searches, TAG detector procedures, Risk Assessment, Fire Drills, Alarm Checks, immaculate customer services, deterrent and apprehension of offenders, liaisons with emergency services.</p>

                         <h4>Qualifications:</h4>
                         <p>- MUST have education till graduation.</p>
                         <p>- MUST be Fluent in the English Language (speaking and writing).</p>
                         <p>- MUST hold a graduation degree.</p>
                    </div>
               </div>

               <div class="panel panel-default">
                    <div class="panel-heading">
                         <h4>More About {{$product->name}}</h4>
                    </div>

                    <div class="panel-body">
                         <p>Looking to improve the security at your place of business? If so, we will provide you with the trained security officers and professionally licensed personnel needed for any business. From a security guard for construction site security to private event security, you can be sure to get the very best from our staff. Alternatively we provide tailor-made security guard training for your existing security staff.</p>

                         <div class="row">
                              <div class="col-lg-6">
                                   
                              </div>

                              <div class="col-lg-6">
                                   
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-6">
                                   <p>
                                        <span>Company name</span>

                                        <br>

                                        <strong>Online Job Portal</strong>
                                   </p>
                              </div>

                              <div class="col-md-6">
                                   <p>
                                        <span>Contact name</span>

                                        <br>

                                        <strong>Shamal Bherde</strong>
                                   </p>
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-6">
                                   <p>
                                        <span>Phone</span>

                                        <br>

                                        <strong><a href="tel:9588622937">9588622937</a></strong>
                                   </p>
                              </div>

                              <div class="col-md-6">
                                   <p>
                                        <span>Mobile phone</span>

                                        <br>

                                        <strong><a href="tel:9588622937">9588622937</a></strong>
                                   </p>
                              </div>
                         </div>

                         <div class="row">
                              <div class="col-md-6">
                                   <p>
                                        <span>Email</span>

                                        <br>

                                        <strong><a href="mailto:shamalbherde02.com">shamalbherde02@.com</a></strong>
                                   </p>
                              </div>

                              <div class="col-md-6">
                                   <p>
                                        <span>Website</span>

                                        <br>

                                        <strong><a href="/index">http://www.online_job_portal.com/</a></strong>
                                   </p>
                              </div>
                         </div>

                         <p>
                              <span>City</span>

                              <br>

                              <strong>Amravati</strong>
                         </p>
                    </div>
               </div>

               <div class="clearfix">
                    <input type="submit" name="submit" class="section-btn btn btn-primary pull-left" value="Apply for this job">

                    <ul class="social-icon pull-right">
                         
                    </ul>
               </div>
          </div>
          </form>
     </section>


@endsection