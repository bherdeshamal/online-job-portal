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
<?php
 
 $cur_month= date('M');
 $last_month=date('M',strtotime("-1 month"));
 $last_to_last_month=date('M',strtotime("-2 month"));
 $last_to_last_to_last_month=date('M',strtotime("-3 month"));
 $dataPoints = array(
     array("y" => $current_month_users, "label" => $cur_month),
     array("y" => $last_month_users, "label" => $last_month),
     array("y" => $last_last_month_users, "label" => $last_to_last_month),
     
     array("y" => $last_last_last_month_users, "label" => $last_to_last_to_last_month),

 );

 $current_month= date('M');
 $lasttt_month=date('M',strtotime("-1 month"));
 $last_to_month=date('M',strtotime("-2 month"));
 $last_to_last_month=date('M',strtotime("-3 month"));
 $dataPoints1 = array(
  array("y" => $current_month_app, "label" => $current_month),
  array("y" => $last_month_app, "label" => $lasttt_month),
  array("y" => $last_last_month_app, "label" => $last_to_month),     
  array("y" => $last_last_last_month_app, "label" => $last_to_last_month),
 );


 ?>
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
          <li class="active">
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
            <a class="navbar-brand" href="index">Frontend </a>
          </div>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
            <span class="navbar-toggler-bar navbar-kebab"></span>
          </button>
          <div class="collapse navbar-collapse justify-content-end" id="navigation">
            <!-- <form>
              <div class="input-group no-border">
                <input type="text" value="" class="form-control" placeholder="Search...">
                <div class="input-group-append">
                  <div class="input-group-text">
                    <i class="now-ui-icons ui-1_zoom-bold"></i>
                  </div>
                </div>
              </div>
            </form> -->
            <ul class="navbar-nav">
              
              <li class="active">
                <a class="nav-link" href="/">
                  <i class="now-ui-icons users_single-02"></i>
                  <p>
                    <span class="d-lg-none d-md-block">Account</span>
                  </p>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- End Navbar -->
      <div class="panel-header panel-header-lg">
      <div class="col-md-12 col-sm-12">
          <h2><font color="white"> <center><b>- Just Don't dreamed about success Worked for it too.</b></center></font></h1>
          <h3><font color="white"> <center><b>All our dreams can come true, if we have the courage to pursue them.</b></center></font></h3>
      </div>
      </div>
      <div class="content">
        <div class="row">
          <div class="col-lg-4">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Total Performance</h4>
                
              </div>
              <div class="card-body">
                <div class="chart-area" style="height: 360px; width: 100%;">
                 <font color="red"> <b> &nbsp &nbsp Total Job Profiles  </font>:= </b> {{$categories}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Total Companies </font>:= </b> {{$companies}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Total Applicants </font>:= </b> {{$applicants}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Total Pending Applications </font>:= </b> {{$pending_status}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Total Selections </font>:= </b> {{$selected_status}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Total Rejections </font>:= </b> {{$rejected_status}} </br></br>
                 <font color="red"> <b> &nbsp &nbsp Inprogress Application Status </font>:= </b> {{$inprocess_status}} </br></br>
                <div id="chartContainer" style="height: 370px; width: 100%;"></div>
                
              <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> 
                 

              

                </div>
              </div>
              
            </div>
          </div>
          <div class="col-lg-8 col-md-12">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">Applicant Status</h4>
               
              </div>
              <div class="card-body">
                <div class="chart-area">
                <div id="chartContainer1" style="height: 370px; width: 100%;"></div>
                
                    <script>
                    window.onload = function () {
                    
                    var chart1 = new CanvasJS.Chart("chartContainer1", {
                      animationEnabled: true,
                      //theme: "light2",
                      title:{
                        text: " "
                      },
                      axisX:{
                        crosshair: {
                          enabled: true,
                          snapToDataPoint: true
                        }
                      },
                      axisY:{
                        title: "Applicants Status",
                        includeZero: true,
                        crosshair: {
                          enabled: true,
                          snapToDataPoint: true
                        }
                      },
                      toolTip:{
                        enabled: false
                      },
                      data: [{
                        type: "area",
                        dataPoints: <?php echo json_encode($dataPoints1, JSON_NUMERIC_CHECK); ?>
                      }]
                    });
                    chart1.render();
                    
                    }
                    </script>
                  
                </div>
              </div>
              
            </div>
          </div>
          <!-- <div class="col-lg-4 col-md-6">
            <div class="card card-chart">
              <div class="card-header">
                <h5 class="card-category"></h5>
                <h4 class="card-title">24 Hours Performance</h4>
              </div>
              <div class="card-body">
                <div class="chart-area">
                </div>
              </div>
              
            </div>
          </div> -->
        </div>
       
      </div>
      <footer class="footer">
        <div class=" container-fluid ">
          
          <div class="copyright" id="copyright">
            &copy; <script>
              document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
            </script>, Designed by Shamal
          </div>
        </div>
      </footer>
    </div>
  </div>
  <!--   Core JS Files   -->
  <script src="{{asset('admin/assets/js/core/jquery.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/popper.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{asset('admin/assets/js/plugins/perfect-scrollbar.jquery.min.js')}}"></script>
  <!--  Google Maps Plugin    -->
  <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
 
  <script src="{{asset('admin/assets/js/now-ui-dashboard.min.js?v=1.5.0')}}" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
  <script src="{{asset('admin/assets/demo/demo.js')}}"></script>
  <script>
    $(document).ready(function() {
      // Javascript method's body can be found in assets/js/demos.js
      demo.initDashboardPageCharts();

    });
  </script>
</body>

</html>