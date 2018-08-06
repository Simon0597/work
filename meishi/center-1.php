<?php
    session_start();
    $name = @$_SESSION['user'];

    $conn=mysqli_connect("localhost","root","qwert123")or die("数据库连接失败");

    //选择数据库

    mysqli_select_db($conn,"$name");

    //设置数据库编码
    mysqli_query($conn,"set names utf8");

    /*$email = @$_POST['newemail'];
    $phonenum = @$_POST['newphonenum'];
    $sign = @$_POST['newsign'];
    $wechat = @$_POST['newwechat'];

    $e = strlen($email);
    $p = strlen($phonenum);
    $s = strlen($sign);
    $w = strlen($wechat);

    if($e != 0){
        $inser_query = mysqli_query($conn,"update login set email='$email'");
    }else if($p != 0){
        $inser_query = mysqli_query($conn,"update login set phonenum='$phonenum'");
    }else if($s != 0){
        $inser_query = mysqli_query($conn,"update login set sign='$sign'");
    }else if($w != 0){
        $inser_query = mysqli_query($conn,"update login set wechat='$wechat'");
    }

    $retval = mysqli_query($conn,"select email,phonenum,sign,wechat from login where name = '$name'");
    if(! $retval )
    {
        die('无法读取数据: ' . mysqli_error($conn));
    }
    $row = mysqli_fetch_array($retval, MYSQLI_ASSOC);*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>个人中心</title>
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
                            <li><a href="index-1.php"> 主页</a></li>
                            <li><a href="about-1.html"> 关于我们</a></li>
                            <li><a href="contact-1.html"> 咨询我们</a></li>
                            <li><a href="center-1.php" class="active"> 个人中心</a></li>
                            <li><a href="index.php"> 注销</a></li>
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
                <h2><a href="index-1.php">主页</a> / 个人中心</h2>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- about -->
    <div class="about">
        <div class="container">
            <section class="wrapper">
                        <div class="col-md-11 profile widget-shadow">
                            <div class="profile-top">
                                <img id="cenHedImg" <?php
                                $sql = "SELECT headImg FROM `$name`.`header`";
                                $result = @mysqli_query($conn, $sql);
                                if (@mysqli_num_rows($result) > 0) {
                                    // 输出数据
                                    while($row = @mysqli_fetch_assoc($result)) {
                                        echo "src='./uploadfile/upload/header/".$row['headImg']."'";
                                    }
                                }else{
                                    $sql="insert into `$name`.`header`(`headImg`)values('t7.jpg')";
                                    $retval = mysqli_query($conn,$sql);
                                    echo "src='uploadfile/upload/header/t7.jpg'";
                                }?> style="width: 200px;height: 200px;" alt="头像"> <h4 id="userName" style="font-weight: bold;"><?php echo @$name ?></h4>
                                <button class="btn btn-success"  href="#myModal" data-toggle="modal"style="width: 100px;height: 32px;margin-bottom: 0.5em;">更 换 头 像</button>
                                <h5>最近分享 ：<?php
    $sql = "SELECT * FROM `$name`.`sharefood` where num = (SELECT max(num) FROM `sharefood`)";
    $result = @mysqli_query($conn, $sql);
    if ($row = @mysqli_fetch_array($result)) {
        // 输出数据

            /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
            echo @$row['foodname']."--￥".$row['foodprice'];

    } else {
        echo "---";
    }

    mysqli_close($conn);
                                ?>
                                </h5>
                            </div>
                            <div class="profile-text">
                                <a href="balance.html" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/dollars19.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 余 额</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="#" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/credit2.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 卡 包</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="#" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/quan.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 优 惠 券</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="#" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/note.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>交 易 记 录</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="shopping.php" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/gouwu.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 购 物 车</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="mypaylist.php" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/order.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 订 单</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                                <a href="index-1.php" class="profile-row row-middle">
                                    <div class="profile-left">
                                        <img style="width: 50px;height: 50px;" src="images/icon/user82.png">
                                    </div>
                                    <div class="profile-right">
                                        <h4>我 的 主 页</h4>
                                    </div>
                                    <div class="clearfix"> </div>
                                </a>
                            </div>
                    </section>
         </div>
    </div>
    <!-- //about -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="w3agile_footer_copy">
                <p>Copyright &copy; 2018.叮咚烹饪师 All rights reserved.</a></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- modal-about -->
    <div class="modal bnr-modal fade" id="myModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body modal-spa">
                    <img id="posImg" src="images/g2.jpg" style="width: 598px;height: 394px;" class="img-responsive" alt=""/>
                    <div class="modal-w3lstext">
                        <input type="file" id="headImg" style="display: none;"><label class="btn btn-success"  for="headImg" style="width: 100px;height: 32px;margin-bottom: 0.5em;">更 换 头 像</label>
                        <button class="btn btn-success" id="posFile" style="width: 100px;height: 32px;margin-bottom: 0.5em;margin-left: 1em;">点 击 上 传</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- //modal-about -->

    <script>

        var oHeadI = document.getElementById('headImg'),
        oPosF = document.getElementById('posFile'),
        cHeadI = document.getElementById('cenHedImg'),
        oPosI = document.getElementById('posImg'),
        url = "",
        arr = [];


        oHeadI.onchange = function(){
            var file = oHeadI.files;
            for( var i=0;i<file.length;i++ ){
                var blob = new Blob([file[i]]);
                url = window.URL.createObjectURL(blob);
            }
            arr.push(file[0]);
            window.localStorage.setItem('headerImg',file[0].name);
            oPosI.src = url;
        }
        oPosF.onclick = function () {
            var x = confirm("确定上传吗？");
            if( oHeadI.value && x){
                    console.log( oHeadI.value ); // 不是路径，只是此文件在电脑的字符串
                    console.log( oHeadI.files);

                    var xhr1 = new XMLHttpRequest();
                    xhr1.onload = function () {
                        if( xhr1.readyState == 4 && xhr1.status == 200 ){
                            var xhr = new XMLHttpRequest();
                            xhr.onload = function () {
                                if( xhr.readyState == 4 && xhr.status == 200 ){
                                    console.log(xhr.responseText)
                                    window.location.reload();
                                }
                            }
                            xhr.open('post','./uphead.php',true);
                            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                            var data = "header="+window.localStorage.getItem('headerImg')+"";
                            xhr.send(data);
                        }

                    }
                    xhr1.open('post','./uploadfile/uphead.php',true);
                    var data = new FormData();
                    data.append('file',arr[0]);
                    xhr1.send(data);


                    oHeadI.value = '';
                }else{
                    alert("请先选择图片")
                }
            }


    </script>
    <!-- bars-js -->
    <script src="js/bars.js"></script>
    <!-- //bars-js -->
    <!-- menu-js -->
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
</body>
</html>
