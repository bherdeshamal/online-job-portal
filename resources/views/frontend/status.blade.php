
@extends('frontend.frontdesign2')

@section('content')

  <section>
                           
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

                             <p class="lead"><font colour="red">Track Status</font></p>
                              <br>
                         </div>
                    </div>
                </div>
                <div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
                        <td class="image"><h4>Company Logo</h4></td>
                            <td class="image"><h4>Company Id</h4></td>
                             <td class="image"><h4>Company Name</h4></td>
							<td class="description"><h4>Profile</h4></td>
							<td class="quantity"><h4>Location</h4></td>
							<td class="quantity"><h4>Status</h4></td>
							
							<td></td>
						</tr>
					</thead>
					<tbody>
					
						@foreach($userCart as $cart)
						<tr>
                        <td class="cart_product">
							<img src=" {{asset('frontend/assets/images/product-1-720x480.jpg')}}" width="120px" height="100px">
													
							</td>
							<td class="cart_description">
								
								<p><h4><a href="view-details/{{$cart->product_id}}">{{$cart->product_id}}</a> </p>
							</td>

                            
                            <td class="cart_description">
								
								<p><h4>{{$cart->name}} </p>
							</td><td class="cart_description">
								
								<p><h4>{{$cart->profile}} </p>
							</td>
							
							<td class="cart_price">
								<p><h4>{{$cart->Location}}</p>
							</td>
                            <td class="cart_price">
								<p><h4>{{$cart->tracking_msg}}</p>
							</td>
						
						</tr>
						
						@endforeach	
					</tbody>
				</table>
			</div>
		
     </section>


@endsection