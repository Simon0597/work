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
<title>购物车</title>
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
<link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/carts.css">
<style>

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
                <h2><a href="index-1.php">主页</a> / <a href="gallery-1.php">我要定制</a> / 购物车</h2>
            </div>
        </div>
        <!-- //banner-text -->
    </div>
    <!-- //banner -->
        <!-- contact -->
    <div class="contact">
            <div class="container">
                <section class="cartMain">
                        <div class="cartMain_hd">
                            <ul class="order_lists cartTop">
                                <li class="list_chk">
                                    <!--所有商品全选-->
                                    <input type="checkbox" id="all" class="whole_check">
                                    <label for="all"></label>
                                    全选
                                </li>
                                <li class="list_con">美食名称</li>
                                <li class="list_info">美食内容</li>
                                <li class="list_price">单价</li>
                                <li class="list_amount">数量</li>
                                <li class="list_sum">金额</li>
                                <li class="list_op">操作</li>
                            </ul>
                        </div>

                        <div class="cartBox">
                            <div class="order_content">
                            </div>
                        </div>
                        <!--底部-->
                        <div class="bar-wrapper">
                            <div class="bar-right">
                                <div class="piece">已选商品<strong class="piece_num">0</strong>件</div>
                                <div class="totalMoney">共计: <strong class="total_text">0.00</strong></div>
                                <div class="calBtn"><a >结算</a></div>
                            </div>
                        </div>
                    </section>

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
    <script src="./js/carts.js"></script>
    <script>
        $('.navicon').on('click', function (e) {
          e.preventDefault();
          $(this).toggleClass('navicon--active');
          $('.toggle').toggleClass('toggle--active');
        });

        window.onload = function(){
console.log(document.body.scrollHeight,window.innerHeight)
            var oFoot = document.getElementsByClassName('footer')[0];
            if(document.body.scrollHeight <= window.innerHeight){
                oFoot.style = "position:absolute;bottom:0;";
            }else{
                oFoot.style = "";
            }
        }
//获取到总价
        var oBtn = document.getElementsByClassName('calBtn')[0],
        oTT = document.getElementsByClassName('total_text')[0];
        var oOC = document.getElementsByClassName('order_content')[0];
        str = '';
        oBtn.children[0].addEventListener('click',function(){

            window.localStorage.setItem('total_money',oTT.innerText);

            var oM = oOC.getElementsByClassName('mark');
            for(i = 0;i < oM.length; i++){
                str += ""+(i+1)+ "、" + oM[i].parentNode.parentNode.children[1].children[1].firstChild.innerText+"\n";
                var xhr = new XMLHttpRequest();
                xhr.onload = function () {
                    if( xhr.readyState == 4 && xhr.status == 200 ){
                        console.log(xhr.responseText)

                    }
                }
                xhr.open('post','pay.php',true);
                xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                var data = "DelN="+oM[i].parentNode.parentNode.children[1].children[1].firstChild.innerText+"";
                xhr.send(data);
            }
            window.localStorage.setItem('total_goods',str);


        },false);



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
        $sql = "SELECT num,shopname, shopprice, shopcontent,shopImg FROM `$name`.`shopcar`";
        $result = @mysqli_query($conn, $sql);
        if (@mysqli_num_rows($result) > 0) {
            // 输出数据
            while($row = @mysqli_fetch_assoc($result)) {
                /*echo "name: " . $row["shopname"]. " - 价格: " . $row["foodprice"]. " -内容:" . $row["foodcontent"]."img: " . $row["foodImg"]."<br>";*/
                echo "<script> var Tr". $row['num']. " = \"<ul class='order_lists'> <li class='list_chk'> <input type='checkbox' id='checkbox_1". $row['num']. "' class='son_check'> <label for='checkbox_1". $row['num']. "'></label> </li> <li class='list_con'> <div class='list_img'><a href='javascript:;'><img src='" . $row["shopImg"]."' alt=''></a></div> <div class='list_text'><a href='javascript:;'>".$row["shopname"]."</a></div> </li> <li class='list_info'> <p>" . $row["shopcontent"]."</p> </li> <li class='list_price'> <p class='price'>￥" . $row["shopprice"]. "</p> </li> <li class='list_amount'> <div class='amount_box'> <a href='javascript:;' class='reduce reSty'>-</a> <input type='text' value='1' class='sum'> <a href='javascript:;' class='plus'>+</a> </div> </li> <li class='list_sum'> <p class='sum_price'>￥" . $row["shopprice"]. "</p> </li> <li class='list_op'> <p class='del'><a href='javascript:;' class='delBtn'>移除商品</a></p> </li> </ul>\";
                var oTbody = document.getElementsByClassName('order_content')[0];
                oTbody.innerHTML += Tr". $row['num']. "; </script>"; }
        } else {
            exit;
        }

    ?>
    <script>
        //删除商品-》数据库
        var oDel = document.getElementsByClassName('delBtn');
        for(i = 0;i<oDel.length;i++){
            oDel[i].addEventListener('click',function(){
                var oDelN = this.parentNode.parentNode.parentNode.children[1].children[1].firstChild.innerText.trim();
                var xhr = new XMLHttpRequest();
                xhr.onload = function () {
                    if( xhr.readyState == 4 && xhr.status == 200 ){
                        console.log(xhr.responseText)
                        window.location.reload();
                    }
                }
                xhr.open('post','shopping.php',true);
                xhr.setRequestHeader("Content-Type","application/x-www-form-urlencoded")
                var data = "DelN="+oDelN+"";
                xhr.send(data);

            },false)
        }
    </script>
</body>
</html>
