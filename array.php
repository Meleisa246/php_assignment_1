<?php 
    $title = "Arrays";
    include 'includes/header.php' ?>
    <h1> <?php echo $title ?></h1>

    <?php
        $num = 3;

        $numbers = array(0,1,2,3,4,5,6,7,8,9,10);
        echo $numbers[6];

        echo "<p>$numbers[9]</p>";

        $size = count($numbers);
        echo "<p>Array number is size $size</p>";

        for($count = 0; $count < $size; $count++)
        {
            echo "<p>$numbers[$count]</p>";
        }



    ?>
<?php require 'includes/footer.php'?>