<?php
    $name = @$_POST['name'];
    $conn=mysqli_connect("localhost","zjwdb_6244433","Qwert123")or die("数据库连接失败");
    // Check connection
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,"$name");


        $sql = "SELECT state FROM `$name`.`state`";
        $result = mysqli_query($conn, $sql);
        if(! $result )
        {
          die('无法获取数据: ' . mysqli_error($conn));
        }
        if (@mysqli_num_rows($result) > 0) {
            // 输出数据
            while($row = @mysqli_fetch_assoc($result)) {
                if($row['state'] == "已有预约"){

                    echo "已有预约";
                }else{
                    $sql2="UPDATE `state` SET `state`='已有预约' WHERE 1";
                    $retval2 = mysqli_query($conn,$sql2);
                    if(! $retval2 )
                    {
                      die('无法更新数据: ' . mysqli_error($conn));
                    }
                    echo "可被预约";
                }

            }
        }

    ?>
