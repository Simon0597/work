<?php

// 创建连接
$conn=mysqli_connect("localhost","zjwdb_6244433","Qwert123")or die("数据库连接失败");
// Check connection
if (!$conn) {
    die("连接失败: " . mysqli_connect_error());
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>叮咚烹饪师</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
<link href="css/font-awesome.css" rel="stylesheet"> <!-- font-awesome icons -->
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />  <!-- time-picker-CSS -->
<!-- //Custom Theme files -->
<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!-- web-fonts -->
<link href="http://fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700" rel="stylesheet">
<link href="http://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i" rel="stylesheet">
<link rel="stylesheet" href="css/swiper.css">
<link rel="stylesheet" href="css/swiper.min.css">
<!-- //web-fonts -->
<style>
	.swiper-container .swiper-wrapper .swiper-slide{
		border:2px solid #fff;
	}
</style>
</head>
<body>
	<!-- banner -->
	<div class="banner jarallax">
		<!-- header -->
		<div class="header">
			<div class="container">
				<div class="logo">
					<a href="index.php"><img src="images/logo.png" alt="叮咚"></a>
				</div>
				<div class="menu">
					<a href="#" class="navicon"></a>
					<div class="toggle">
						<ul class="toggle-menu">
							<li><a href="index.php" class="active"> 主页</a></li>
							<li><a href="about.html"> 关于我们</a></li>
							<li><a href="contact.html"> 咨询我们</a></li>
							<li><a href="center.html"> 个人中心</a></li>
							<li><a href="login.html"> 登录</a></li>
						</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- //header -->
		<!-- banner-text -->
		<div class="banner-text">
			<div class="container">
				<div class="banner-w3lstext">
					<h2>Welcome<span>Culinary Master</span></h2>
					<p>爱烹饪，也爱分享</p>
				</div>
			</div>
		</div>
		<!-- //banner-text -->
	</div>
	<!-- //banner -->
	<!-- welcome -->
	<div class="welcome">
		<div class="container">
			<div class="col-md-12 welcome-grid-left">
				<div style="display:inline-block;width:367px;height:60px;background: url(images/sign.png) -2px -19px no-repeat;"></div>
				<div style="display:inline-block;width:367px;height:60px;background: url(images/sign.png) -86px -79px no-repeat;"></div>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;烹享家汇集美食文化与大众需求，致力于为顾客提供优质、便捷的服务以及分享平台。在这里，可以找到适合您的烹饪者在特殊场合为您定制美食，也可以找到相应的客户施展您的厨艺。这里有更广阔的美食天地，可以和大家一起进行美食交流，可以晒美食、可以记录生活，为生活带来便利的同时，也为生活增添互动与乐趣。</p>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //welcome -->
	<!-- about -->
	<div class="about">
		<div class="container">
			<div class="services-row-agileinfo">
				<a href="login.html" class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-fire hi-icon" aria-hidden="true"></span>
					<h5 style="font-weight: bold;">我要烹饪</h5>
					<p>制作自己的完美烹饪</p>
				</a>
				<a href="login.html" class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-share hi-icon" aria-hidden="true"></span>
					<h5 style="font-weight: bold;">我要分享</h5>
					<p>分享自己的有趣烹饪</p>
				</a>
				<a href="login.html" class="col-sm-4 col-xs-4 services-w3grid">
					<span class="glyphicon glyphicon-scissors hi-icon" aria-hidden="true"></span>
					<h5 style="font-weight: bold;">我要定制</h5>
					<p>定制自己的专属烹饪</p>
				</a>
				<div class="clearfix"> </div>
			</div>
		 </div>
	</div>
	<!-- //about -->
	<!-- specials -->
	<div class="specials">
		<!-- Owl-Carousel -->
		<div id="owl-demo" class="owl-carousel text-center">
		</div>
		<!-- //Owl-Carousel -->
	</div>
	<!-- //specials -->

	<div class="swiper-container" style="margin-top: 1.5em;">
	  <div class="swiper-wrapper">
	  	<!-- <div class="swiper-slide">
	  				<img class="lazyOwl" src="images/g1.jpg" alt="Veg Mores">
	  				<div class="agile-caption">
	  					<h4>美食名称<span> 价格</span></h4>
	  					<h5><a href="#">作者</a></h5>
	  					<span>美食主要介绍摘要</span>
	  				</div>
	  		    </div> -->
	  </div>
	</div>
	<!-- menu-form -->
	<div class="menu-form">
		<div class="container">
			<div class="w3ls-title">
				<h3 class="agileits-title">我们的服务</h3>
			</div>
			<div class="menu-info" style="text-align: center;">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#expeditions" id="expeditions-tab" role="tab" data-toggle="tab" aria-controls="expeditions" aria-expanded="true" style="font-weight: bold;">烹饪者主页</a></li>
						<li role="presentation"><a href="#tours" role="tab" id="tours-tab" data-toggle="tab" aria-controls="tours" style="font-weight: bold;">客户主页</a></li>
						<li role="presentation"><a href="#tree" role="tab" id="tree-tab" data-toggle="tab" aria-controls="tree"style="font-weight: bold;">美食分类</a></li>
						<li role="presentation"><a href="#four" role="tab" id="four-tab" data-toggle="tab" aria-controls="four"style="font-weight: bold;">购物车</a></li>
						<li role="presentation"><a href="#five" role="tab" id="five-tab" data-toggle="tab" aria-controls="five" style="font-weight: bold;">订单</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="expeditions" aria-labelledby="expeditions-tab">
							<div class="tab-info">
								<div class="col-md-12 col-xs-12 menu-w3tabs-left">
									<div class="menu-grids agile" style="display: inline-block;margin: 0 auto;">
										<div class="menu-left" style="width: auto;">
											<h4 >烹饪师主页</h4>
											<p >烹饪师的主页 </p>
										</div>
										<a href="login.html" class="menu-right"  style="margin-left: 1em;">
											<h5><span class="glyphicon glyphicon-share-alt hi-icon" aria-hidden="true"></span></h5>
										</a>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tours" aria-labelledby="tours-tab">
							<div class="tab-info">
								<div class="col-md-12 col-xs-12 menu-w3tabs-left">
									<div class="menu-grids agile" style="display: inline-block;margin: 0 auto;">
										<div class="menu-left" style="width: auto;">
											<h4>客户主页</h4>
											<p>用户的主页</p>
										</div>

										<a href="center.html" class="menu-right"  style="margin-left: 1em;">
											<h5><span class="glyphicon glyphicon-share-alt hi-icon" aria-hidden="true"></span></h5>
										</a>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="tree" aria-labelledby="tree-tab">
							<div class="tab-info">
								<div class="col-md-12 col-xs-12 menu-w3tabs-left">
									<div class="menu-grids agile" style="display: inline-block;margin: 0 auto;">
										<div class="menu-left" style="width: auto;">
											<h4>美食分类</h4>
											<p>可筛选搜索您想要的美食 </p>
										</div>

										<a href="login.html" class="menu-right"  style="margin-left: 1em;">
											<h5><span class="glyphicon glyphicon-share-alt hi-icon" aria-hidden="true"></span></h5>
										</a>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="four" aria-labelledby="four-tab">
							<div class="tab-info">
								<div class="col-md-12 col-xs-12 menu-w3tabs-left">
									<div class="menu-grids agile" style="display: inline-block;margin: 0 auto;">
										<div class="menu-left" style="width: auto;">
											<h4>购物车</h4>
											<p>查看您加入购物车的美食</p>
										</div>

										<a href="login.html" class="menu-right"  style="margin-left: 1em;">
											<h5><span class="glyphicon glyphicon-share-alt hi-icon" aria-hidden="true"></span></h5>
										</a>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
						<div role="tabpanel" class="tab-pane fade" id="five" aria-labelledby="five-tab">
							<div class="tab-info">
								<div class="col-md-12 col-xs-12 menu-w3tabs-left">
									<div class="menu-grids agile" style="display: inline-block;margin: 0 auto;">
										<div class="menu-left" style="width: auto;">
											<h4>订单情况</h4>
											<p>查看您所有订单</p>
										</div>

										<a href="login.html" class="menu-right" style="margin-left: 1em;">
											<h5><span class="glyphicon glyphicon-share-alt hi-icon" aria-hidden="true"></span></h5>
										</a>
										<div class="clearfix"> </div>
									</div>
								</div>
								<div class="clearfix"> </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //menu-form -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="col-md-12 col-sm-12 agileinfo_footer_grid" style="padding: 0;">
                <h3 class="agileits-title" style="display:block;margin: 0.5em auto;"><a href="center-1.html">留言联系我们</a></h3>
                <ul style="text-align: center;">
                    <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (0123) 0111 111 222</li>

                </ul>
            </div>
			<div class="w3agile_footer_copy">
				<p>Copyright &copy; 2018.叮咚烹饪师 All rights reserved .</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- Owl-Carousel-JavaScript -->
	<script src="js/owl.carousel.js"></script>
	<script src="js/swiper.js"></script>
	<script src="js/swiper.min.js"></script>
	<script>


		window.onload = function(){
			var mySwiper = new Swiper('.swiper-container', {
			autoplay:{
                    disableOnInteraction: false,
                  },//可选选项，自动滑动
			slidesPerView : 4,
		})

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
	<script>
		$(document).ready(function() {
			$("#owl-demo").owlCarousel ({
				items : 3,
				lazyLoad : true,
				autoPlay : true,
				pagination : false,
				loop : true,
			});
		});

	</script>
	<!-- //Owl-Carousel-JavaScript -->
	<!-- menu-js -->
	<script>
		$('.navicon').on('click', function (e) {
		  e.preventDefault();
		  $(this).toggleClass('navicon--active');
		  $('.toggle').toggleClass('toggle--active');
		});
	</script>
	<!-- //menu-js -->
	<!-- Progressive-Effects-Animation-JavaScript -->
	<script type="text/javascript" src="js/numscroller-1.0.js"></script>
	<!-- //Progressive-Effects-Animation-JavaScript -->
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
                                    var Tr". $row['num']. " = \"<div class='item g1 popup-with-zoom-anim'> <img class='lazyOwl' src='uploadfile/upload/". $row['foodImg']. "' alt='Veg Mores' style='height:323px'> <div class='agile-caption'> <h4>" . $row["foodname"]. "<span> ￥" . $row["foodprice"]. "</span></h4> <h3><a href='#' class='outerpepo'>".$rowname['name']."</a></h3> <span>" . $row["foodcontent"]."</span> </div> </div>\"; var oTbody = document.getElementsByClassName('owl-carousel')[0];
                                    oTbody.innerHTML += Tr". $row['num']. ";

                                    var Tr". $row['num']. " = \"<div class='swiper-slide'> <img class='lazyOwl' src='uploadfile/upload/". $row['foodImg']. "' alt='Veg Mores'style='height:323px'> <div class='agile-caption'> <h4>" . $row["foodname"]. "<span> ￥" . $row["foodprice"]. "</span></h4> <h5><a href='#'class='outerpepo'>".$rowname['name']."</a></h5> <span>" . $row["foodcontent"]."</span> </div> </div>\"; var oTbody = document.getElementsByClassName('swiper-wrapper')[0]; oTbody.innerHTML += Tr". $row['num']. ";

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
                                    var Tr". $row['num']. " = \"<div class='item g1 popup-with-zoom-anim'> <img class='lazyOwl' src='uploadfile/upload/". $row['upfoodImg']. "' alt='Veg Mores' style='height:323px'> <div class='agile-caption'> <h4>" . $row["upfoodname"]. "<span> " . $row["upfoodprice"]. "</span></h4> <h3><a href='#' class='outerpepo'>".$rowname['name']."</a></h3> <span>" . $row["upfoodcontent"]."</span> </div> </div>\";
                                    var oTbody = document.getElementsByClassName('owl-carousel')[0];
                                    oTbody.innerHTML += Tr". $row['num']. ";

                                    var Tr". $row['num']. " = \"<div class='swiper-slide'> <img class='lazyOwl' src='uploadfile/upload/". $row['upfoodImg']. "' alt='Veg Mores' style='height:323px'> <div class='agile-caption'> <h4>" . $row["upfoodname"]. "<span> ￥" . $row["upfoodprice"]. "</span></h4> <h5><a href='#'class='outerpepo'>".$rowname['name']."</a></h5> <span>" . $row["upfoodcontent"]."</span> </div> </div>\"; var oTbody = document.getElementsByClassName('swiper-wrapper')[0]; oTbody.innerHTML += Tr". $row['num']. ";

                                </script>";
                            }
                        }
            }
        }
        mysqli_close($conn);
    ?>
</body>
</html>
