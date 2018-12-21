<table class="table">
    <thead class=" text-primary">
        <th> ID </th>
        <th> Name </th>
        <th> Email </th>
        <th> Birthday </th>
        <th> National </th>
        <th> Address </th>
        <th> Edit </th>
    </thead>
<?php
    include "data.php";
    
    if(isset($_POST['page'])){
        $page = $_POST['page'];
    }else{
        $page = 1;
    }
    $limit = 10;
    $start = ($page-1)*$limit;
    if(!empty($_POST['searchsv'])){
        $dt->select('SELECT lms_students.code, lms_students.first_name, lms_students.email, lms_students.birth_day,
        lms_students.birth_month, lms_students.birth_year,  lms_countries.name cname, lms_vietnam.name vname
        FROM lms_students, lms_countries,lms_vietnam WHERE lms_countries.id = lms_students.country AND lms_vietnam.id = lms_students.province
        AND lms_students.first_name LIKE "%'.$_POST["searchsv"].'%" LIMIT '.$start.','.$limit.';');
        echo '<b> Có '.$dt->result->num_rows.' kết quả cho từ khóa "'.$_POST["searchsv"].'" </b>';
        echo '<tbody >';
        while($r=$dt->fetch()){
            echo "<tr><td>".$r["code"]."</td><td>".$r["first_name"]."</td><td>".$r['email']."</td><td>".$r["birth_day"]."/".$r["birth_month"]."/".$r["birth_year"].
            "</td><td>".$r["cname"]."</td><td>".$r["vname"]."</td><td> <i class='material-icons delete deletesv".$r["code"]."'>cancel </i></td></tr>";
        }
        echo '</tbody >';
        echo "<div id='empty'></div>";
    }
    else{
        $dt->select('SELECT sex FROM lms_students');
        $total_row = $dt->result->num_rows;
        $dt->select('SELECT lms_students.code, lms_students.first_name, lms_students.email, lms_students.birth_day,
        lms_students.birth_month, lms_students.birth_year,  lms_countries.name cname, lms_vietnam.name vname
        FROM lms_students, lms_countries,lms_vietnam WHERE lms_countries.id = lms_students.country AND lms_vietnam.id = lms_students.province LIMIT '.$start.','.$limit.';');
        echo '<tbody >';
        while($r=$dt->fetch()){
            echo "<tr><td>".$r["code"]."</td><td>".$r["first_name"]."</td><td>".$r['email']."</td><td>".$r["birth_day"]."/".$r["birth_month"]."/".$r["birth_year"].
            "</td><td>".$r["cname"]."</td><td>".$r["vname"]."</td><td> <i class='material-icons delete deletesv".$r["code"]."'>cancel </i></td></tr>";
    ?>
    <script>
        $(document).ready(function(){
            var code = "<?php Print($r['code']); ?>";
            var first_name = "<?php Print($r['first_name']); ?>";
            var email = "<?php Print($r['email']); ?>";
            var birth_day = "<?php Print($r['birth_day']); ?>";
            var birth_month = "<?php Print($r['birth_month']); ?>";
            var birth_year  = "<?php Print($r['birth_year']); ?>";
            var cname = "<?php Print($r['cname']); ?>";
            var vname = "<?php Print($r['vname']); ?>";
            $(document).on("click",'.deletesv'+code,function(){
                $.post('../data/deletesv.php',{
                    code:code
                },function(data,status){
                    $("#empty").html(data);
                    loaduser(1);
                })
            })
        });
    </script>
    <?php
        }
        echo '</tbody >';
        echo "<div id='empty'></div>";
    ?>
    </table>

    <?php
        echo '<div>';
            for($i=1;$i <= ceil($total_row/$limit);$i++){
                if($i==$page){
                    echo '<div class="page" style="background: rgb(130, 137, 175);"> <b  id="page'.$i.'"">'.$i.'</b> </div>';
                }
                else{
                    echo '<div class="page" style=""> <b  id="page'.$i.'"">'.$i.'</b> </div>';
                }
            }   
        echo '</div>'; 
    }
    ?>
