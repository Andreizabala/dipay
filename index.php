
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Software</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
   body {
  background: linear-gradient(45deg, #FC466B, #3F5EFB);
  height: 100vh;
  font-family: 'Montserrat', sans-serif;
}


</style>


<body>
    <center>
    <div class ='container'>
    <form action="index.php" method="post">
        Enter Num1:  <input type="text" name="a" required>
        <br>
        Enter Num2:  <input type="text" name="b" required>
        <br>
        Enter Num3:  <input type="text" name="c"required>
        <br>
        Enter Num4:  <input type="text" name="d"required>
        <br>
        Enter Num5:  <input type="text" name="e"required>
        <br>
        Enter Num6:  <input type="text" name="f"required>
        <br>
        Enter Num7: <input type="text" name="g"required>
        <br>
        Enter Num8: <input type="text" name="h"required>
        <br>
        Enter Num9: <input type="text" name="i"required>
        <br>
        Enter Num10:  <input type="text" name="j"required>
        <br>
        <input type="submit" name="add" value = "addition">
        <input type="submit" name="multiply" value = "multiplication"> 
        <input type="submit" name="subtract" value = "Subtraction">
        <br>
        <br>
    </form>
</div>
    <?php 

if(isset($_POST['add'])){
$a = $_POST['a'];
$b = $_POST['b'];
$c = $_POST['c'];
$d = $_POST['d'];
$e = $_POST['e'];
$f = $_POST['f'];
$g = $_POST['g'];
$h = $_POST['h'];
$i = $_POST['i'];
$j = $_POST['j'];
$sum = $a+ $b + $c+ $d+ $e+ $f+ $g+ $h+ $i+ $j ; 
echo "The sum is $sum ";

}

else if(isset($_POST['multiply'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
   $multiplication =  $a  *  $b * $c * $d * $e * $f * $g *  $h * $i * $j ; 
   echo "\nThe product is $multiplication ";
  
}
else if(isset($_POST['subtract'])){
    $a = $_POST['a'];
    $b = $_POST['b'];
    $c = $_POST['c'];
    $d = $_POST['d'];
    $e = $_POST['e'];
    $f = $_POST['f'];
    $g = $_POST['g'];
    $h = $_POST['h'];
    $i = $_POST['i'];
    $j = $_POST['j'];
   $subtraction =  $a -  $b - $c - $d - $e - $f - $g -  $h - $i - $j ; 
   echo "The Diffrence is $subtraction ";
   
}



/*
$a = $b = $c = $d = $e = $f = $g = $h = $i = $j = " ";
$add = $a+ $b + $c+ $d+ $e+ $f+ $g+ $h+ $i+ $j ; 
$multiply = $a+ $b + $c+ $d+ $e+ $f+ $g+ $h+ $i+ $j ; 
$subtraction = $a -  $b - $c - $d - $e - $f - $g -  $h - $i - $j ; 
*/
?>
</center>
<br>
<br>
    <center>
    <form action="index.php" method="post">
        Enter Num1: <input type="text" name="x"required>
        <br>
        Enter Num2:  <input type="text" name="y"required>
        <br>
        <input type="submit" name="divide" value = "division">
    </form>

<br>
<br>
    <?php 
        if(isset($_POST['divide'])){
            $x = $_POST['x'];
            $y = $_POST['y'];
            $division = $x / $y;
            echo "\nThe quotient is $division ";
        
        
        }
    ?>
</center>
</body>

</html>





