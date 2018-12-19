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
                    echo "X = ".$this->x;
                    echo "<br>";
                    echo "Y = ".$this->y;

                }

            }

            class CIRCLE extends POINT{
                var $r = '' ;

                function __construct($x,$y,$r) {
                    parent::__construct($x,$y);
                    $this->r = $r;

                }

                function show_r() {

                    parent::show_xy();
                    echo "<br>";
                    echo "R = ".$this->r;
                }

            }
            ?>
            <form action="" method="POST">
                <input type="text" name="x" placeholder="x"/>
                <input type="text" name="y" placeholder="y"/>
                <input type="text" name="r" placeholder="r"/>
                <input type="submit" name="sub" value="Gửi"/>

            </form>

            <?php
            if(isset($_POST['sub'])) {
                $diem = new CIRCLE($_POST['x'],$_POST['y'],$_POST['r']);
                $diem ->show_r();
            

                

            }
                
        ?>  

        
    </body>
</htmL>