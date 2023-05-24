
<?php include 'header.php';  ?>

<div class="formresponse">
<?php

$heading = ($_POST['heading']);
$date = ($_POST['date']);
$duration = ($_POST['duration']);
$summary = ($_POST['summary']);


        echo "Heading: $heading";
        echo "<br>";
        echo "Date: $date";
        echo "<br>";
        echo "Duration: $duration days";
        echo "<br>";
        echo "Summary: $summary";
        echo "<br>";
        echo "<br>";

        $sql = "INSERT INTO canoetrip (heading, date, duration, summary)
        VALUES ('$heading', '$date', '$duration', '$summary')";
       

        if (mysqli_query($conn, $sql)) {
            echo "New trip created successfully.";
        } else {
            echo "Error: " . $sql . "
            " . mysqli_error($conn);
        }
    
?>
<a href='all_adventures.php'> See all adventures.</a>
</div> 
 
<?php include 'footer.php';  ?>
