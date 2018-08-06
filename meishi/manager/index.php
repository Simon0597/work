<?php
session_start();
$manager = @$_SESSION['manager'];

$DelN = @$_POST['DelN'];
$DelN4 = @$_POST['DelN4'];
$name1 = @$_POST['name1'];
$DelN1 = @$_POST['DelN1'];
$DelC1 = @$_POST['DelC1'];
$name2 = @$_POST['name2'];
$DelN2 = @$_POST['DelN2'];
$DelC2 = @$_POST['DelC2'];
$sheng = @$_POST['shengname'];
$AgrN = @$_POST['AgrN'];
// 创建连接
$conn=mysqli_connect("localhost","root","qwert123")or die("数据库连接失败");
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
$sql="DELETE FROM `users`.`login` WHERE `name`= '{$DelN}'";
$retval = @mysqli_query($conn,$sql);
$sql="DROP DATABASE `{$DelN}`";
$retval = @mysqli_query($conn,$sql);

$sql1="DELETE FROM `$name1`.`sharefood` WHERE `foodname`= '{$DelN1}'and `foodcontent`='{$DelC1}'";
$retval = @mysqli_query($conn,$sql1);

$sql2="DELETE FROM `$name2`.`upfood` WHERE `upfoodname`= '{$DelN2}'and `upfoodcontent`='{$DelC2}'";
$retval = @mysqli_query($conn,$sql2);

$sql3="INSERT INTO `$AgrN`.`pengren`(`pengrenshi`) VALUES ('agree')";
$retval = @mysqli_query($conn,$sql3);

$sql="DELETE FROM `users`.`shengqing` WHERE `shengname`= '{$DelN4}'";
$retval = @mysqli_query($conn,$sql);

