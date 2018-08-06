<?php
    $name = @$_POST['shengname'];
// 创建连接
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
mysqli_select_db($conn,"users");

$compare = mysqli_query($conn,"select * from `shengqing` where shengname = '$name'");
//将表单获得的数据插入数据库
if(mysqli_num_rows($compare)>0){
    echo "重复";
    exit;
}
$sql="INSERT INTO `shengqing`(`shengname`) VALUES ('{$name}')";
$retval = @mysqli_query($conn,$sql);
if(@mysqli_affected_rows($conn) > 0){
    echo "成功";
}else{
    echo "失败";
}

?>
