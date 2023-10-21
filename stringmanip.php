<?php 
    $title = "String manipulation";
    include 'includes/header.php' ?>
    <h1>String Manipulation</h1>

    <?php
        $phase1 = "Late student";
        $phase2 = "Early student";
        $name = "meleisa pinnock";
    

        echo $phase1 . " was Paul and Tim was the " . $phase2 ;
        echo'<br/>';


        echo 'Uppercase first letter ' .ucfirst($name). '<br/>';
        echo 'Uppercase first letter of each word ' .ucwords($name). '<br/>';

        echo 'Upper case '. strtoupper($name). '<br/>';
        echo 'Lower case '. strtolower($name). '<br/>';
        echo '<hr/>';
        echo 'Repeat String '. str_repeat('M', 3) . '<br/>';
        echo 'Get a Substring '. substr($name, 2, 5). '<br/>';
        echo 'Repeat String - Nested Function '. strtoupper(str_repeat('m', 3)) . '<br/>';
        
        echo 'Get position of string ' . strpos($name, 'p'). '<br/>';

        echo 'Find Character "l" ' . strchr($name, 'l'). '<br/>';
        echo 'Find Character "i" ' . strchr($name, 'i'). '<br/>';
        echo 'Find Character "e" ' . strchr($name, 'e'). '<br/>';

        echo 'Find the Lenght of String ' . strlen($name). '<br/>';

        echo 'Without Trim '. "F" . "G H I" . "J" . '<br/>';
        echo 'Trim spaces on both sides '. "F" . trim("G H I") . "J" . '<br/>';
        echo 'Trim spaces to the left '. "F" . ltrim("G H I") . "J" . '<br/>';
        echo 'Trim spaces to the right '. "F" . rtrim("G H I") . "J" . '<br/>';

        echo 'Replace string with another '. str_replace("stand", "sit", $phase2) . '<br/>';
        

 


    ?>

    <br/>
    <br/>
    <br/>
    
    <?php require 'includes/footer.php'?>