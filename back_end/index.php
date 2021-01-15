<?php
require_once('simple_html_dom.php');
require_once("main.php");
if (isset($_GET['q'])) {
	$method = new method();
	if (isset($_GET['type'])) {
		$type = trim($_GET['type']);
		switch($type) {
			case 0:
				/**$link_q = 'https://nha.chotot.com/tp-ho-chi-minh/thue-phong-tro?q='.urlencode($method->red_kw($_GET['q']));
				$method->chotot_query($link_q, 1);
				$link_q = 'https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tp-hcm?k='.urlencode($method->convert_name($_GET['q']));
				$method->batdongsan_query($link_q, 1);
				$link_q = 'https://muaban.net/cho-thue-nha-dat-ho-chi-minh-l59-c34?kw='.urlencode(($_GET['q'])).'&img=1';
				$method->muaban_query($link_q, 1);
				break;**/
			case 1:
				$link_q = 'https://nha.chotot.com/tp-ho-chi-minh/thue-phong-tro?q='.urlencode($method->red_kw($_GET['q']));
				$method->chotot_query($link_q, 10);
				break;
			case 2:
				$link_q = 'https://batdongsan.com.vn/cho-thue-nha-tro-phong-tro-tp-hcm?k='.urlencode($method->convert_name($_GET['q']));
				$method->batdongsan_query($link_q, 10);
				break;
			case 3:
				$link_q = 'https://muaban.net/cho-thue-nha-dat-ho-chi-minh-l59-c34?kw='.urlencode(($_GET['q'])).'&img=1';
				$method->muaban_query($link_q, 10);
				break;
			default;
		}
	}
	

} else { //Thêm bộ lọc vào sẽ lấy dữ liệu từ query và đưa qua trang đích để lấy kq tìm kiếm
	
}

/**
Dùng thư viện HTML_DOC để lấy một phần trong trang web chỉ định với các thông tin có sẵn như attribute, div, etc.
Theo như đã mò, mỗi trang tìm kiếm sẽ có phần dạng list để liệt kê kết quả, phần này sẽ dùng HTML_DOC để tách dữ liệu ra
References cách dùng: https://simplehtmldom.sourceforge.io/manual.htm
https://simplehtmldom.sourceforge.io/docs/1.9/manual/finding-html-elements/
**/
?>


