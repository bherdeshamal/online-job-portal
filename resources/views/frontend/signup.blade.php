@extends('frontend.frontdesign')

@section('content')
<section >
          <div class="container">
               <div class="text-center">
                      <h1>Register Here</h1>

                    <br>

                    <p class="lead"></p>
                        
       
                   
               </div>
          </div>
     </section>
        
     <section id ="contact" >
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
               
                <div class="col-md-6 col-sm-12">
                    <form  method="post" action="/check">
                      {{ csrf_field() }}  
			    
                         <p class="lead">Login </p> &nbsp
                           <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Email-ID</b></label>
                                    <input type="email" class="form-control" name="email" >
                                     <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Password</b></label>
                                    <input type="password" class="form-control" name="password" >
                                     <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>

                            <div class="col-md-4 col-sm-12">
                         </br>  
                                   <input type="submit" name=submit class="btn btn-success" value="Login">
                         </div>
                            </form>
                    </div>
              
                <div class="col-md-6 col-sm-12"> <p class="lead">Sign-Up</p> &nbsp
                    <form  method="post" action="/registeraction">
                        {{ csrf_field() }}  
			
                         <div class="contact-image">
                         <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Enter Your Name</b></label>
                                    <input type="text" class="form-control" name="name" >
                                     <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Enter Email-Id </b></label>
                                    <input type="email" class="form-control" name="email">
                                     <span class="text-danger">{{ $errors->first('email') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Enter Password</b></label>
                                    <input type="password" class="form-control" name="password" >
                                     <span class="text-danger">{{ $errors->first('password') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                    <label><B>Enter Confirm Password</b></label>
                                    <input type="password" class="form-control" name="cpassword" >
                                     <span class="text-danger">{{ $errors->first('cpassword') }}</span>
                                        </br>    </br>
                                </div>
                                </div>
                            </div>


                         <div class="col-md-4 col-sm-12">
                         </br>  
                                   <input type="submit" name=submit class="btn btn-success" value="Sign Up">
                         </div>
                        </div>
                    </form>
               </div>
          </div>
     </section>       

@endsection
