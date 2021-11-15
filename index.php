<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Software</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <title>Document</title>
</head>

<body class="h-screen bg-gradient-to-r from-green-400 via-yello-500 to-blue-500 flex justify-center items-center">
    <div class="flex flex-col container mx-auto justify-center items-center gap-20">
        <div class='bg-white rounded-2xl p-8 bg-opacity-50'>
            <form action="index.php" method="post" class="flex flex-col gap-5">
                <div class="grid grid-cols-5 gap-5 max-w-max">
                    <span class="flex flex-col w-40"><label>Enter Num1:</label><input type="text" name="a" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num2:</label><input type="text" name="b" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num3:</label><input type="text" name="c" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num4:</label><input type="text" name="d" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num5:</label><input type="text" name="e" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num6:</label><input type="text" name="f" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num7:</label><input type="text" name="g" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num8:</label><input type="text" name="h" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num9:</label><input type="text" name="i" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                    <span class="flex flex-col w-40"><label>Enter Num10:</label><input type="text" name="j" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-400 focus:border-transparent"></span>
                </div>

                <div class="flex justify-center items-center gap-5">
                    <input type="submit" name="add" value="addition" class="p-4 rounded-2xl bg-yellow-200 text-yellow-500 capitalize w-32 ring-4 ring-yellow-300">
                    <input type="submit" name="multiply" value="multiplication" class="p-4 rounded-2xl bg-blue-200 text-blue-500 capitalize w-32 ring-4 ring-blue-300">
                    <input type="submit" name="subtract" value="Subtraction" class="p-4 rounded-2xl bg-green-200 text-green-500 capitalize w-32 ring-4 ring-green-300">
                </div>
            </form>
        </div>

        <div class="bg-white rounded-2xl p-8 bg-opacity-50">
            <form action="index.php" method="post" class="flex flex-col gap-5">
                <div class="flex gap-5">
                    <span class="flex flex-col"><label>Enter Num1:</label><input type="text" name="x" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></span>
                    <span class="flex flex-col"><label>Enter Num2:</label><input type="text" name="y" required class="p-3 rounded-2xl bg-gray-100 focus:outline-none focus:ring-2 focus:ring-purple-600 focus:border-transparent"></span>
                </div>
                <div class="flex justify-center items-center">
                    <input type="submit" name="divide" value="division" class="p-4 rounded-2xl bg-red-200 text-red-500 capitalize w-32 ring-4 ring-red-300">
                </div>
            </form>
        </div>

        <div class="bg-white w-max-w h-max-h flex justify-center items-center rounded-2xl bg-opacity-50 px-10 py-8">
        <?php
        if (isset($_POST['divide'])) {
            $x = $_POST['x'];
            $y = $_POST['y'];
            $division = $x / $y;
            echo "\nThe quotient is $division ";  
        }
        ?>
        <?php

        if (isset($_POST['add'])) {
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
            $sum = $a + $b + $c + $d + $e + $f + $g + $h + $i + $j;
            echo "The sum is $sum ";
        } else if (isset($_POST['multiply'])) {
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
            $multiplication =  $a  *  $b * $c * $d * $e * $f * $g *  $h * $i * $j;
            echo "\nThe product is $multiplication ";
        } else if (isset($_POST['subtract'])) {
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
            $subtraction =  $a -  $b - $c - $d - $e - $f - $g -  $h - $i - $j;
            echo "The Diffrence is $subtraction ";
        }
        ?>
        </div>
    </div>
</body>

</html>