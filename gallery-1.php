<?php
 session_start();
    $name = @$_SESSION['user'];
// 创建连接
$conn=mysqli_connect("localhost","root","qwert123")or die("数据库连接失败");
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
mysqli_select_db($conn,"users");

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>我要定制</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/smoothbox.css" type='text/css' media="all" />
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<!-- //web-fonts -->
<style>
    .m-sidebar{position: fixed;top: 0;right: 0;background: #000;z-index: 11;width: 35px;height: 100%;font-size: 12px;color: #fff;}
    .cart{display:block;color: #fff;text-align:center;line-height: 20px;padding: 305px 0 0 0px;}
    .cart span{display:block;width:20px;margin:0 auto;}
    .cart i{width:35px;height:35px;display:block; background:url(images/icon/car.png) no-repeat;}
    #msg{position:fixed; top:400px; right:35px; z-index:10000; width:1px; height:52px; line-height:52px; font-size:20px; text-align:center; color:#fff; background:#360; display:none}
    .orange {
        display: block;
    width: 100%;
    color: #fef4e9;
    text-align: center;
    border: solid 1px #da7c0c;
    background: #f78d1d;
    background: -webkit-gradient(linear, left top, left bottom, from(#faa51a), to(#f47a20));
    background: -moz-linear-gradient(top,  #faa51a,  #f47a20);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#faa51a', endColorstr='#f47a20');
}
.orange:hover {
    background: #f47c20;
    background: -webkit-gradient(linear, left top, left bottom, from(#f88e11), to(#f06015));
    background: -moz-linear-gradient(top,  #f88e11,  #f06015);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f88e11', endColorstr='#f06015');
}
.orange:active {
    display: block;
    width: 100%;
    text-align: center;
    color: #fcd3a5;
    background: -webkit-gradient(linear, left top, left bottom, from(#f47a20), to(#faa51a));
    background: -moz-linear-gradient(top,  #f47a20,  #faa51a);
    filter:  progid:DXImageTransform.Microsoft.gradient(startColorstr='#f47a20', endColorstr='#faa51a');
}
.button {
    display: inline-block;
    width: 100%;
    outline: none;
    cursor: pointer;
    text-align: center;
    text-decoration: none;
    font: 16px/100% 'Microsoft yahei',Arial, Helvetica, sans-serif;
    padding: .5em 2em .55em;
    text-shadow: 0 1px 1px rgba(0,0,0,.3);
    -webkit-border-radius: .5em;
    -moz-border-radius: .5em;
    border-radius: .5em;
    -webkit-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    -moz-box-shadow: 0 1px 2px rgba(0,0,0,.2);
    box-shadow: 0 1px 2px rgba(0,0,0,.2);
}
.button:hover {
    text-decoration: none;
}
.button:active {
    position: relative;
    top: 1px;
}
.bd3{
    border: 3px solid #fff;
    float: left;
}
</style>

</head>
<body>
    <!-- banner -->
    <div class="banner" style="position: relative;z-index: 12;">
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
                            <li><a href="center-1.php"> 个人中心</a></li>
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
                <h2><a href="index-1.php">主页</a> / 我要定制</h2>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
    <!-- gallery -->
    <div class="about gallery">
        <div class="container">
            <div class="w3ls-title">
                <h3 class="agileits-title">我要定制</h3>
            </div>
            <div class="w3ls_gallery_grids">
                <div class="col-xs-12 agileits_w3layouts_gallery_grid">

                </div>
                <div class="clearfix"> </div>
                <script type="text/javascript" src="js/smoothbox.jquery2.js"></script>
            </div>
        </div>
    </div>
    <div class="m-sidebar">
            <a href="shopping.php" class="cart">
                <i id="end"></i>
                <span>购物车</span>
            </a>
        </div>
        <div id="msg">已成功加入购物车！</div>
    <!-- //gallery -->
    <!-- footer -->
    <div class="footer" style="position: relative;z-index: 12;">
        <div class="container">
            <div class="clearfix"> </div>
            <div class="w3agile_footer_copy">
                <p>Copyright &copy; 2018.叮咚烹饪师 All rights reserved.</a></p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- menu-js -->
    <script src="js/jquery.fly.min.js"></script>

    <script>
    $(function() {
        var offset = $("#end").offset();  //结束的地方的元素
        $(".addcar").click(function(event){
            //console.log(this.parentNode.children[0])
            var aStr = this.parentNode.children[0].title.toString().trim().split(/\s*\>\s*/);
            var oImg = this.parentNode.children[0].href.toString(),
            oName = this.parentNode.children[1].children[0].innerText;

            var xhr = new XMLHttpRequest();
            xhr.onload = function () {
                if( xhr.readyState == 4 && xhr.status == 200 ){
                    console.log(xhr.responseText)
                    if(xhr.responseText == '可被预约'){
                        //是$(".addcar")这个元素点击促发的 开始动画的位置就是这个元素的位置为起点
                            var addcar = $(".addcar");
                            var img = addcar.parent().find('img').attr('src');
                            var flyer = $('<img style="width: 640px;height:423px;" class="u-flyer" src="'+img+'">');
                            flyer.fly({
                                start: {
                                    left: 100,
                                    top: 100
                                },
                                end: {
                                    left: offset.left+10,
                                    top: offset.top+10,
                                    width: 0,
                                    height: 0
                                },
                                onEnd: function(){
                                    $("#msg").show().animate({width: '250px'}, 200).fadeOut(1000);
                                    addcar.destory();
                                }
                            });

                        //发送加入购物车信息
                        var xhr1 = new XMLHttpRequest();
                        xhr1.onload = function () {
                            if( xhr1.readyState == 4 && xhr1.status == 200 ){
                                console.log(xhr1.responseText)
                            }
                        }
                        xhr1.open('post','./addShopcar.php',true);
                        xhr1.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                        var data = "shopname="+aStr[0]+"&shopprice="+aStr[1]+"&shopcontent="+aStr[2]+"&shopImg="+oImg+"";
                        xhr1.send(data);
                    }else{
                    alert("该烹饪者已被预约，请重新选择");
                    return false;
                }
                }
            }
            xhr.open('post','./thisName.php',true);
            xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
            var data = "name="+oName+"";
            xhr.send(data);






        });

    });
    </script>
    <script>
        $('.navicon').on('click', function (e) {
          e.preventDefault();
          $(this).toggleClass('navicon--active');
          $('.toggle').toggleClass('toggle--active');
        });

        window.onload = function(){

            var oFoot = document.getElementsByClassName('footer')[0];
            if(document.body.scrollHeight <= window.innerHeight){
                oFoot.style = "position:absolute;bottom:0;";
            }else{
                oFoot.style = "";
            }

            var oOther = document.getElementsByClassName('outerpepo');
            for(i = 0;i < oOther.length;i++){
                oOther[i].onclick = function(){
                    console.log(this.innerText)
                    var xhr = new XMLHttpRequest();
                    xhr.onload = function () {
                        if( xhr.readyState == 4 && xhr.status == 200 ){
                            console.log(data)
                            window.location.href = 'otherpepofood.php';
                        }
                    }
                    xhr.open('post','./otherpepofood.php',true);
                    xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                    var data = "postname="+this.innerText+"";
                    xhr.send(data);
                }
            }
        }
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
    $sql1 = "SELECT name FROM `users`.`login`";
    $result1 = @mysqli_query($conn, $sql1);
    if (@mysqli_num_rows($result1) > 0) {
        // 输出数据
        while($rowname = @mysqli_fetch_assoc($result1)) {
            $sql = "SELECT num,foodname, foodprice, foodcontent,foodImg FROM `".$rowname['name']."`.`sharefood`";
                    $result = @mysqli_query($conn, $sql);
                    if (@mysqli_num_rows($result) > 0) {
                        // 输出数据
                        while($row = @mysqli_fetch_assoc($result)) {
                            /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                            echo "<script>
                                var Tr". $row['num']. " = \"<div class='bd3 col-xs-4 agileits_w3layouts_gallery_grid1 hover14 column'><div class='w3_agile_gallery_effect'><a href='uploadfile/upload/". $row['foodImg']. "' class='sb' title='" . $row["foodname"]. "&nbsp;&gt;&nbsp;" . $row["foodprice"]. "&nbsp;&gt;&nbsp;" . $row["foodcontent"]."'><figure><img style='width:100%;height:196.5px' src='uploadfile/upload/". $row['foodImg']. "' alt=' ' class='img-responsive' /></figure></a><div style='width:100%;margin:0.5em 0;text-align:center;'>烹饪师：<a href='JavaScript:;' class='outerpepo' style='color:#F44336;font-size:25px;font-wight:bold;'>".$rowname['name']."</a></div><a href='javascript:;' class='button orange addcar'>加入购物车</a></div></div>\";
                                var oTbody = document.getElementsByClassName('agileits_w3layouts_gallery_grid')[0];
                                oTbody.innerHTML += Tr". $row['num']. ";

                            </script>";
                        }
                    }

                    $sql = "SELECT num,upfoodname, upfoodprice, upfoodcontent,upfoodImg FROM `".$rowname['name']."`.`upfood`";
                    $result = mysqli_query($conn, $sql);
                    if (@mysqli_num_rows($result) > 0) {
                        // 输出数据
                        while($row = @mysqli_fetch_assoc($result)) {
                            /*echo "name: " . $row["foodname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                            echo "<script>
                                var Tr". $row['num']. " = \"<div class='bd3 col-xs-4 agileits_w3layouts_gallery_grid1 hover14 column'><div class='w3_agile_gallery_effect'><a href='uploadfile/upload/". $row['upfoodImg']. "' class='sb' title='" . $row["upfoodname"]. "&nbsp;&gt;&nbsp;" . $row["upfoodprice"]. "&nbsp;&gt;&nbsp;" . $row["upfoodcontent"]."'><figure><img style='width:100%;height:196.5px' src='uploadfile/upload/". $row['upfoodImg']. "' alt=' ' class='img-responsive' /></figure></a><div style='width:100%;margin:0.5em 0;text-align:center;'>烹饪师：<a href='JavaScript:;' class='outerpepo' style='color:#F44336;font-size:25px;font-wight:bold;'>".$rowname['name']."</a></div><a href='javascript:;' class='button orange addcar'>加入购物车</a></div></div>\";
                                var oTbody = document.getElementsByClassName('agileits_w3layouts_gallery_grid')[0];
                                oTbody.innerHTML += Tr". $row['num']. ";

                            </script>";
                        }
                    }
        }
    }






        mysqli_close($conn);
    ?>
</body>
</html>
