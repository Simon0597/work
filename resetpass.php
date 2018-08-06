<?php
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
    mysqli_select_db($conn,"users") or die("数据库访问错误".mysql_error());
    mysqli_query($conn,"set names utf8");
    //登录

    $username = $_POST['resetname'];
    $password = $_POST['resetpass'];
$check_query = mysqli_query($conn,"select * from login where name='$username'");
    //echo mysqli_num_rows($check_query);
    if(@mysqli_num_rows($check_query) > 0){

        $sql="UPDATE `login` SET `password`='$password' WHERE `name`='$username'";
        $retval = mysqli_query($conn,$sql);
        if(! $retval )
        {
          die('无法更新数据: ' . mysqli_error($conn));
        }

        echo '修改密码成功';
    }else{
        echo '未找到该用户名';
    }

?>
