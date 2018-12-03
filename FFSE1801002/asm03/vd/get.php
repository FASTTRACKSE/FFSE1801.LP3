<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
</head>
<body>
    <form action="" method="POST">
        <input name="hoten" type="text">
        <input name="submit" type="submit" value="Gửi đi">
    </form>
    <pre>
        <?php
            print_r($_POST);
        ?>
    </pre>
    <?php
        if($_POST["hoten"]=="dân"){
            echo "Dân đẹp trai :))))))))))";
        }else{
            echo $_POST["hoten"]." đù :))))))))))";
        }
    ?>
</body>
</html>