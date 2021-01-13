<?php class method {
	function curl_in($path) {
		$curl = curl_init($path);
		$userAgent = 'Mozilla/5.0 (compatible; bingbot/2.0; +http://www.bing.com/bingbot.htm)';
		curl_setopt($curl, CURLOPT_URL, $path);
		curl_setopt($curl, CURLOPT_USERAGENT, $userAgent );
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}
	function red_kw($input) {
		return str_replace(" ","%20",trim($input));
	}

	//Chotot Area
	function chotot_query($path, $limit=15) { //MAc dinh tra ve 15kq
		$domResult = new simple_html_dom();
		$domResult->load($this->curl_in($path));
		$list_add = array();
		$count = 1;
		foreach($domResult->find('li[class=wrapperAdItem___2woJ1]') as $list) //Lay duoc list
		foreach($list->find('a') as $element) {
				//if (strpos($element->href, '/tp-ho-chi-minh/') !== false) { //Check KV HCM
					//$pageResult = new simple_html_dom();
					//$pageResult->load($this->curl_in("https://nha.chotot.com/".$element->href));
					//Dua vào trong mảng
					
						if (isset($list->find('h3[class=adTitle___3SoJh]', 0)->plaintext)) { //Cái nào lấy được TITLE mới trả về						
									if ($count <= $limit) {
										if (isset($element->href)) {
											array_push($list_add, array(
											"link" => 'https://nha.chotot.com'.$element->href,
											"title" => $list->find('h3[class=adTitle___3SoJh]', 0)->plaintext,
											//isset($list->find('h3[class=adTitle___3SoJh]', 0)->plaintext) ? $list->find('h3[class=adTitle___3SoJh]', 0)->plaintext : 'Không xác định', //$pageResult->find('h1[class=adTilte___3UqYW]', 0)->plaintext,
											"price" => $list->find('span[class=adPriceNormal___puYxd]', 0)->plaintext, //$pageResult->find('span[itemprop=price]', 0)->plaintext,
											"image" => $list->find('img', 0)->src,
											"district" => $list->find('span[class=item___eld8Q]', 1)->plaintext
												)
											);
											$count++;
										}		
										 
									} else {
										 break;
									}
								
						}
					
				//} //ket thuc cua ck KV HCM
		}
		//echo $list->find('span[class=adPriceNormal___puYxd]', 0)->plaintext;
		///var_dump($list);
		 echo json_encode($list_add); //Cover to JSON
	}
	
	//batdongsan Area
	function batdongsan_query($path, $limit=15) { //MAc dinh tra ve 15kq
		$domResult = new simple_html_dom();
		$domResult->load($this->curl_in($path));
		$list_add = array();
		$count = 1;
		foreach($domResult->find('div[class=vip5 product-item clearfix]') as $list)  //Lay duoc list
		foreach($list->find('a') as $element) {
			//echo 'https://batdongsan.com.vn/'.$element->href."<br>";
			/**foreach($element->find('img[class=product-avatar-img]') as $img) {
				echo $img->getAttribute('src-lazy'), "<br>";
			}**/
				if ($count <= $limit) {
					if (isset($element->href)) {
						array_push($list_add, array(
						"link" => 'https://batdongsan.com.vn'.$element->href,
						"title" => $list->find('h3[class=product-title]', 0)->plaintext,
						"price" => $list->find('span[class=price]', 0)->plaintext, //$pageResult->find('span[itemprop=price]', 0)->plaintext,
						"image" => $list->find('img[class=product-avatar-img]', 0)->getAttribute('src-lazy'),
						"district" => $list->find('span[class=location]', 0)->plaintext
								)
							);
						$count++;
										}
				} else {
					break;
				}
		}
		 echo json_encode($list_add); //Cover to JSON
	}
	
	//muaban.net Area
	function muaban_query($path, $limit=15) { //MAc dinh tra ve 15kq
		$domResult = new simple_html_dom();
		$domResult->load($this->curl_in($path));
		$list_add = array();
		$count = 1;
		foreach($domResult->find('div[class=list-item-container]') as $list)  //Lay duoc list
		
		foreach($list->find('a') as $element) {
				if ($count <= $limit) {
					if (isset($element->href)) {
						array_push($list_add, array(
						"link" => $element->href,
						"title" => $list->find('h2[class=list-item__title]', 0)->plaintext,
						"price" => $list->find('span[class=list-item__price]', 0)->plaintext,
						"image" => $list->find('img[class=list-item__image lozad]', 0)->getAttribute('data-src'),
						"district" => $list->find('span[class=list-item__location]', 0)->plaintext
								)
							);
						$count++;
						}
				} else {
					break;
				}
			//	var_dump($list);
		}
		
		 echo json_encode($list_add); //Cover to JSON
		// echo $domResult;
		
	}
	
	//Other api
	function convert_name($str) {
		$str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
		$str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
		$str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
		$str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
		$str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
		$str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
		$str = preg_replace("/(đ)/", 'd', $str);
		$str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
		$str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
		$str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
		$str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
		$str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
		$str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
		$str = preg_replace("/(Đ)/", 'D', $str);
		$str = preg_replace("/(\“|\”|\‘|\’|\,|\!|\&|\;|\@|\#|\%|\~|\`|\=|\_|\'|\]|\[|\}|\{|\)|\(|\+|\^)/", '-', $str);
		$str = preg_replace("/( )/", '-', $str);
		return $str;
	}
	
}