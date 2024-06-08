<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATOR APP</title>
</head>
<body>
    <fieldset style="width: 800px; margin: 0 auto;">
        <form method="post">
            <legend style="text-align:left;"><h2>calculator </h2></legend>
            Enter the first number:
            <input type="text" name="no1">
            Enter the second number:
            <input type="text" name="no2"><br><br>
            <input type="submit" name="add" value="add">
            <input type="submit" name="subract" value="subract">
            <input type="submit" name="multiply" value="multiply">
            <input type="submit" name="Divide" value="Divide">
            <input type="submit" name="exponentiation" value="exponentiation">
            <input type="submit" name="percentage" value="percentage">
            <input type="submit" name="Square-Roots" value="Square-Roots">
            <input type="submit" name="log" value="log">
        </form>
    </fieldset>
</body>
</html>

<?php
if(isset($_POST["add"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    $add=$no1 + $no2;
    echo"Answer is:{$add}";
}
if(isset($_POST["subract"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    $subract=$no1 - $no2;
    echo"Answer is:{$subract}";
}
if(isset($_POST["multiply"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    $multiply=$no1 * $no2;
    echo"Answer is:{$multiply}";
}
if(isset($_POST["Divide"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    $Divide=$no1 / $no2;
    echo"Answer is:{$Divide}";
}
if(isset($_POST["exponentiation"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    function exponentiation($no1,$no2){
        return pow($no1,$no2);
    }
    $exponentiation=exponentiation($no1,$no2);
    echo"Answer is:{$exponentiation}";
}
if(isset($_POST["percentage"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    function calcpercent($no1,$no2){
        return ($no1*$no2)/100;
    }
    $percentage=calcpercent($no1,$no2);
    echo"Answer is:{$percentage} %";
}
if(isset($_POST["Square-Roots"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    function SquareRoot($no){
        return sqrt($no);
    }
    $Square_Root1=SquareRoot($no1);
    $Square_Root2=SquareRoot($no2);
    echo"Answer of first number is:{$Square_Root1}";
    echo"                Answer of second number is:{$Square_Root2}";
}
if(isset($_POST["log"])){
    $no1=$_POST["no1"];
    $no2=$_POST["no2"];
    function calcLog($no){
        return log($no);
    }
    $log1=calcLog($no1);
    $log2=calcLog($no2);
    echo"Answer of first number is:{$log1}";
    echo"                Answer of second number is:{$log1}";
}
?>