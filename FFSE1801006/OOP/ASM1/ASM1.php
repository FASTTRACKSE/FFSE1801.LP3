<!-- Xây dựng lớp hình tròn dẫn xuất từ lớp điểm, kế thừa phương thức của lớp điểm -->

<html>
    <body>

        
        <?php
            class POINT {
                var $x = '' ;
                var $y = '' ;

                function __construct($x,$y) {
                    $this->x = $x;
                    $this->y = $y;
 
                }

                function show_xy() {
                    echo $this->x;
                    echo "<br>";
                    echo $this->y;

                }

            }

            class CIRCLE extends POINT{
                
                var $r = '' ;

                function __construct($r) {
                    parent::__construct($x,$y);
                    $this->r = $r;

                }

                function show_r() {

                    parent::show_xy();
                    echo "<br>";
                    echo $this->r;
                }

            }
            
            // <!-- <form action="" method="POST">
            //     <input type="text" name="x" placeholder="x"/>
            //     <input type="text" name="y" placeholder="y"/>
            //     <input type="submit" name="sub" value="Gửi"/>

            // </form> -->
            
            // if(isset($_POST['sub'])) {
            //     $diem = new POINT($_POST['x'],$_POST['y']);
            //     echo '<pre>';
            //     $diem ->show_r();
            //     echo '</pre>';

                

            // }
                
            $diem = new CIRCLE(23,65,7);
            $diem->show_r();
        ?>  

        
    </body>
</htmL>