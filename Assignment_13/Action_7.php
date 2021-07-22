<?php
    $ds = $_POST['ds'];

    $php = $_POST['php'];

    $se = $_POST['se'];

    $os = $_POST['os'];

    $lab1 = $_POST['lab1'];

    $lab2 = $_POST['lab2'];


        

    $t_marks = $ds + $php + $os + $se + $lab1 + $lab2;

    $per = $t_marks/6;

    echo "<h1>Marksheet of the Student</h1>";

    echo "Name : ".$_COOKIE['student_name']."<br>";
    echo "<br>";

    echo "Class : ".$_COOKIE['student_class']."<br>";
    echo "<br>";

    echo "Data structure : ".$ds."<br>";
    echo "<br>";

    echo "PHP : ".$php."<br>";
    echo "<br>";

    echo "Software Engineering : ".$se."<br>";
    echo "<br>";

    echo "Operating System : ".$os."<br>";
    echo "<br>";

    echo "Laboratory 1 : ".$lab1."<br>";
    echo "<br>";


    echo "Laboratory 2 : ".$lab2."<br><br>";
    echo "<br>";
    echo "Total Marks : ".$t_marks."<br>";
    echo "<br>";

    echo "Percentage : ".$per;
    echo "<br>";

?>