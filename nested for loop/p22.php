<?php

    for($i=5;$i>=1;$i--){
        for($j=1;$j<=$l;$j++){
            echo $j;
        }
        for($k=$j;$k<5;$k++){
            echo "&nbsp;&nbsp;";
        }
        
        for($l=$k;$l<=10-$i;$l++){
            echo "&nbsp;&nbsp;";            
            
        }
        for($m=$i;$m>=1;$m--){
            echo $m;
        }
        echo "<br>";
    }
	
	
    for($i=2;$i<=5;$i++){
        for($j=1;$j<=$i;$j++){
            echo $j;
        }
        for($k=$j;$k<=5;$k++){
            echo "&nbsp;&nbsp;";            
        }
        for($l=$k;$l<=10-$i;$l++){
            echo "&nbsp;&nbsp;";            
            
        }
        for($m=$i;$m>=1;$m--){
            echo $m;
        }
        
        echo "<br>";
    }
?>