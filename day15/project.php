<?php
//     echo "<html>";
//        echo "<head>";
//            echo "<title>";
//                echo "HOME";
//            echo "</title>";
//        echo "</head>";
//        echo "<body>";
//            echo "<h1>This is a heading.</h1>";
//            echo "<p>This is a Paragraph.</p>";
//        echo "</body>";
//     echo "</html>";
?>

<!--<html>
    <head>
        <title><?php //echo "HOME"; ?></title>
    </head>
    <body>
        <h1><?php //echo "This is a heading."; ?></h1>
        <p><?php //echo "This is a paragraph."; ?></p>

        <input type="text" value="<?php //echo "Hello world"; ?>"/>
    </body>
</html>-->

<?php
        // 3 major rules
        /*
            *Start with $;
            *a-z, A-Z, 0-9,_
            *No number in first.
        */
       echo '<h3> Varible</h3> <br/>'.
        '$name;
        $NAME;
        $NaMe;
        $_8name;
        $name8;';
echo '<hr/>';
        // 3 Standard rules
        /*
            *small letter;
            *meaning full
            *readable.
        */
echo ' <h3>Varible meaning</h3>';
        $name;
       $firstName = 'Rakib';
//
echo '<hr/>';
        $lastName = "Hasan";
        echo $firstName.' '.$lastName;

            //Operator
                //Arithmatic Operation
                        //Binary (+, -, *, /, %)
                        //unary (++, --, - )
                //Assignment operator
                   // =, +=, -=, *=, /=, %=, .=
                //Conditional Operator
                    // >, >=, <, <=, ==, !=, ===, !==
                //Logical Operator
                    // && ,||, !
echo '<hr/>';
echo '<h3>Operator</h3>';
$x=10;
$y=20;
echo $x+$y; //30
echo "<br/>";
echo $x-$y; //-10

echo $x-$y; //10
echo '<br/>';
echo $x*$y; //200
echo '<br/>';
echo $x/$y; //.5
echo '<br/>';
echo $x%$y; //10

echo '<hr/>';
echo '<h3>Unary Operator</h3>';
        echo ++$x; // 11
        echo "<br/>";
        echo $x; // 11

            echo $x--; //10
            echo '<br/>';
            echo $x; //9
            echo '<br/>';
            echo --$x; //8
            echo '<br/>';
            echo -$x; //-8
            echo '<br/>';
            echo -$x; //-8

            echo '<hr/>';
echo '<h3>Assignment Operator</h3>';
      //Assignment operator
                   // =, +=, -=, *=, /=, %=, .=

$x=10;
$y=20;
                echo $x+=$y; //30
                echo '<br/>';
                echo $x-=$y; //-10
                echo '<br/>';
                echo $x*=$y; //200
                echo '<br/>'; 
                echo $x/=$y; //.5
                echo '<br/>'; 
                echo $x%=$y; //10
                echo '<br/>'; 
        echo  $x+=$y; // 30
        echo "<br/>";
        echo  $x-=$y; // 10
        echo '<br/>'; 
        echo  $x.=$y; //1020
                    echo '<hr/>';
        echo '<h3>Conditional Operator</h3>';
        //Conditional Operator
                    // >, >=, <, <=, ==, !=, ===, !==
        $x=10;
        $y=20;
            echo $x<$y; //1
            echo '<br/>'; 
            
            echo $x<=$y; //1
            echo '<br/>'; 
            
            echo $x>$y;
            echo '<br/>'; //
            
            echo $x >= $y; //
            echo '<br/>'; 
            
            echo $x==$y; //
            echo '<br/>'; 
            
            echo $x!=$y; // 1
            echo '<br/>'; 
            
            echo $x===$y; // 
            echo '<br/>'; 
            
            echo $x!==$y; // 1
            echo '<br/>'; 
            
            
            echo '<hr/>';
        echo '<h3>Logical Operator</h3>';
         // && ,||, !
            
            
            echo $x<$y && $x<12;
            echo '<br/>'; 
            
            echo $x<$y || $x<2;
            echo '<br/>'; 
            
            echo !$x;
            echo '<br/>'; 
            
             echo '<hr/>';
        echo '<h3>Statement</h3>';
            //Statement
                // Single Line
                // Conditional
                    //IF, IF ELSE, IF ELSE IF, SWITCH

                // Repeated
                        //FOR, WHILE, DO WHILE, FOREACH


		echo '<h3>switch statement</h3>';
        echo "<br/>";
        $number = 50;

        switch ($number) {
            case 20:
                echo "Your card number is ".$number;
                break;
            case 30:
                echo "Your card number is ".$number;
                break;
            case 50:
                echo "Your card number is ".$number;
                break;
            default:
                echo "You don't have card number ";
        }
		//Your card number is 50
		
		echo '<hr/>';
        echo '<h3>Statement (Repeater)</h3>';
		echo "<br/>";
		echo "<br/>";
		echo "<br/>";
        echo '<h3>Statement (Repeated-FOR Loop)</h3>';
		
        echo "<br/>";
		$x=10;

        for ($x=0; $x<=10; $x++){
            echo $x." ";
        } //0 1 2 3 4 5 6 7 8 9 10
		 echo "<br />";
		 
		 echo "<br />";
		 
		 for ($x; $x>=0; $x--){
            echo $x."<br />";
        }
		
		
        echo "<br/>";echo "<br/>";
		echo '<h3>Statement (WHILE)</h3>';
        echo "<br/>";
		
		
        $x= 15;

        while ($x <= 30){
            echo $x." ";
            $x++; 
        }
		
        
		echo '<h3>Statement (DO WHILE)</h3>';
        echo "<br/>";
		
		
        do {
            echo $x." ";
            $x--;
        } while ($x>=15);
		echo "<br/>";echo "<br/>";
?>


















