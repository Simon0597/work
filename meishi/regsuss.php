<?php

    //获取表单数据

    $name=strval($_POST['regname']);

    $password=strval($_POST['regpass']);
    /*$n=strlen($name);

    $p=strlen($password);

    if(!($n>=1 && $n<=10)){

        echo "<!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset='utf-8'>
                        <title>用户名不符合规范</title>
                        <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
                        <script src='assets/js/jquery.min.js'></script>
                        <script src='assets/js/bootstrap.min.js'></script>
                    </head>
                    <body>
                        <div class='jumbotron'>
                            <div class='container'>
                                <h1>用户名长度为1-10位</h1>
                                <p>请点击 <a href='javascript:history.back(-1);'style='color:red;'>返回</a> 重试</p>
                            </div>
                        </div>
                    </body>
                    </html>";

    }elseif(!($p>=5 && $p<=16)){

        echo "<!DOCTYPE html>
                    <html>
                    <head>
                        <meta charset='utf-8'>
                        <title>密码不符合规范</title>
                        <link rel='stylesheet' href='assets/css/bootstrap.min.css'>
                        <script src='assets/js/jquery.min.js'></script>
                        <script src='assets/js/bootstrap.min.js'></script>
                    </head>
                    <body>
                        <div class='jumbotron'>
                            <div class='container'>
                                <h1>密码长度为5-16位</h1>
                                <p>请点击 <a href='javascript:history.back(-1);'style='color:red;'>返回</a> 重试</p>
                            </div>
                        </div>
                    </body>
                    </html>";

    }else{  */

    //连接数据库

    $conn=mysqli_connect("localhost","root","qwert123")or die("数据库连接失败");
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

    mysqli_select_db($conn,"users");

    //设置数据库编码

    mysqli_query($conn,"set names utf8");

    $compare = mysqli_query($conn,"select * from login where name = '$name'");
    //将表单获得的数据插入数据库
    if(mysqli_num_rows($compare)>0){
        echo "<script>alert('用户名已存在');window.location.href = 'regist.html'</script>";
        exit;
    }
    //执行sql 语句
    $sql="insert into login(name,password)values('{$name}','{$password}')";
    $retval = mysqli_query($conn,$sql);
    if(! $retval )
    {
      die('无法插入数据: ' . mysqli_error($conn));
    }

    //获得受影响的行数

    $row=mysqli_affected_rows($conn);

    if($row<=0){
       echo "alert('注册失败')";
    }else{
        $retval = mysqli_query($conn,"CREATE DATABASE `".$name."`");
        if(! $retval )
        {
            die('创建数据库失败: ' . mysqli_error($conn));
        }
        $re = mysqli_query($conn,"CREATE TABLE `$name`.`sharefood` (`num` INT NOT NULL AUTO_INCREMENT , `foodname` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `foodprice` VARCHAR(32) NOT NULL , `foodcontent` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `foodImg` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL ,PRIMARY KEY (`num`)) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }
        $re = mysqli_query($conn,"CREATE TABLE `$name`.`shopcar` (`num` INT NOT NULL AUTO_INCREMENT , `shopname` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `shopprice` VARCHAR(32) NOT NULL , `shopcontent` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `shopImg` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , PRIMARY KEY (`num`)) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }
        $re = mysqli_query($conn,"CREATE TABLE `$name`.`upfood` (`num` INT NOT NULL AUTO_INCREMENT , `upfoodname` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `upfoodprice` VARCHAR(32) NOT NULL , `upfoodcontent` TEXT CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `upfoodImg` VARCHAR(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , PRIMARY KEY (`num`)) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }

        $re = mysqli_query($conn,"CREATE TABLE `$name`.`paylist` (`num` INT NOT NULL AUTO_INCREMENT , `payname` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , `payprice` VARCHAR(32) NOT NULL , `paytime` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL , PRIMARY KEY (`num`)) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }

        $re = mysqli_query($conn,"CREATE TABLE `$name`.`state` (`state` VARCHAR(32) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }

        $re = mysqli_query($conn,"CREATE TABLE `$name`.`header` ( `headImg` VARCHAR(32) NOT NULL ) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }
        $re = mysqli_query($conn,"CREATE TABLE `$name`.`pengren` ( `pengrenshi` VARCHAR(32) NOT NULL ) ENGINE = InnoDB;");
        if(! $re )
        {
            die('创建数据表失败: ' . mysqli_error($conn));
        }

        echo "<script>alert('恭喜您注册成功');window.location.href = 'login.html'</script>";
    }
    //}

?>
