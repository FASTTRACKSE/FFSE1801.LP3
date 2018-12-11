
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
    ],
    [
        'a' => 0,
        'b' => -10,
    ],
    [
        'a' => -2,
        'b' => -5,
    ],
    [
        'a' => 0,
        'b' => 4,
    ],
    [
        'a' => -6,
        'b' => 3,
    ],
    [
        'a' => -2,
        'b' => 0,
    ],
    [
        'a' => 1,
        'b' => 7,
    ],
    [
        'a' => 0,
        'b' => 6,
    ],
    [
        'a' => 0,
        'b' => 0,
    ],
    [
        'a' => 2,
        'b' => -7,
    ],
];

function tinhbacnhat($a, $b)
{
    if ($a != 0) {
        if ($b != 0) {
            $x = -$b / $a;
            $note = "Phương trình có nghiệm!";
        } else {
            $x = 0;
            $note = "Phương trình có nghiệm!";
        }
    } else {
        $x = "-";
        $note = "Hệ số không hợp lệ, a = 0";
    }
    return [$x, $note];
};

?>
    <h1>Giải phương trình bậc nhất một ẩn số</h1>
    <table>
        <tr>
            <th>STT</th>
            <th>a</th>
            <th>b</th>
            <th>x</th>
            <th>Ghi chú</th>
            <th>Remove</th>
        </tr>


        <?php

foreach ($list as $key => $value) {
    $result = tinhbacnhat($value['a'], $value['b']);
    if (is_numeric($result[0])) {
        echo "<tr>";

    } else {
        echo "<tr style='color: red'> ";

    }
    echo "<td>" . ($key + 1) . "</td>";
    echo "<td>" . $value['a'] . "</td>";
    echo "<td>" . $value['b'] . "</td>";
    echo "<td>" . $result[0] . "</td>";
    echo "<td>" . $result[1] . "</td>";
    echo "<td onclick='this.parentElement.remove()'>Xóa</td>";
    echo "</tr>";

}

?>
    </table>

</body>
</html>