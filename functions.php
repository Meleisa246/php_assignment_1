<?php 
    $title = "Functions";
    include 'includes/header.php' ?>
    <h1>Functions</h1>
    

    <?php
        echo '<br/>';

        function writeMessage(){

            echo "Success is a journey not a destination! <br/>";
        }

        writeMessage();
        writeMessage();
        writeMessage();

        echo '<br/>';

        function addFunction($num1, $num2){
            $sum = $num1 + $num2;
            echo "The sum of $num1 and $num2 is $sum <br/>";
        }

        function changeNum(&$num){
            $num = $num + 10;
        }

            $num = 1050;

        function returnProduct($num1, $num2){
            $prod = $num1 * $num2;
            return $prod;

        }

        addFunction(150, 245);
        addFunction(225, $num);

        changeNum($num);
        echo $num . '<br/>';

        $return_value = returnProduct(50, 250);
        echo $return_value . '<br/>';




    ?>
        <br/>
        <br/>
<?php require 'includes/footer.php'?>