
<?php include 'header.php';  ?>



  
    <main>
    <!-- page content starts here --> 
 <div id="home_content">
            <div id="banner-img">
       <img src="images/canoe.jpg" alt="Canoe" style="width:50%;">
            </div>
            <h3>Upcoming Adventures</h3>
            <hr />  
 <div class="adventures">
     <div class="trip">
  <?php
    $sqltrip = "SELECT id, heading, date, duration, summary FROM canoetrip";
    if(mysqli_query($conn, $sqltrip)){

        $result = $conn->query($sqltrip);

        if ($result->num_rows > 0) {
           
            while($row = $result->fetch_assoc()) {
              
                //Create variable for row selected
                $id_v = $row["id"];
                $heading_v = $row["heading"];
                $date_v = $row["date"]; 
                $duration_v = $row["duration"]; 
                $summary_v = $row["summary"];  
                
                // output data of each row  
               
                echo "<h5>" . $heading_v . "</h5> <br>";
                echo "Date: " . $date_v . "<br>";
                echo "Duration: " . $duration_v . " days" . "<br>";
                echo "<b>Summary:</b> " . $summary_v . "<hr> <br>";
                
            }
        } else {
            echo "Check for more trips later!";
        }
    }
?>
  </div>
 </div>
       
    </main>
   

<?php include 'footer.php';  ?>
