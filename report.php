<?php

$con = mysqli_connect("localhost","root","12345678","project_exhibitor");

// Check connection
if (mysqli_connect_errno($con))
{
    echo "Failed to connect to DataBase: " . mysqli_connect_error();
}else{
		
}
mysqli_close($con);

?>
<script type="text/javascript">
  window.onload = function () {
    var chart = new CanvasJS.Chart("chartContainer",
    {
      title:{
        text: "สรุปยอด FOOD & FAIR"
      },
      data: [
      {
       type: "doughnut",
       dataPoints: [
       {  y: 2, indexLabel: " FOOD " },
       {  y: 3, indexLabel: " FAIR " },
       ]
     }
     ]
   });

    chart.render();
  }
  </script>     
     <div class="col-lg-9">
          <div class="card mt-4">
            <div class="card-body">
            
            <div id="chartContainer" style="height: 400px; width: 100%;"></div>
            
            
            
            </div>
        </div>
    </div>
    
    
