<?php
    session_start();
    if(isset($_SESSION['VisitCount']))
    {
        $_SESSION['VisitCount'] += 1;
    }
    else
    {
        $_SESSION['VisitCount'] = 1;
    }

    $visitcount = $_SESSION['VisitCount']
    ;
    echo "Visit Count of this page is :: ".$visitcount;
?>