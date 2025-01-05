<?php
    // Local Variables

    function local_test(){
        $a = 10;
        echo "Variable A inside function : $a";
    }

    local_test();
    echo "Variable A outside function : $a<br>";   // Error

    echo "<br><br>";

    // Global Variables

    $b = 10;
    $c = 9;

    function global_test(){
        global $b,$c;
        echo "Variable B inside function : $b<br>";
        $c = $b+$c;
    }
    
    global_test();
    echo "Variable B outside function : $b<br>";
    echo $c;
    

?>