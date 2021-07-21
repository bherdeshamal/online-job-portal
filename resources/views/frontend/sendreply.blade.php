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
  <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="../assets/img/favicon.png">
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
          
          <li >
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
          <li >
            <a href="/view-contact">
              <i class="now-ui-icons location_map-big"></i>
              <h5 class="card-title">Contact Management</h5>
          </a>
          </li>
          <li class="active">
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
            <a class="navbar-brand" href="#pablo"><h2>Newsletter Subscription</h2></a>
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
                <h5 class="title">Send New Update</h5></br></br>
              </div>
              <div class="card-body">
              <form action="sendupdate" method="POST">
                                {{ csrf_field() }}
                                              <label > <b>From </b></label>
                                    <input disabled value="anitabherde10@gmail.com"  class="required form-control">
                                    </br>

                                    <label ><b>To</b> </label>
                                    <select name="user_email" disabled style="height:150px;" type="email"   class="form-control" multiple>
                                            @foreach($user as $row)
                                            <option value="{{$row['id']}}">{{$row['user_email']}}</option>
                                            @endforeach 
                                    </select>
                                    <span class="text-danger">{{ $errors->first('user_email') }}</span>
                                    </br> 

                                    <label ><b>Subject </b></label>
                                    <input Disabled type="text" value="New Updates From Online Job Portal" class="form-control"> </br>
                                     
                                    <label for="admin_reply"><b>Body</b> </label>
                                    </br>
                                    <input type="text"  class="form-control" name="admin-reply" placeholder="Revert Back to the Applicant" style="width:650px ; height:100px;" >
<!--                                    
                                    <textarea  name="admin_reply"  style="height:150px; " class="form-control" required></textarea> -->
                                    <span class="text-danger">{{ $errors->first('admin_reply') }}</span>
                                    </br>   </br>
                                    
                                    <section></section>
                                    <section>
                                        <div class="form-group">
                                            <div class="col-md-8 col-md-offset-4">
                                            <a href="/view-subscription" class="btn btn-primary">  Back</a>  
                                     
                                                <input type="submit" value="Send Updates" class="btn btn-success">
                                            </div>
                                        </div>
                                    </section>
                               
                 
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
                    <img class="avatar border-gray" src="{{asset('admin/assets/img/mike.jpg')}}" alt="...">
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