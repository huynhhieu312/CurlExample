<?php 
 function GuiSDT($sodienthoai = "0123456789",$url)
		{
			echo $url;
			echo $sodienthoai;
			$data = array(
				"sodienthoai"=> $sodienthoai,
				"btn_gui_sdt"=>true
			);
			$ch = curl_init($url); //tao connect voi cai url đó
			$postString = http_build_query($data, '', '&'); //chuyển từ array sang các phương thức field post 
			curl_setopt($ch, CURLOPT_POST, 1); //dùng phương thức post 
			curl_setopt($ch, CURLOPT_POSTFIELDS, $postString);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // setup nhận dữ liệu trả về
			$response = curl_exec($ch); // thực thi
			curl_close($ch); //đóng lại sau khi thực thi

			return $response;
		}
GuiSDT("0123456789","http://localhost/CurlExp/ajax.php");

		
	
?>