$sql="DELETE FROM `users`.`shengqing` WHERE `shengname`= '{$AgrN}'";
$retval = @mysqli_query($conn,$sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>后台</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="../css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="../css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="../js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
<style>
    .example {
            float: left;
            width: 40%;
            margin: 5%;
        }
        table {
            width: 1000px;
            font-size: 1em;
            border-collapse: collapse;
            margin: 0 auto;

        }
        table, th, td {
            border: 1px solid #999;
            padding: 8px 16px;
            text-align: center;
        }
        table.ex-2 {
            min-width: 100px;
        }
        th {
            background: #f4f4f4;
            cursor: pointer;
        }

        th:hover,
        th.sorted {
            background: #F44336;
            color: #FFF;
        }


        th.no-sort:hover {
            background: #F44336;
            cursor: not-allowed;
        }

        th.sorted.ascending:after {
            content: "  \2191";
        }

        th.sorted.descending:after {
            content: " \2193";
        }
        .del:hover,.del4:hover,.agre:hover,.del1:hover,.del2:hover{
            cursor: pointer;
            color: #F44336;
        }
</style>
</head>
<body>
    <!-- banner -->

        <!-- contact -->
    <div class="contact">
            <div class="container">
                <h2>管理员：<?php echo $manager ?></h2>
                <div class="w3ls-title" style="margin: 4em 0 2em;">
                    <h3 class="agileits-title">烹饪师申请列表</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>申请用户</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="w3ls-title" style="margin: 4em 0 2em;">
                    <h3 class="agileits-title">用户列表</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>用户</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="w3ls-title" style="margin: 4em 0 2em;">
                    <h3 class="agileits-title">用户分享</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>美食名</th>
                            <th>用户名</th>
                            <th class="number">价格</th>
                            <th>美食内容</th>
                            <th class="no-sort">美食图片</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <div class="w3ls-title" style="margin: 4em 0 2em;">
                    <h3 class="agileits-title">用户烹饪上传</h3>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>美食名</th>
                            <th>用户名</th>
                            <th class="number">价格</th>
                            <th>美食内容</th>
                            <th class="no-sort">美食图片</th>
                            <th>操作</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- //contact -->
    <!-- menu-js -->
    <script src="../js/jquery.tablesort.min.js"></script>
    <script>

    </script>
    <script type="text/javascript">


        $(function() {
            $('table').tablesort().data('tablesort');
            $('thead th.number').data('sortBy', function(th, td, sorter) {
                return parseInt(td.text(), 10);
            });

        });

        window.onload = function(){
            var oAgr = document.getElementsByClassName('agre');
            for(i = 0;i<oAgr.length;i++){
                oAgr[i].onclick = function(){
                    console.log(this.parentNode.parentNode.children[0].innerText)
                    var x = confirm("确认通过？");
                    if( x ){
                        var oAgrN = this.parentNode.parentNode.children[0].innerText;
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            if( xhr.readyState == 4 && xhr.status == 200 ){
                                console.log(xhr.responseText)
                                window.location.reload();
                            }
                        }
                        xhr.open('post','index.php',true);
                        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "AgrN="+oAgrN+"";
                        xhr.send(data);
                    }

                }
            }
            var oDel4 = document.getElementsByClassName('del4');
            for(i = 0;i<oDel4.length;i++){
                oDel4[i].onclick = function(){
                    console.log(this.parentNode.parentNode.children[0].innerText)
                    var x = confirm("确认删除？");
                    if( x ){
                        var oDelN4 = this.parentNode.parentNode.children[0].innerText;
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            if( xhr.readyState == 4 && xhr.status == 200 ){
                                console.log(xhr.responseText)
                                window.location.reload();
                            }
                        }
                        xhr.open('post','index.php',true);
                        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "DelN4="+oDelN4+"";
                        xhr.send(data);
                    }

                }
            }

            var oDel = document.getElementsByClassName('del');
            for(i = 0;i<oDel.length;i++){
                oDel[i].onclick = function(){
                    console.log(this.parentNode.parentNode.children[0].innerText)
                    var x = confirm("确认删除？将会删除所有该用户信息");
                    if( x ){
                        var oDelN = this.parentNode.parentNode.children[0].innerText;
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            if( xhr.readyState == 4 && xhr.status == 200 ){
                                console.log(xhr.responseText)
                                window.location.reload();
                            }
                        }
                        xhr.open('post','index.php',true);
                        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "DelN="+oDelN+"";
                        xhr.send(data);
                    }

                }
            }

            var oDel = document.getElementsByClassName('del1');
            for(i = 0;i<oDel.length;i++){
                oDel[i].onclick = function(){
                    console.log(this.parentNode.parentNode.children[0].innerText,this.parentNode.parentNode.children[2].innerText)
                    var x = confirm("确认删除？");
                    if( x ){
                        var oDelN1 = this.parentNode.parentNode.children[0].innerText,
                        oN1 = this.parentNode.parentNode.children[1].innerText,
                        oDelC1 = this.parentNode.parentNode.children[3].innerText;
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            if( xhr.readyState == 4 && xhr.status == 200 ){
                                console.log(xhr.responseText)
                                window.location.reload();
                            }
                        }
                        xhr.open('post','index.php',true);
                        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "name1="+oN1+"&DelN1="+oDelN1+"&DelC1="+oDelC1+"";
                        xhr.send(data);
                    }

                }
            }

            var oDel2 = document.getElementsByClassName('del2');
            for(i = 0;i<oDel2.length;i++){
                oDel2[i].onclick = function(){
                    console.log(this.parentNode.parentNode.children[0].innerText,this.parentNode.parentNode.children[2].innerText)
                    var x = confirm("确认删除？");
                    if( x ){
                        var oDelN2 = this.parentNode.parentNode.children[0].innerText,
                        oN2 = this.parentNode.parentNode.children[1].innerText,
                        oDelC2 = this.parentNode.parentNode.children[3].innerText;
                        var xhr = new XMLHttpRequest();
                        xhr.onload = function () {
                            if( xhr.readyState == 4 && xhr.status == 200 ){
                                console.log(xhr.responseText)
                                window.location.reload();
                            }
                        }
                        xhr.open('post','index.php',true);
                        xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "name2="+oN2+"&DelN2="+oDelN2+"&DelC2="+oDelC2+"";
                        xhr.send(data);
                    }

                }
            }
        }
    </script>


    <!-- //jarallax -->


    <!-- //smooth-scrolling-of-move- -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../js/bootstrap.js"></script>
    <?php
        $sql4 = "SELECT shengname FROM `users`.`shengqing`";
        $result4 = mysqli_query($conn, $sql4);
        if (@mysqli_num_rows($result4) > 0) {
            // 输出数据
            while($row4 = @mysqli_fetch_assoc($result4)) {
                /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                echo "<script>
                var Tr = \"<tr ><td>".$row4['shengname']. "</td><td><p class='agre'>同意</p><p class='del4'>删除</p></td></tr>\";
                var oTable = document.getElementsByTagName('tbody')[0];
                oTable.innerHTML += Tr;
            </script>";
            }
        }


        $sql = "SELECT name FROM `users`.`login`";
        $result = mysqli_query($conn, $sql);
            if(! $result )
        {
          die('无法获取数据: ' . mysqli_error($conn));
        }
        if (@mysqli_num_rows($result) > 0) {
            // 输出数据
                while($rowname = @mysqli_fetch_assoc($result)) {
                   echo "<script>
                        var Tr = \"<tr ><td>". $rowname['name']. "</td><td><p class='del'>移除用户</p></td></tr>\";
                        var oTable = document.getElementsByTagName('tbody')[1];
                        oTable.innerHTML += Tr;
                    </script>";

                $sql1 = "SELECT num,upfoodname, upfoodprice, upfoodcontent,upfoodImg FROM `".$rowname['name']."`.`upfood`";
                $result1 = mysqli_query($conn, $sql1);
                if (@mysqli_num_rows($result1) > 0) {
                    // 输出数据
                    while($row1 = @mysqli_fetch_assoc($result1)) {
                        /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                        echo "<script>

                            var Tr". $row1['num']. " = \"<tr ><td>". $row1['upfoodname']. "</td><td>". $rowname['name']. "</td><td>". $row1['upfoodprice']. "</td><td>". $row1['upfoodcontent']. "</td><td><img src='../uploadfile/upload/". $row1['upfoodImg']. "' style='width:150px;height:100px;'></td><td><p class='del2'>移除</p></td></tr>\";
                            var oTbody = document.getElementsByTagName('tbody')[3];
                            oTbody.innerHTML += Tr". $row1['num']. ";
                        </script>";
                    }
                }

                $sql2 = "SELECT num,foodname, foodprice, foodcontent,foodImg FROM `".$rowname['name']."`.`sharefood`";
                $result2 = mysqli_query($conn, $sql2);
                if (@mysqli_num_rows($result2) > 0) {
                    // 输出数据
                    while($row2 = @mysqli_fetch_assoc($result2)) {
                        /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                        echo "<script>

                            var Tr". $row2['num']. " = \"<tr ><td>". $row2['foodname']. "</td><td>". $rowname['name']. "</td><td>". $row2['foodprice']. "</td><td>". $row2['foodcontent']. "</td><td><img src='../uploadfile/upload/". $row2['foodImg']. "' style='width:150px;height:100px;'></td><td><p class='del1'>移除</p></td></tr>\";
                            var oTbody = document.getElementsByTagName('tbody')[2];
                            oTbody.innerHTML += Tr". $row2['num']. ";
                        </script>";
                    }
                }
            }
        } else {
            exit;
        }

    ?>
</body>
</html>

