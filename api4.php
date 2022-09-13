<?php
    $month = $_GET["month"];
    $day = $_GET["day"];
    if($month == 1){
        $res = 359 - $day;
    }

    elseif($month == 2){
        $res = 328 - $day;
    }

    elseif($month == 3){
        $res = 300 - $day;
    }

    elseif($month == 4){
        $res = 269 - $day;
    }

    elseif($month == 5){
        $res = 239 - $day;
    }

    elseif($month == 6){
        $res = 208 - $day;
    }
     
    elseif($month == 7){
        $res = 178 - $day;
    }
    
    elseif($month == 8){
        $res = 147 - $day;
    }
    
    elseif($month == 9){
        $res = 116 - $day;
    }
    
    elseif($month == 10){
        $res = 86 - $day;
    }
    
    elseif($month == 11){
        $res = 55 - $day;
    }
    
    elseif($month == 12){
        if($day <= 25){
          $res = 25 - $day
        }
        else{
            $res = 365 - $day
        }
    }
    $results = [
        "result" => $res
    ]
?>