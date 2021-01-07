<!DOCTYPE html>
<html lang="vi">
<head>
  <title><?php echo $_GET['q']." - Tìm với Nhà ngay"; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <style>
  .img-fluid {
      position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
  }
.search {
	padding-left: 250px;
	padding-top: 15px;
	background-color: #fff;
	height: 50px;
	float: left;
}
.main_title {
	float: left;
	
}
body {
	padding-top: 25px;
}
  </style>
</head>
<body>
<div class="border fixed-top search">
	<form method="get" action="search" id="search_q" >
		<img src="./images/logo.png" width="90px"/>
		<input id="search" name="q" type="text" value="<?php echo $_GET['q']; ?>" placeholder="Bạn muốn tìm phòng trọ ở đâu?" >
	</form>
</div>
<div class="container pt-3 my-3">

 <div class="row">
  <div class="col-4 my-3 border">Tuỳ chọn nâng cao</div>
  <div class="col-8 my-3 border">
  <div id="result" class="pt-3">
  </div>
  </div>
</div>
</div>
<script type="text/javascript">
	setTimeout(function(){ clickSearch(); }, 1);

		function clickSearch() {
			var get_keyword = "<?=$_GET['q'] ?>";
			document.getElementById("result").innerHTML = "<div class='row text-center'>Kết quả tìm kiếm cho '"+get_keyword+"'...</div>";
			readTextFile("/back_end/?q=" + get_keyword, function(text){
			var data = JSON.parse(text); //Lấ kết quả search JSON
			//console.log(data);
			document.getElementById("result").innerHTML = '<div class="alert alert-success">\
  <strong>Đã tìm thấy ' + data.length + ' kết quả!!</strong>\
</div>';
			data.forEach(printResult); //Đưa vào vòng lặp và in ra
			
		});
		}
		//Print result
		function printResult(item, index) {
		 // document.getElementById("demo").innerHTML += index + ":" + item + "<br>"; 
		  document.getElementById("result").innerHTML +=  '<!--Block-->'+
'        <div class="row">'+
'            <div class="col-lg-4 mt-4">'+
'                <img class="img-fluid rounded" src="' +item['image']+ '" alt="' +item['title']+ '">'+
'            </div>'+
'            <div class="col-lg-7 mt-4">'+
'                <div>'+
'                  '+
'                  <div class="card-body">'+
'                    <h4 class="card-title">' +item['title']+ '</h4>'+
'					<p class="lead">' +item['district']+ '</p>'+
'                    <p class="card-text">' +item['price']+ '</p>'+
'					<a href="'+item['link']+'" target="_blank" class="btn btn-primary float-right">Xem chi tiết</a>' +
'                  </div>'+
'				'+
'               '+
'            </div>'+
'        </div>'+
'      </div>'+
'      <hr>  <!--End block-->';
		}
		//read json
		function readTextFile(file, callback) {
			var rawFile = new XMLHttpRequest();
			rawFile.overrideMimeType("application/json");
			rawFile.open("GET", file, true);
			rawFile.onreadystatechange = function() {
				if (rawFile.readyState === 4 && rawFile.status == "200") {
					callback(rawFile.responseText);
				}
			}
			rawFile.send(null);
		}

		//usage:
		
	</script>
</body>
</html>