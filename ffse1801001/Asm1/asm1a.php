<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(1) {
            background-color: #dddddd;
        }
        h1 {
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
$list = [
    [
        'a' => 2,
        'b' => 3,
        'c' => 4,
    ],
    [
        'a' => 0,
        'b' => -10,
        'c' => 2,
    ],
    [
        'a' => -2,
        'b' => -5,
        'c' => 8,
    ],
    [
        'a' => 0,
        'b' => 4,
        'c' => 3,
    ],
    [
        'a' => -6,
        'b' => 3,
        'c' => 0,
    ],
    [
        'a' => -2,
        'b' => 0,
        'c' => 1,
    ],
    [
        'a' => 1,
        'b' => 7,
        'c' => -10,
    ],
    [
        'a' => 0,
        'b' => 6,
        'c' => 0,
    ],
    [
        'a' => 0,
        'b' => 0,
        'c' => 0,
    ],
    [
        'a' => 2,
        'b' => -7,
        'c' => 3,
    ],
];

function tinhbac2($a, $b, $c)
{
    $delta = $b * $b - 4 * $a * $c;
    if ($a != 0) {
        if ($delta > 0) {
            $x1 = ($delta ^ (1 / 2)) / ($a * 2);
            $x2 = -($delta ^ (1 / 2)) / ($a * 2);
            $notebh = "Phương trình có hai nghiệm!";
        } else {
            if ($delta == 0) {
                $x1 = -$b / (2 * $a);
                $x2 = -$b / (2 * $a);
                $notebh = "Phương trình có nghiệm kép!";
            }else {
                $x1 = '-';
                $x2 = '-';
                $notebh = "Phương trình vô nghiệm, delta = 0!";
            }
         } 
    }else {
                $x1 = '-';
                $x2 = '-';
                $notebh = "Phương trình vô nghiệm, delta = 0!";
            }
    return [$x1, $x2, $notebh];
}

?>

    <h1>Giải phương trình bậc hai một ẩn số</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>a</th>
            <th>b</th>
            <th>c</th>
            <th>x1</th>
            <th>x2</th>
            <th>Ghi chú</th>
            <th>Remove</th>
        </tr>
        <?php
foreach ($list as $key => $value) {
    $result = tinhbac2($value['a'], $value['b'], $value['c']);
    if (is_numeric($result[0])) {
        echo "<tr>";

    } else {
        echo "<tr style='color: red'> ";

    }
    echo "<td>" . ($key + 1) . "</td>";
    echo "<td>" . $value['a'] . "</td>";
    echo "<td>" . $value['b'] . "</td>";
    echo "<td>" . $value['c'] . "</td>";
    echo "<td>" . $result[0] . "</td>";
    echo "<td>" . $result[1] . "</td>";
    echo "<td>" . $result[2] . "</td>";

    echo "<td onclick='this.parentElement.remove()'>Xóa</td>";
    echo "</tr>";

}
?>
    </table>

</body>
</html>