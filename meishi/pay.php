<?php
 session_start();
    $name = @$_SESSION['user'];
    $DelN = @$_POST['DelN'];
// 创建连接
    $conn = mysqli_connect("127.0.0.1","zjwdb_6244433","Qwert123") or die("数据库链接错误".mysql_error());
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}
mysqli_select_db($conn,"$name");

    $sql="DELETE FROM `$name`.`shopcar` WHERE `shopname`= '{$DelN}'";
    $retval = @mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>支付界面</title>
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
<link rel="stylesheet" type="text/css" href="css/wxzf.css">

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
                            <li><a href="index-1.php" > 主页</a></li>
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
                <h2><a href="index-1.php">主页</a> / <a href="shopping.php">购物车</a>  / 支付界面</h2>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
        <!-- contact -->
    <div class="contact">
            <div class="container">
                <div class="wenx_xx">
                  <div class="mz">安全支付</div>
                  <div class="wxzf_price">￥11.90</div>
                </div>
                <div class="skf_xinf">
                  <div class="all_w"> <span class="bt" style="font-size: 20px;">支付商品</span> <span class="fr stf">商品名</span> </div>
                </div>
                <a href="javascript:void(0);" class="ljzf_but all_w">立即支付</a>

                <!--浮动层-->

                <div class="ftc_wzsf">
                  <div class="srzfmm_box">
                    <div class="qsrzfmm_bt clear_wl"> <img src="images/xx_03.jpg" class="tx close fl" > <img src="images/jftc_03.jpg" class="tx fl" ><span class="fl">请输入支付密码</span> </div>
                    <div class="zfmmxx_shop">
                      <div class="mz stf">商品名</div>
                      <div class="wxzf_price">￥11.90</div>
                    </div>
                    <a href="#" class="blank_yh"> <img src="images/jftc_07.jpg" class="fl"  ><span class="fl ml5">招商银行信用卡</span> <img src="images/jftc_09.jpg" class="fr"></a>
                    <ul class="mm_box">
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                      <li></li>
                    </ul>
                  </div>
                  <div class="numb_box">
                    <div class="xiaq_tb"> <img src="images/jftc_14.jpg" height="10"> </div>
                    <ul class="nub_ggg">
                      <li><a href="javascript:void(0);">1</a></li>
                      <li><a href="javascript:void(0);" class="zj_x">2</a></li>
                      <li><a href="javascript:void(0);">3</a></li>
                      <li><a href="javascript:void(0);">4</a></li>
                      <li><a href="javascript:void(0);" class="zj_x">5</a></li>
                      <li><a href="javascript:void(0);">6</a></li>
                      <li><a href="javascript:void(0);">7</a></li>
                      <li><a href="javascript:void(0);" class="zj_x">8</a></li>
                      <li><a href="javascript:void(0);">9</a></li>
                      <li><span></span></li>
                      <li><a href="javascript:void(0);" class="zj_x">0</a></li>
                      <li><span  class="del" > <img src="images/jftc_18.jpg"   ></span></li>
                    </ul>
                  </div>
                  <div class="hbbj"></div>
                </div>
            </div>
        </div>
    <!-- //contact -->
    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="clearfix"> </div>
            <div class="w3agile_footer_copy">
                <p>Copyright &copy; 2018.叮咚烹饪师 All rights reserved.</p>
            </div>
        </div>
    </div>
    <!-- //footer -->
    <!-- menu-js -->
    <script>
        var oTM = document.getElementsByClassName('wxzf_price'),
        oStf = document.getElementsByClassName('stf');
        oTM[0].innerText = oTM[1].innerText = window.localStorage.getItem('total_money');
        oStf[0].innerText = oStf[1].innerText = window.localStorage.getItem('total_goods');
    </script>
    <script type="text/javascript">
    $(function(){
        //出现浮动层
        $(".ljzf_but").click(function(){
            $(".ftc_wzsf").show();
            });
        //关闭浮动
        $(".close").click(function(){
            $(".ftc_wzsf").hide();
            });
            //数字显示隐藏
            $(".xiaq_tb").click(function(){
            $(".numb_box").slideUp(500);
            });
            $(".mm_box").click(function(){
            $(".numb_box").slideDown(500);
            });
            //----
            var i = 0;
            $(".nub_ggg li a").click(function(){
                i++;
                if(i<6){
                    $(".mm_box li").eq(i-1).addClass("mmdd");
                    }else{
                        $(".mm_box li").eq(i-1).addClass("mmdd");
                        setTimeout(function(){
                            location.href="paysuss.html";
                        },500);
                 }
            });

            $(".nub_ggg li .del").click(function(){

                if(i>0){
                    i--
                    $(".mm_box li").eq(i).removeClass("mmdd");
                    i==0;
                    }
                //alert(i);
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
</body>
</html>
