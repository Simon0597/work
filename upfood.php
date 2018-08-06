<?php

    //获取表单数据
session_start();
$name = $_SESSION['user'];
    $foodname=$_POST['upfoodname'];
    $foodprice=$_POST['upfoodprice'];
    $foodcontent=$_POST['upfoodcontent'];
    $imges1=$_POST['image'];


    //连接数据库

    $conn=mysqli_connect("localhost","zjwdb_6244433","Qwert123")or die("数据库连接失败");
    /*$retval = mysqli_query($conn,"CREATE DATABASE ".$name);
    if(! $retval )
    {
        die('创建数据库失败: ' . mysqli_error($conn));
    }*/
    /*mysqli_select_db( $conn, '$name' );
    $re = mysqli_query( $conn, "CREATE TABLE `$name`.`collect` ( `id` INT NOT NULL  , `papername` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `author` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ) ENGINE = InnoDB;" );
    if(! $re )
    {
        die('数据表创建失败: ' . mysqli_error($conn));
    }*/


    //选择数据库

    mysqli_select_db($conn,"$name");

    //设置数据库编码

    mysqli_query($conn,"set names utf8");

   /* $compare = mysqli_query($conn,"select * from sharefood where name = '$name'");
    //将表单获得的数据插入数据库
    if(mysqli_num_rows($compare)>0){
        echo "<script>alert('用户名已存在');window.location.href = 'regist.html'</script>";
        exit;
    }
    //执行sql 语句*/
    $sql="insert into `$name`.`upfood`(`upfoodname`,`upfoodprice`,`upfoodcontent`,`upfoodImg`)values('{$foodname}','{$foodprice}','{$foodcontent}','{$imges1}')";
    $retval = mysqli_query($conn,$sql);
    if(! $retval )
    {
      die('无法插入数据: ' . mysqli_error($conn));
    }

    //获得受影响的行数

    $row=mysqli_affected_rows($conn);

    if($row<=0){
       echo "上传失败";
    }else{
        echo "上传成功";
    }
    //}

?>
