
<?php include 'header.php';  ?>

<main>
 
    <div class="formtitle">Admin- Add an Adventure</div>
    <hr /> <br />
   <div class="formtext">Input details about the trip:
    <br /><br />
<form action="admin_confirm.php" method="POST">
    <label>Heading &nbsp;</label><input type="text" name="heading"><br /><br />
    <label>Trip Date &nbsp;</label><input type="date" name="date"><br /><br />
    <label>Duration &nbsp;</label><input type="text" name="duration"><br /><br />
    <label>Summary &nbsp;</label><input type="text" name="summary"><br /><br />
    <br /><br />
   
     <button type="submit" name="login">Submit</button>
</form>
</div>
   
        
       
    </main>
   

<?php include 'footer.php';  ?>
