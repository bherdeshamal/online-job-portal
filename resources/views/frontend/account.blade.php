@extends('frontend.frontdesign2')

@section('content')
<section style="margin-top:0.01px;">
          <div class="container">
               <div class="text-center">
                      <h1>My Account</h1>

                    <br>

                    <p class="lead"></p>
                        
       
                   
               </div>
          </div>
     </section>
        
     <section style="margin-top:0.01px;" >
          <div class="container" style="margin-top:0.01px;">
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
               <form action="/account" method="post" >
							{{csrf_field()}}
                   
                    <div class="col-md-6 col-sm-12">
                    <p class="lead">Personal Details</p> &nbsp
                           <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>First Name</b></label>
                                    <input  value="{{$userDetails->name}}" type="text" class="form-control" name="name" >
                                     <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Father's Name</b></label>
                                    <input value="{{$userDetails->applicant_father_name}}" type="text" class="form-control" name="applicant_father_name" >
                                     <span class="text-danger">{{ $errors->first('applicant_father_name') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Address</b></label>
                                    <input type="text" class="form-control" name="address" value="{{$userDetails->address}}">
                                     <span class="text-danger">{{ $errors->first('address') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>City</b></label>
                                    <input type="text" class="form-control" name="city" value="{{$userDetails->city}}">
                                     <span class="text-danger">{{ $errors->first('city') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>State</b></label>
                                    <input type="text" class="form-control" name="state" value="{{$userDetails->state}}">
                                     <span class="text-danger">{{ $errors->first('state') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Country</b></label>
                                    <input type="text" class="form-control" name="country" value="{{$userDetails->country}}">
                                     <span class="text-danger">{{ $errors->first('country') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Pin-code</b></label>
                                    <input type="number" class="form-control" name="pincode" value="{{$userDetails->pincode}}">
                                     <span class="text-danger">{{ $errors->first('pincode') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                           
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Age</b></label>
                                    <input type="number" class="form-control" name="dob" value="{{$userDetails->dob}}">
                                     <span class="text-danger">{{ $errors->first('dob') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                         
                    </div>

                    <div class="col-md-6 col-sm-12"> <p class="lead">Educational Details</p> &nbsp
                   
                         <div class="contact-image">
                         <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Mobile No.</b></label>
                                    <input type="number" class="form-control" name="mobile" value="{{$userDetails->mobile}}">
                                     <span class="text-danger">{{ $errors->first('mobile') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Degree in Stream </b></label>
                                    <input type="text" class="form-control" name="degree" value="{{$userDetails->degree}}">
                                     <span class="text-danger">{{ $errors->first('degree') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>University Name</b></label>
                                    <input type="text" class="form-control" name="university" value="{{$userDetails->university}}">
                                     <span class="text-danger">{{ $errors->first('university') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Degree Percentage</b></label>
                                    <input type="number" class="form-control" name="degree_percent" value="{{$userDetails->degree_percent}}">
                                     <span class="text-danger">{{ $errors->first('degree_percent') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>HSC Percentage</b></label>
                                    <input type="number" class="form-control" name="hsc" value="{{$userDetails->hsc}}">
                                     <span class="text-danger">{{ $errors->first('hsc') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>SSC Percentage</b></label>
                                    <input type="number" class="form-control" name="ssc" value="{{$userDetails->ssc}}">
                                     <span class="text-danger">{{ $errors->first('ssc') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Technology Known</b></label>
                                    <input type="text" class="form-control" name="technology" value="{{$userDetails->technology}}">
                                     <span class="text-danger">{{ $errors->first('technology') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Year Of Completion</b></label>
                                    <input type="number" class="form-control" name="year_of_completion" value="{{$userDetails->year_of_completion}}">
                                     <span class="text-danger">{{ $errors->first('year_of_completion') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                           
                           

                         <div class="col-md-4 col-sm-12">
                         </br>  
                                   <input type="submit" name=submit class="btn btn-success" value="Save Details">
                              </div>
                    </div>

                    

                    

                    </form>
               </div>
          </div>
     </section>       

@endsection
