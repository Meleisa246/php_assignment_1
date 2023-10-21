<?php 
    $title = "While/Do while loops";
    include 'includes/header.php' ?>
<h1> While Loops Statements</h1>

<?php
$grade = 0;
while($grade <9)
{
    echo '<p>I HAVE FAILED!</p>';
        $grade++;
}
    echo'EXIT LOOP!!';

?>

<h1>Do While Loops Statements</h1>

<?php
    $grade = 0;
    do{
        echo '<p>SKETCHING</p>';
        $grade++;
    }
    while ($grade <9);
    echo'EXIT LOOP!!';
    

?>
    <br/>
    <br/>

<?php require 'includes/footer.php'?>