<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bài 2</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $a = 1;
        $b = 4;
        $c = 3;

        $delta = $b*$b - 4*$a*$c;
        if ($delta < 0) {
            echo "Phương trình vô nghiệm !";
        } else if ($delta == 0) {
            $x = -($b/2*$a);
            echo "Phương trình có nghiệm kép: {$x}";
        } else if ($delta > 0) {
            $x1 = (-$b+sqrt($delta))/2*$a;
            $x2 = (-$b-sqrt($delta))/2*$a;
            echo "Phương trình có 2 nghiệm phân biệt: x1 = {$x1} và x2 = {$x2}";
        }

    ?>
</body>
</html>