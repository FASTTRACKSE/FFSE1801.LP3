<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
    <style>
        table{
            text-align: center;
            margin: 50px 50px;
            padding:0;
            border: 1px rgb(126, 126, 126) solid;
        }
        td,th{
            border: 1px rgb(126, 126, 126) solid;
            margin: 0;
            padding:0 20px;
        }
        .edit,.delete{
            cursor: pointer;
        }
        .edit:hover,
        .delete:hover{
            color:blue;
        }
        .avatar{
            height:100px;
        }
    </style>
<body>
    <table cellpadding="10" cellspacing="0"> 
        <tr>
            <th>TT</th>
            <th>Tên tài khoảng</th>
            <th>Họ và tên</th>
            <th>Ảnh đại diện</th>
            <th>Giới tính</th>
            <th>Địa chỉ</th>
            <th>Sở thích</th>
            <th>Chức năng</th>
        </tr>
        <form action='' method='post'>
            <?php if(isset($_SESSION['name'])){ 
                foreach($_SESSION['name'] as $key => $value){
                    if( isset($_POST['delete'.$key])){
                        unset($_SESSION['name'][$key]);
                        
                    }
                    if( isset($_SESSION['name'][$key])){
                    ?>
                <tr>
                    <td class='stt'></td>
                    <td><?php echo $key; ?></td>
                    <td><?php echo $value[1]; ?></td>
                    <td> <img class='avatar' src="<?php echo './folder/'.$key.$value[2]['name']; ?>" alt=""> </td>
                    <td><?php echo $value[4]; ?></td>
                    <td><?php echo $value[3]; ?></td>
                    <td><?php 
                    foreach($value[5] as $hobit){
                        echo $hobit.'<br>';
                    }
                     ?></td>
                    <td> <input type="submit" value="xóa" name="delete<?php echo $key;?>"></td>
                </tr>
                
            <?php 
            } } }
            ?>
        </form> 
    </table>
</body>
    <script language="javascript" src="https://code.jquery.com/jquery-2.2.4.js"></script>
    <script>
        $(document).ready(function(){
            stt();
        })
        function stt(){
            for(let j = 0;j<$("table").length;j++){
                var t = $("table").eq(j).find(".stt");
                for(let i = 0; i < t.length;i++){
                    t.eq(i).text(i+1);
                }
            }
        }
    </script>
</html>