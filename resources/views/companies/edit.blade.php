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
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="{{asset('admin/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
  <link href="{{asset('admin/assets/css/now-ui-dashboard.css?v=1.5.0')}}" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="{{asset('admin/assets/demo/demo.css')}}" rel="stylesheet" />
</head>


<body class="user-profile">
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
      <li>
            <a href="/dashboard">
              <i class="now-ui-icons design_app"></i>
              <h5 class="card-title">  <p>Dashboard</p></h5>
            </a>
          </li>
          <li  >
            <a href="/view-category">
              <i class="now-ui-icons education_atom"></i>
              <h5 class="card-title">Profile Management</h5>
            </a>
          </li>
          
          <li class="active">
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
          <li>
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
            <a class="navbar-brand" href="#pablo"><h2>Company Management</h2></a>
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
          <div class="col-md-8">
            <div class="card">
              <div class="card-header">
                <h5 class="title">Edit Company Profile</h5></br></br>
              </div>
              <div class="card-body">
              <form action="{{ route('updatecompany', $category['id']) }}" method="POST">
                                {{ csrf_field() }}
                                <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><B>Edit Company Name</b></h5></label>
                                    <input type="text" class="form-control" name="name" value='<?php echo $category['name']; ?>'>
                                    </br>
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                        </br>   
                                       
                                </div>
                                </div>
                            </div><div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><B>Job Description</b></h5></label>
                                    <input type="text" class="form-control" name="desc" value='<?php echo $category['desc']; ?>'>
                                    </br>
                                    <span class="text-danger">{{ $errors->first('desc') }}</span>
                                        </br>   
                                       
                                </div>
                                </div>
                            </div><div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><B>Edit Job Profile</b></h5></label>
                                    <input type="text" class="form-control" name="profile" value='<?php echo $category['profile']; ?>'>
                                    </br>
                                    <span class="text-danger">{{ $errors->first('profile') }}</span>
                                        </br>   
                                       
                                </div>
                                </div>
                            </div>
                             <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><B>Edit Job Type</b></h5></label>
                                    <select id="type" name="type"  value='<?php echo $category['type']; ?>' class="required form-control">
                                       <option disabled>Select</option>
                                        <option value="1">Full-time Developer</option>
                                        <option value="2">Part-time Developer</option>
                                    </select>   </br>
                                    <span class="text-danger">{{ $errors->first('type') }}</span>
                                        </br>   
                                       
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><b>Edit Company Location</b></h5></label>
                                    <input type="text" class="form-control" name="Location" value='<?php echo $category['Location']; ?>'>
                                    </br>
                                    <span class="text-danger">{{ $errors->first('Location') }}</span>
                                        </br>   
                                </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                <div class="form-group">
                                </br>
                                    <label><h5><b>Edit Company Requirement</b></h5></label>
                                    <input type="text" class="form-control" name="requirement" value='<?php echo $category['requirement']; ?>'>
                                    </br>
                                    <span class="text-danger">{{ $errors->first('requirement') }}</span>
                                        </br>   
                                </div>
                                </div>
                            </div>

                            <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                                <a href="/view-company" class="btn btn-info">  BACK</a>        
                                                <input type="submit" value="UPDATE COMPANY" class ="btn btn-success">
                                            </div>
                            </div>
                 
                </form>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card card-user">
              <div class="image">
                <img src="{{asset('admin/assets/img/bg5.jpg')}}" alt="...">
              </div>
              <div class="card-body">
                <div class="author">
                  <a href="#">
                    <img class="avatar border-gray" src="{{asset('admin/assets/img/shama.jpeg')}}" alt="...">
                    <h5 class="title">Mike Andrew</h5>
                  </a>
                  <p class="description">
                    michael24
                  </p>
                </div>
                <p class="description text-center">
                  "Lamborghini Mercy <br>
                  hi</br>
                  Your chick she so thirsty <br>
                  I'm in that two seat Lambo"</br></br></br>
                </p>
              </div>
              </br>
              <hr>
              <div class="button-container">
               
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
  <!-- Chart JS -->
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  <!--  Notifications Plugin    -->
  <script src="../assets/js/plugins/bootstrap-notify.js"></script>
  <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
  <script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="../assets/demo/demo.js"></script>
</body>

</html>