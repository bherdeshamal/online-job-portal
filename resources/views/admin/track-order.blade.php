<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
   
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('admin/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{asset('admin/assets/img/favicon.png')}}">
 <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
   Online Job Portal
  </title>
  
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/assets/demo/demo.css')}}" rel="stylesheet" />
</head>


<body class="">
  <div class="wrapper ">
  <div class="sidebar" data-color="yellow">
      
      <div class="logo">
        <a href="#" class="simple-text logo-mini">
          #
        </a>
        <a href="/dashboard" class="simple-text logo-normal">
         Online Job Portal
        </a>
      </div>
      <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
        <li >
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <h5 class="card-title">  <p>Dashboard</p></h5>
            </a>
          </li>
          <li >
            <a href="/view-category">
              <i class="now-ui-icons education_atom"></i>
              <h5 class="card-title">Profile Management</h5>
            </a>
          </li>
          
          <li>
            <a href="/view-company">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Company Management</h5>
          </a>
          </li>
          <li>
            <a href="/view-users">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Applicant Management</h5>
          </a>
          </li>
          <li class="active">
            <a href="/view-applications">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Track Status</h5>
          </a>
          </li>
          <li>
            <a href="/view-contact">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Contact Management</h5>
          </a>
          </li>
          <li>
            <a href="/view-subscription">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Newsletter Subscription</h5>
          </a>
          </li>
          <li>
            <a href="/Charts">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Charts</h5>
          </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="main-panel" id="main-panel">
      <!-- Navbar -->
      <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
        <div class="container-fluid">
          <div class="navbar-wrapper">
            <div class="navbar-toggle">
              <button type="button" class="navbar-toggler">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </button>
            </div>
            <a class="navbar-brand" href="#pablo"><h2> Track Application Status </h2></a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
           
            <ul class="navbar-nav">
             
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-sm">
      </div>
      <div class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> 
                
                <a href="/dashboard" class="btn btn-danger">   HOME</a>  
                </h4>                
              
              <div class="card-body">
                <div class="table-responsive">
                @if(Session::has('success'))
                            <div class="alert alert-success" > 
                            
                                    {{session('success')}}
                            </div>
                            @endif
                            @if(Session::has('danger'))
                            <div class="alert alert-danger" > 
                            
                                    {{session('danger')}}
                            </div>
                            @endif
                            
                            <table class="table">
                    <thead class=" text-primary">
                            <tr>
                  
                            <th><b><font color="red">Sr. No</b></th>
                            <th><b><font color="red">Applicant-Id</b></th>
                            <th><b><font color="red">Company Name</b></th>
                            <th><b><font color="red">Company Profile</th>
                            <th><b><font color="red">Company Location</th>
                            <th><b><font color="red">Status</th>
                           
                            <th><b><font color="red">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($orders as $order)
                            <tr style="background:white;">
                            <td>
                            {{$order->id}}
                            </td><td>
                            {{$order->user_email}}
                            </td>
                            <td>
                            {{$order->name}}
                            </td><td>
                            {{$order->profile}}
                            </td><td>
                            {{$order->Location}}
                            </td>
                            <!-- <td>
                            {{$order->tracking_msg}}
                            </td> -->
                            <td>

                            <form action="{{url('update-tracking-status/'.$order->id)}}" method="Post">
                                    {{csrf_field()}}
                                 {{method_field('PUT')}}
                                <div>
                                    
                                      <select id="tracking_msg" name="tracking_msg" class="btn btn-SUCCESS">
                                     <option> {{$order->tracking_msg}}</option>
                                        <option value="Pending">Pending</option>
                                        
                                        <option value="Technical Round">Technical Round</option>
                                        <option value="HR Round">HR Round</option>
                                        <option value="Selected">Selected</option>
                                        
                                        <option value="Rejected">Rejected</option>

                                       <td> <input type="submit" value="Update" class= "btn btn-success" ></td>
                                     </select>
                                      </br>
                                    </br>
                            </form>



                            </td>
                            <!-- <td><a href="{{url('order-proceed/'.$order->id)}}" class="btn btn-success">Proceed</a> -->
                            <td> <a href="{{url('/view-application/delete-job/'.$order->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete?')">DELETE</a></td>
                           
                             </tbody>
                            @endforeach
                            </table>
                            {!! $orders->links('pagination::bootstrap-4')!!}
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
          </div>
        </div>
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          <nav>
            <ul>
             
            </ul>
          </nav>
          <div class="copyright" id="copyright">
         </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="../assets/js/core/jquery.min.js"></script>
  <script src="../assets/js/core/popper.min.js"></script>
  <script src="../assets/js/core/bootstrap.min.js"></script>
  <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>