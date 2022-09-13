<?php
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $res = ($a**3)+($b*$c)-($a/$b);
    $results = [
        "result" => $res
    ]
?>