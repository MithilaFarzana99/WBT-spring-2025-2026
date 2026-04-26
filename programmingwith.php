<!DOCTYPE html>
<html>
    <body>
        <?php
        //1. Write a PHP script to calculate the area and perimeter of a Rectangle, and display the result. Hints: The area of a Rectangle = length × width, perimeter = 2 × (length + width)
        $length = 10; 
        $width = 5;  

        $area = $length * $width;
        $perimeter = 2 * ($length + $width);

        echo "The area of the rectangle is: $area <br>"; 
        echo "The perimeter of the rectangle is: " . $perimeter;
        echo '<br>';

        //2. Write a PHP script to calculate the VAT (Value Added Tax) over an amount Hints: VAT = 15% of the amount
        $amount = 5000; 
        $vat_rate = 0.15; 
        $vat = $amount * $vat_rate;

        echo "The VAT of the amount is: $$vat <br>";

        //3. Write a PHP script to find whether a given number is odd or even Hints: use IF-ELSE
        $number= 10;
        if($number % 2 == 0){
            echo "The number $number is even. <br>";
        }
        else{
            echo "The number $number is odd. <br>";
        }

        //4. Write a PHP script to find the largest number from three given numbers Hints: use IF-ELSE
        $x = 10;
        $y = 11;
        $z = 12;
        if ($x > $y && $x > $z){
            echo "$x is the largest";
        }
        elseif ($y > $x && $y > $z){
            echo "$y is the largest. <br>";
        }
        else{
            echo "$z is the largest. <br>";
        }
        
        //5. Write a PHP script to print all the odd numbers between 10 to 100 Hints: use LOOP & IF-ELSE
        for($i = 10; $i <= 100; $i++){
            if($i % 2 != 0){
                if($i == 99){
                echo "$i.";
                }
                else{
                echo "$i,";
                }
            }
        }
        echo '<br>';

        //6. Write a PHP script to search an element from an array Hints: use LOOP, IF-ELSE & ARRAY
        $array = [1, 2, 3, 4, 5];
        $elem = 4;
        $n = count($array);
        $foundAtIndex = -1;

        for($i = 0; $i < $n; $i++){
            if($array[$i] == $elem){
                $foundAtIndex = $i;
                break;
            }
        }

        if($foundAtIndex != -1){
            echo "element $elem found at index $foundAtIndex";
        }
        else{
            echo "element $elem not found";
        }
        echo '<br>';

        // 6 alternative method using array_search
        $array = [1, 2, 3, 4, 5];
        $elem = 55;

        $index = array_search($elem, $array);

        if ($index !== false) {
            echo "element $elem found at index: $index";
        } else {
            echo "element $elem not found";
        }
        echo '<br>';

        // 7. Print the following shapes Hints: use NESTED LOOP
        // *
        // * *
        // * * *

        for($i = 1; $i <= 3; $i++){
            for($j = 1; $j <= $i; $j++){
                echo " * ";}
            echo " <br> ";
        }
        echo '<br>';

        // 1 2 3
        // 1 2
        // 1

        for($i = 3; $i >= 1; $i--){
            for ($j = 1; $j <= $i; $j++){
                echo "$j";
            }
            echo "<br>";
        }
        echo '<br>';
        
        // A
        // B C
        // D E F

        $letters = 'A';
        for($i = 1; $i <= 3; $i++){
            for($j = 1; $j <= $i; $j++){
                echo "$letters";
                $letters++;
            }  
            echo "<br>";    
        }
        ?>
    </body>
</html>