<?php  
 include_once "config/config.php";  
 $query = "SELECT kategori, count(*) as number FROM formditemukan GROUP BY kategori";  
 $result = mysqli_query($data, $query);  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Lost and Found</title>  
           <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>  
           <script type="text/javascript">  
           google.charts.load('current', {'packages':['corechart']});  
           google.charts.setOnLoadCallback(drawChart);  
           function drawChart()  
           {  
                var data = google.visualization.arrayToDataTable([  
                          ['kategori', 'Number'],  
                          <?php  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo "['".$row["kategori"]."', ".$row["number"]."],";  
                          }  
                          ?>  
                     ]);  
                var options = {  
                      title: 'Grafik Kehilangan Barang Institut Teknologi Del',  
                    //   is3D:true, 
                    legend: 'none',
                    pieSliceText: 'label', 
                    //   pieHole: 0.4  
                    pieStartAngle: 90,
                     };  
                var chart = new google.visualization.PieChart(document.getElementById('piechart'));  
                chart.draw(data, options);  
           }  ;
           var visualization = new google.visualization.PieChart(container);
           </script>  
      </head>  
      <body>  
           <br /><br />  
           <div style="width:900px;">  
                
                <br />  
                <div id="piechart" style="width: 600px; height: 300px;"></div>  
           </div>  
      </body>  
 </html>  
 