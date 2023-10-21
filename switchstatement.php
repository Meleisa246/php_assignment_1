<?php 
    $title = "Switchstatement";
    include 'includes/header.php' ?>
   <h1>Switch Statements</h1>

   <?php

echo '<br/>';
$grade = 'C';

switch($grade)
{
    case 'A';
        echo '<h2 style="color: orange">EXCELLENT JOB!!!!</h2>';
        echo '<br/>';
        break;
    case 'B';
        echo '<h2 style="color: yellow">GREAT JOB!!!!</h2>';
        echo '<br/>';
        break;
    default;
    echo '<h2 style="color: blue">TRY AGAIN!!!!</h2>';
    echo '<br/>';
    break;



}


?>
<?php require 'includes/footer.php'?>