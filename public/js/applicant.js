 <script>
                    window.onload = function () {
                    
                    var chart = new CanvasJS.Chart("chartContainer", {
                      animationEnabled: true,
                      title:{
                        text: ""
                      },
                      axisY: {
                        title: "Company Status",
                      },
                      data: [{
                        type: "spline",
                      
                        dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
                      }]
                    });
                    
                    chart.render();
                    
                    }
                    </script>