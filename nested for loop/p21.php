<?php


    for($h=1;$h<=5;$h++)
	
	{
        for($i=1;$i<=$l;$i++){
            echo $i;
        }
        for($j=$i;$j<=5;$j++){
            echo "&nbsp;&nbsp;";
        }
        for($k=$j;$k<=10-$h;$k++){
            echo "&nbsp;&nbsp;";
        }
        for($l=$l;$l>=1;$l--){
            echo $l;
        }
        
        echo "<br>";
    }
?>