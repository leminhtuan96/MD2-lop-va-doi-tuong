<<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <p>
        <input type="text" name="a"> X^2 +
        <input type="text" name="b"> X +
        <input type="text" name="c"> = 0
    </p>
    <button>tinh</button>
</form>
</body>
</html>
<?php
include_once "QuadraticEquatin.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_REQUEST["a"];
    $b = $_REQUEST["b"];
    $c = $_REQUEST["c"];
}
$pt = new QuadraticEquatin($a, $b, $c);
$delta = $pt->getDiscriminant();
if (isset($a) && isset($b) && isset($c)) {
    if ($a == 0) {
        if ($b == 0) {
            if ($c == 0) {
                echo "phương tình vô số nghiệm";
            } else {
                echo "phương trình vô nghiệm";
            }
        } else {
            echo "phương trình có 1 nghiệm X =" . -$c / $b;
        }
    } else {
        if ($delta < 0) {
            echo "the equation has no roots";
        } else if ($delta == 0) {
            echo "phuong trinh co nghiem X1 = X2 = " . (-$b / 2 * $a);
        } else {
            echo "phuong trinh co 2 nghiem phan biet X1 = " . $pt->getRoot1() . "va X2 = " . $pt->getRoot2();
        }
    }
}