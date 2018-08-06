<?php
$q = $_GET["q"];



$con = mysqli_connect('localhost','zjwdb_6244433','Qwert123');
if (!$con)
{
    die('Could not connect: ' . mysqli_error($con));
}
// 选择数据库
// 设置编码，防止中文乱码
mysqli_set_charset($con, "utf8");


        $sql1 = "SELECT name FROM `users`.`login`";
        $result1 = @mysqli_query($con, $sql1);
        if (@mysqli_num_rows($result1) > 0) {
            // 输出数据
            while($rowname = @mysqli_fetch_assoc($result1)) {
                $sql="SELECT upfoodname,upfoodprice,upfoodcontent,upfoodImg FROM `".$rowname['name']."`.`upfood` ";

                $result = @mysqli_query($con,$sql);


                while($row = @mysqli_fetch_array($result))
                {
                    if(count(explode($q,$row['upfoodcontent']))>1){

                    echo "<div class='bd3 col-xs-4 agileits_w3layouts_gallery_grid1 hover14 column'><div class='w3_agile_gallery_effect'><a href='uploadfile/upload/". $row['upfoodImg']. "' class='sb' title='" . $row["upfoodname"]. "&nbsp;&gt;&nbsp;" . $row["upfoodprice"]. "&nbsp;&gt;&nbsp;" . $row["upfoodcontent"]."'><figure><img style='width:100%;height:196.5px' src='uploadfile/upload/". $row['upfoodImg']. "' alt=' ' class='img-responsive' /></figure></a><div style='width:100%;margin:0.5em 0;text-align:center;'>烹饪师：<a href='JavaScript:;' class='outerpepo' style='color:#F44336;font-size:25px;font-wight:bold;'>".$rowname['name']."</a></div><a href='javascript:;' class='button orange addcar'>加入购物车</a></div></div>";
                    }
                }
            }
        }

?>
