   <?php
    print "this is my first php code"; 
    print "<br>";//displaying a sentence or a string 
    print " today is<span style='color: #ff4856; text-transform:uppercase'> thursday </span>";
    print date('1');//ddisplaying the current day of week
    print "<br>";
    print date('d/F/Y',strtotime('+2 months'));
    //Creating a (declaring) a variable
    $fname ="alex kama";//declaration of a variable or a string  or a group of words
    $yob = 1999;//declaring of a digit or an interger
    print "<br>";
    echo $yob;
    print"<br>";
    $current_year = date('Y');
    echo $current_year;
     print"<br>";
     $age = $current_year - $yob;



    ?>
