<?php
require_once('simple_html_dom.php');
require_once("main.php");
if (isset($_GET['q'])) {
	$method = new method();
	$link_q = 'https://nha.chotot.com/tp-ho-chi-minh/thue-phong-tro?q='.urlencode($method->red_kw($_GET['q']));
	$method->chotot_query($link_q, 5);
} else {
	
}

/**
Dùng thư viện HTML_DOC để lấy một phần trong trang web chỉ định với các thông tin có sẵn như attribute, div, etc.
Theo như đã mò, mỗi trang tìm kiếm sẽ có phần dạng list để liệt kê kết quả, phần này sẽ dùng HTML_DOC để tách dữ liệu ra
References cách dùng: https://simplehtmldom.sourceforge.io/manual.htm
https://simplehtmldom.sourceforge.io/docs/1.9/manual/finding-html-elements/
**/
?>


