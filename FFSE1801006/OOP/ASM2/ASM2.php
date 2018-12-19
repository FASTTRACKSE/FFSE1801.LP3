<!-- Xây dựng lớp NGUOI, lớp dẫn xuất NHANVIEN kế thừa từ lớp NGUOI -->

<html>
    <body>
        <form action="" method="POST">
            <input type="text" name="name" placeholder="Họ và tên"/>
            <input type="text" name="age" placeholder="Tuổi"/>
            <input type="text" name="code" placeholder="Mã staff"/>
            <input type="submit" name="sub" value="Gửi"/>


        </form>

        <?php 
            class PERSON {
                var $name = '' ;
                var $age = '' ;

                function __construct($name,$age) {
                    $this->name = $name;
                    $this->age = $age;


                }

                function show_person() {
                    echo "Họ và Tên : ".$this->name;
                    echo '<br>';
                    echo "Tuổi : ".$this->age;
                    echo '<br>';

                }

            }

            class STAFF extends PERSON {
                var $code = '' ;

                function __construct($name,$age,$code) {
                    parent::__construct($name,$age);
                    $this->code = $code;
                }


                function show_staff() {
                    parent::show_person();
                    echo "Mã staff : ".$this->code;

                }
            }

            if(isset($_POST['sub'])) {
                $info = new STAFF($_POST['name'],$_POST['age'],$_POST['code']);
                $info->show_staff();
            }
        
        ?>

        

    </body>
</html>