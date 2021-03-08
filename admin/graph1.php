<!--https://morrisjs.github.io/morris.js/#getting-started-->
<!--https://www.webslesson.info/2017/03/morrisjs-chart-with-php-mysql.html-->
<!--chart for categories-->
<?php include"includes/admin_header.php"; ?>

<div id="wrapper">
<!--navigation-->
<?php include"includes/admin_navigation.php"; ?>
<!DOCTYPE html>
<html>
    <head>
    <title>GRAPH1</title>
    </head>
    
<body>
      
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="https://code.jquery.com/jquery-3.4.0.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>

<div class="container" style="width:1050px;">
    <h2 class="text-center" style="padding-top:20px;"><ul>Total of Appointments For Each Categories</ul></h2>
        <div id="myfirstchart" style="height: 400px; padding-top: 40px;"></div>
</div>
    
    
    

<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "bank-appointment-system";
    
    $chart_data = '';
        
    // make connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connect or not
    if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
    }

        $sql = "SELECT categories.cat_id, categories.cat_name, services.ser_id, services.ser_name, COUNT(appointment.ser_id) AS total FROM services LEFT JOIN appointment ON appointment.ser_id = services.ser_id RIGHT JOIN categories ON services.type_cat_id = categories.cat_id GROUP BY cat_id";
        $result = $conn->query($sql); 
?>
  
<?php

    if ($result->num_rows > 0) {
        //output data of each row
        while($row = $result->fetch_assoc()) {
            //display data selected
            //echo "<tr>"; 
            //echo "<td>". $row["cat_name"].  "</td>";
            //echo "<td>". $row["ser_name"].  "</td>";
            //echo "<td>" . $row["total"].  "</td>";
        $chart_data .= "{ cat_name:'".$row["cat_name"]."', total:".$row["total"]."}," ;
            //echo $chart_data;
        }
    $chart_data = substr($chart_data, 0, -1);
    } 
    else {
        echo "0 results";
    }
    $conn->close();                              
?>
                          
<script>

new Morris.Line({
  // ID of the element in which to draw the chart.
  element: 'myfirstchart',
  // Chart data records -- each entry in this array corresponds to a point on
  // the chart.
  data:[<?php echo $chart_data; ?>],
  xkey:'cat_name',
  ykeys:['total'],
  labels:['total'],
  smooth: false,
  parseTime: false,
  hideHover:'auto',
  labelTop: true,
  resize:true,
  lineWidth: '1px',
  xLabelAngle: 10 
});

</script>
</body>                              

</html> 
</div>