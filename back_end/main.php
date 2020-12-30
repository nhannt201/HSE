<?php class method {
	function curl_in($path) {
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_URL, $path);
		curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		$result = curl_exec($curl);
		curl_close($curl);
		return $result;
	}
	function red_kw($input) {
		return str_replace(" ","+",trim($input));
	}
	//Chotot Area
	function chotot_query($path) {
		$domResult = new simple_html_dom();
		$domResult->load($this->curl_in($path));
		$list_add = array();
		//$count = 0;
		foreach($domResult->find('li[class=wrapperAdItem___2woJ1]') as $list) //Lay duoc list
		foreach($list->find('a') as $element) {
				if (strpos($element->href, '/tp-ho-chi-minh/') !== false) { //Check KV HCM
					$pageResult = new simple_html_dom();
					$pageResult->load($this->curl_in("https://nha.chotot.com/".$element->href));
					array_push($list_add, array(
					"link" => $element->href,
					"desc" => $pageResult->find('h1[class=adTilte___3UqYW]', 0)->plaintext,
					"price" => $pageResult->find('span[itemprop=price]', 0)->plaintext
						)
					);
				}
		}
		 echo json_encode($list_add); //Cover to JSON
	}
	
}