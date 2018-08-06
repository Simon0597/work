<?php
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
    mysqli_select_db($conn,"users") or die("数据库访问错误".mysql_error());
    mysqli_query($conn,"set names utf8");
    //登录

    $username = $_POST['logname'];
    $password = $_POST['logpass'];

    //echo $username,$password;
    //检测用户名及密码是否正确
    $check_query = mysqli_query($conn,"select * from login where name='$username' and password='$password' ");
    //echo mysqli_num_rows($check_query);
    if(@mysqli_num_rows($check_query) > 0){
        //登录成功
        session_start();
        $_SESSION['logined']=1;   //判断是否已经登录的依据。
        $_SESSION['user']=$username;  //记录当前登录用户。
        $_SESSION['password']=$password;



        echo '<script>alert("登陆成功");window.location.href = "index-1.php"</script>';
        exit;
    } else {
        echo '<script>alert("用户名或密码不正确");window.location.href = "login.html";</script>';
    }

?>
