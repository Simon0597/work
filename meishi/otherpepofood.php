<?php
    session_start();
    $name = @$_POST['postname'];
    if($name){
        $_SESSION['postname'] = @$name;
    }
    $name = $_SESSION['postname'];

// 创建连接
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
mysqli_select_db($conn,"$name");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo $name ?>的烹饪</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
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

        .disabled {
            opacity: 0.5;
        }
        #toshare{
            color: #368;
            font-size: 30px;
        }
        #toshare:hover{
            color: #F44336;
        }
</style>
</head>
<body>
    <!-- banner -->
    <div class="banner">
        <!-- header -->
        <div class="header">
            <div class="container">
                <div class="logo">
                    <a href="index-1.php"><img src="images/logo.png" alt="叮咚"></a>
                </div>
                <div class="menu">
                    <a href="#" class="navicon"></a>
                    <div class="toggle">
                        <ul class="toggle-menu">
                            <li><a onclick="window.history.back()"> 返回</a></li>
                        </ul>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
        <!-- //header -->
        <!-- banner-text -->
        <div class="banner-text w3labout-bnr">
            <div class="container">
                <h2><a onclick="window.history.back()">主页</a> / <?php echo $name ?>的烹饪</h2>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
        <!-- contact -->
    <div class="contact">
            <div class="container">
                <div class="w3ls-title" style="margin: 0 0 2em;">
                    <h3 class="agileits-title"><?php echo $name ?>的状态： <span><?php
                        $sql = "SELECT state FROM `$name`.`state`";
                        $result = mysqli_query($conn, $sql);
                        if(! $result )
                        {
                          die('无法获取数据: ' . mysqli_error($conn));
                        }
                        if (@mysqli_num_rows($result) > 0) {
                            // 输出数据
                            while($row = @mysqli_fetch_assoc($result)) {
                                echo $row['state'];
                            }
                        }
                    ?></span></h3>
                </div>
                <div class="w3ls-title" style="margin: 0 0 2em;">
                    <h3 class="agileits-title">他的烹饪上传 </a></h3>
                </div>
                *点击表头可排序
                <table>
                    <thead>
                        <tr>
                            <th>美食名称</th>
                            <th class="number">美食价格（￥）</th>
                            <th>美食内容</th>
                            <th class="no-sort">美食图片</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>

                <div class="w3ls-title" style="margin: 4em 0 2em;">
                    <h3 class="agileits-title">他的分享 </h3>
                </div>
                *点击表头可排序
                <table>
                    <thead>
                        <tr>
                            <th>美食名称</th>
                            <th class="number">美食价格（￥）</th>
                            <th>美食内容</th>
                            <th class="no-sort">美食图片</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
        </div>
    <!-- //contact -->
    <!-- footer -->
    <div class="footer" >
        <div class="container">
            <div class="clearfix"> </div>
            <div class="w3agile_footer_copy">
                <p>Copyright &copy; 2018.叮咚烹饪师 All rights reserved.</p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- menu-js -->
    <script src="js/jquery.tablesort.min.js"></script>
    <script>


    </script>
    <script type="text/javascript">
        window.onload = function(){
            var oTbody = document.getElementsByTagName('tbody'),
            oTr = document.getElementsByClassName('nTr'),
            oTr1 = document.getElementsByClassName('nTr1');
            for(i = 0;i < oTr1.length;i++){
                oTbody[0].appendChild(oTr1[i]);
            }
            for(j = 0;j < oTr.length;j++){
                oTbody[1].appendChild(oTr[j]);
            }

            var oFoot = document.getElementsByClassName('footer')[0];
            if(document.body.scrollHeight <= window.innerHeight){
                oFoot.style = "position:absolute;bottom:0;";
            }else{
                oFoot.style = "";
            }

        }


        $(function() {
            $('table').tablesort().data('tablesort');
            $('thead th.number').data('sortBy', function(th, td, sorter) {
                return parseInt(td.text(), 10);
            });

        });
    </script>

    <script>
        $('.navicon').on('click', function (e) {
          e.preventDefault();
          $(this).toggleClass('navicon--active');
          $('.toggle').toggleClass('toggle--active');
        });
    </script>
    <!-- //menu-js -->
    <!-- jarallax -->
    <script src="js/SmoothScroll.min.js"></script>
    <script src="js/jarallax.js"></script>
    <script type="text/javascript">
        /* init Jarallax */
        $('.jarallax').jarallax({
            speed: 0.5,
            imgWidth: 1366,
            imgHeight: 768
        })
    </script>
    <!-- //jarallax -->
    <!-- start-smooth-scrolling -->
    <script type="text/javascript" src="js/move-top.js"></script>
    <script type="text/javascript" src="js/easing.js"></script>
    <script type="text/javascript">
            jQuery(document).ready(function($) {
                $(".scroll").click(function(event){
                    event.preventDefault();

            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
                });
            });
    </script>
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
    <script type="text/javascript">
        $(document).ready(function() {
            /*
            var defaults = {
                containerID: 'toTop', // fading element id
                containerHoverID: 'toTopHover', // fading element hover id
                scrollSpeed: 1200,
                easingType: 'linear'
            };
            */

            $().UItoTop({ easingType: 'easeOutQuart' });

        });
    </script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
    <?php
        $sql = "SELECT num,upfoodname,upfoodprice,upfoodcontent,upfoodImg FROM `$name`.`upfood`";
        $result = mysqli_query($conn, $sql);
        if(! $result )
        {
          die('无法获取数据: ' . mysqli_error($conn));
        }
        if (@mysqli_num_rows($result) > 0) {
            // 输出数据
            while($row = @mysqli_fetch_assoc($result)) {
                /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                echo "<script>
                    var Tr1". $row['num']. " = document.createElement('tr'),
                    tdN1". $row['num']. " = document.createElement('td'),
                    tdP1". $row['num']. " = document.createElement('td'),
                    tdC1". $row['num']. " = document.createElement('td'),
                    tdI1". $row['num']. " = document.createElement('td'),
                    oImg1". $row['num']. " = document.createElement('img');
                    tdN1". $row['num']. ".innerText = '". $row['upfoodname']. "';
                    tdP1". $row['num']. ".innerText = '". $row['upfoodprice']. "';
                    tdC1". $row['num']. ".innerText = '". $row['upfoodcontent']. "';
                    oImg1". $row['num']. ".src = 'uploadfile/upload/". $row['upfoodImg']. "';
                    oImg1". $row['num']. ".style = 'width:150px;height:100px;';
                    Tr1". $row['num']. ".appendChild(tdN1". $row['num']. ");
                    Tr1". $row['num']. ".appendChild(tdP1". $row['num']. ");
                    Tr1". $row['num']. ".appendChild(tdC1". $row['num']. ");
                    Tr1". $row['num']. ".appendChild(tdI1". $row['num']. ");
                    tdI1". $row['num']. ".appendChild(oImg1". $row['num']. ");
                    Tr1". $row['num']. ".setAttribute('class','nTr1');
                    document.body.appendChild(Tr1". $row['num']. ");

                </script>";
            }
        }

        $sql = "SELECT num,foodname,foodprice,foodcontent,foodImg FROM `$name`.`sharefood`";
        $result = mysqli_query($conn, $sql);
            if(! $result )
        {
          die('无法获取数据: ' . mysqli_error($conn));
        }
        if (@mysqli_num_rows($result) > 0) {
            // 输出数据
            while($row = @mysqli_fetch_assoc($result)) {
                /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                echo "<script>
                    var Tr". $row['num']. " = document.createElement('tr'),
                    tdN". $row['num']. " = document.createElement('td'),
                    tdP". $row['num']. " = document.createElement('td'),
                    tdC". $row['num']. " = document.createElement('td'),
                    tdI". $row['num']. " = document.createElement('td'),
                    oImg". $row['num']. " = document.createElement('img');
                    tdN". $row['num']. ".innerText = '". $row['foodname']. "';
                    tdP". $row['num']. ".innerText = '". $row['foodprice']. "';
                    tdC". $row['num']. ".innerText = '". $row['foodcontent']. "';
                    oImg". $row['num']. ".src = 'uploadfile/upload/". $row['foodImg']. "';
                    oImg". $row['num']. ".style = 'width:150px;height:100px;';
                    Tr". $row['num']. ".appendChild(tdN". $row['num']. ");
                    Tr". $row['num']. ".appendChild(tdP". $row['num']. ");
                    Tr". $row['num']. ".appendChild(tdC". $row['num']. ");
                    Tr". $row['num']. ".appendChild(tdI". $row['num']. ");
                    tdI". $row['num']. ".appendChild(oImg". $row['num']. ");
                    Tr". $row['num']. ".setAttribute('class','nTr');
                    document.body.appendChild(Tr". $row['num']. ");

                </script>";
            }
        } else {
            exit;
        }

        mysqli_close($conn);
    ?>
</body>
</html>

