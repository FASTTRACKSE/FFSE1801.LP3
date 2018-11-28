<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bài 1</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <?php
        $a = 2;
        $b = 1;
        if ($a!=0) {
            if ($b==0) {
                echo "x = 0";
            } else {
                $x = (-$b)/$a;
                echo "Phương trình có nghiệm là {$x}";
            }
        } else {
            if ($b!=0) {
                echo "Phương trình vô nghiệm !";
            } else {
                echo "Phương trình vô số nghiệm !";
            }
        }
    ?>
</body>
</html>