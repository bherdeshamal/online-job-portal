

 <!-- FOOTER -->
 <footer id="footer">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Headquarter</h2>
                              </div>
                              <address>
                                   <p>212 Barrington Court <br>New York, ABC 10001</p>
                              </address>

                              <ul class="social-icon">
                                   <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                                   <li><a href="#" class="fa fa-twitter"></a></li>
                                   <li><a href="#" class="fa fa-instagram"></a></li>
                              </ul>

                              <div class="copyright-text"> 
                                   <p>Copyright &copy; 2021 Company Name</p>
                          <p>Designed & Develop by SHAMAL BHERDE    </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="footer-info">
                              <div class="section-title">
                                   <h2>Contact Info</h2>
                              </div>
                              <address>
                                   <p>+1 333 4040 5566</p>
                                   <p><a href="mailto:contact@company.com">contact@company.com</a></p>
                              </address>

                              <div class="footer_menu">
                                   <h2>Quick Links</h2>
                                   <ul>
                                        <li><a href="/index">Home</a></li>
                                        <li><a href="/index">About Us</a></li>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="/contact">Contact Us</a></li>
                                   </ul>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-12">
                         <div class="footer-info newsletter-form">
                              <div class="section-title">
                                   <h2>Newsletter Signup</h2>
                              </div>
                              <div>@if(Session::has('success'))
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
       
                                   <div class="form-group">
                                      
							<form action="/newsletter" class="searchform" method="post">
							{{csrf_field()}}
						        <input type="email" class="form-control" placeholder="Enter your email" name="user_email" required>
                                             <input type="submit" class="form-control" name="submit" id="form-submit" value="Send Me">
                                        </form>
                                        <span><sup>*</sup> Please note - we do not spam your email.</span>
                                   </div>
                              </div>
                         </div>
                    </div>
                    
               </div>
          </div>
     </footer>
