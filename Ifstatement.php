<?php 
    $title = "IfStatements";
    include 'includes/header.php' ?>
    

<h3 style ="color: green"></h3>
   <?php 

echo ' <h2>If Statements</h2>';

echo '<br/>';

$grade = 20;

if($grade >= 50){
    echo '<h3 style="color: green">YOU HAVE PASSED. CONGRATULATIONS!!!</h3>';
}
else
{
    echo '<h3 style="color: red">YOU HAVE FAILED. SORRY!!!</h3>';
    echo '<br/>';
}
$grade = 'C';

if($grade == 'A'){
    echo '<h2 style="color: purple">EXCELLENT JOB!!!!</h2>';
    echo '<br/>';
}
elseif (
    $grade == 'B'
){
    echo '<h2 style="color: yellow">GREAT JOB!!!!</h2>';
    echo '<br/>';
}
else{
    echo '<h2 style="color: pink">TRY AGAIN!!!!</h2>';
    echo '<br/>';
}

?>
<?php require 'includes/footer.php'?>