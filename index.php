<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include('function.php');
        var_dump(isPowerOfTwo(4));
        echo "<br>";
        var_dump(isPowerOfTwo(7));
        echo "<br>";
        var_dump(isPowerOfTwo(10));
        echo "<br>";
        var_dump(isPowerOfTwo(64));
        echo "<br>";
        var_dump(isPowerOfTwo(128));
        echo "<br>";
        var_dump(isPowerOfTwo(100));
        echo "<br>";
        var_dump(sumOfNumbers(111));
        echo "<br>";
        var_dump(sumOfNumbers(13567));
        echo "<br>";
        var_dump(sumOfNumbers(145235));
        echo "<br>";

        $array = [2, 1, 5, 3, 7, 5, 9, 4];
        var_dump($array);
        echo "<br>";
        var_dump(mySort($array));
        echo "<br>";
        var_dump(pairs($array, 8));

        $t = "rrtt";
        $y = "rrtt";
        $f = 'rttr';
        $c = 'rtty';
        $u = 'rrtty';

        var_dump(f2($t, $y));
        echo "<br>";
        var_dump(f2($t, $f));
        echo "<br>";
        var_dump(f2($t, $c));
        echo "<br>";
        var_dump(f2($t, $u));
    ?>
    
</body>
</html>