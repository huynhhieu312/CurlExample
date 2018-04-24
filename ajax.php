<?php

if(isset($_POST["sodienthoai"])){
$sdt = $_POST["sodienthoai"];
$conn = mysql_connect("localhost","root","");
mysql_select_db("admin_curlsdt", $conn);
mysql_query("set names 'utf8'");
$sql="INSERT INTO `sodienthoai`(sodienthoai ,Status) VALUES ('$sdt',1)";
mysql_query($sql,$conn);
echo "<script>alert('Số điện thoại ".$_POST['sdt']." của bạn đã được gửi đến chúng tôi. Chúng tôi sẽ gọi lại cho bạn trong thời gian sớm nhất!' );</script>";
}
else{
	echo "không chơi ngu dưới mọi hình thức";
}
?>