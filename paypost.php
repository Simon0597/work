<?php
 session_start();
    $name = @$_SESSION['user'];
    $payname = $_POST['payname'];
    $payprice = $_POST['payprice'];
    $paytime = $_POST['paytime'];
    $strpayname =preg_replace('/\n/',' ',$payname);

    // 创建连接
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
    // Check connection
    if (!$conn) {
        die("连接失败: " . mysqli_connect_error());
    }
    mysqli_select_db($conn,"$name");

    $sql="insert into `$name`.`paylist`(`payname`,`payprice`,`paytime`)values('{$strpayname}','{$payprice}','{$paytime}')";
    $retval = mysqli_query($conn,$sql);
    if(! $retval )
    {
      die('无法插入数据: ' . mysqli_error($conn));
    }

    //获得受影响的行数

    $row=mysqli_affected_rows($conn);

    if($row<=0){
       echo "失败')";
    }else{
        echo "成功";
    }

?>
