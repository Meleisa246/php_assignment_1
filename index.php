<?php 
    $title = "Index";
include 'includes/header.php' ?>

   <h1 class = "text-centre">PHP Assignment - Hello World </h1> 
   <br/>
<?php 
   echo 'Hello PHP';
   echo '<br/>';
   
?>


   <?php
     $name = 'Meleisa Pinnock';
     $age = 15;
        echo '<br/>';
    
        echo'<h1>My name is '.$name.' </h1>';

        echo '<br/>';
        
        echo'<h1>My age is '.$age.' </h1>';

    
   ?>

    <br/>
    <br/>

   <button type ="button" class="btn btn-success">CLICK HERE</button>

   <br/>
   <br/>
   <br/>


<?php require 'includes/footer.php'?>
