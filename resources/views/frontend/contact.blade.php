@extends('frontend.frontdesign')

@section('content')
<section>
          <div class="container">
               <div class="text-center">
                      <h1>Contact Us</h1>

                    <br>

                    <p class="lead"></p>
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
					<button type="button" class="close" data-dismiss="alert"></button>
              
                        {{ session('success') }}
                    </div>
                    @endif
       
                   
               </div>
          </div>
     </section>
        

     <!-- CONTACT -->
     <section id="contact">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-12">
                    
                         <form id="contact-form" role="form" action="sendaction" method="post">
                         {{csrf_field()}}
                              <div class="col-md-12 col-sm-12">
                                   <input type="text" class="form-control" placeholder="Enter full name" name="name" required>
                                   </br>  <span class="text-danger">{{ $errors->first('name') }}</span>
                                   </br>
                                   <input type="email" class="form-control" placeholder="Enter email address" name="email" required>
                                   </br>  <span class="text-danger">{{ $errors->first('email') }}</span>
                                   </br>
                                 
                                   <textarea class="form-control" rows="6" placeholder="Tell us about your message" name="message" required></textarea>
                                   </br>  <span class="text-danger">{{ $errors->first('message') }}</span>
                                   </br>
                                                             
                              </div>

                              <div class="col-md-4 col-sm-12">
                                   <input type="submit" name=submit class="form-control" value="Send Message">
                              </div>

                         </form>
                    </div>

                    <div class="col-md-6 col-sm-12">
                         <div class="contact-image">
                              <img src="{{asset('frontend/assets/images/contact-1-600x400.jpg')}}" class="img-responsive" alt="">
                         </div>
                    </div>

               </div>
          </div>
     </section>       

@endsection