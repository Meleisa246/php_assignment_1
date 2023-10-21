<?php 
    $title = "For Loops";
    include 'includes/header.php' ?>
    <h1>For Loop Statements</h1>

    <?php
        for($count = 0; $count < 10; $count++)
        {
            echo'<p>BEAUTIFUL WORLD!!!!</p>';
        }
        for($count = 0; $count < 10; $count++)
        {
            echo "<p>The count is $count</p>";
        }

    ?>
<?php require 'includes/footer.php'?>