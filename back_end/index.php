
<?php

include('simple_html_dom.php');

$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, 'https://nha.chotot.com/toan-quoc/thue-bat-dong-san?q=binh%20thanh&price=0-5500000');
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
$result = curl_exec($curl);
curl_close($curl);
//echo $result;

$domResult = new simple_html_dom();
$domResult->load($result);

foreach($domResult->find('li[class=wrapperAdItem___2woJ1]') as $list) //Lay duoc list
foreach($list->find('a') as $element)
       echo $element->href . '<br>';

/**
Dùng thư viện HTML_DOC để lấy một phần trong trang web chỉ định với các thông tin có sẵn như attribute, div, etc.
Theo như đã mò, mỗi trang tìm kiếm sẽ có phần dạng list để liệt kê kết quả, phần này sẽ dùng HTML_DOC để tách dữ liệu ra
References cách dùng: https://simplehtmldom.sourceforge.io/manual.htm
**/
?>


