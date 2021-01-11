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
	padding-top: 5px;
	background-color: #fff;
	height: 50px;
}
body {
	padding-top: 25px;
}
.img_logo {
	margin-right: auto;
    margin-left: auto;
}
  </style>
</head>
<body>
<div class="border fixed-top search container">
	<form method="get" action="search" id="search_q" >
		<div class="form-group row">
			<div class="col-sm-4 pt-1"><a href="/"><img  class="img_logo" src="./images/logo.png" width="90px"/></a>
			 <div class="input-group-btn">
			  <button class="btn btn-default" type="submit">
				<i class="glyphicon glyphicon-search"></i>
			  </button>
			</div>
			</div>
			<div class="col-sm-8 ">
				<input id="search" class="form-control" name="q" type="text" value="<?php echo $_GET['q']; ?>" placeholder="Bạn muốn tìm phòng trọ ở đâu?" >
				  <div class="input-group-btn">
				  <button class="btn btn-default" type="submit">
					<i class="glyphicon glyphicon-search"></i>
				  </button>
				</div>
			</div>
		</div>
	</form>
</div>
<div class="container pt-1 my-1">

 <div class="row">
  <div class="col-4 my-3 pt-1 border">
  <!--NC-->

        <!-- Search Widget - Cần thêm tuỳ chọn quận để tìm kiếm chính xác hơn-->


        <!-- Categories Widget -->
    <div class="mb-5">   

        <h2 class="grid-title"><i class="fa fa-filter"></i> Bộ lọc</h2>
        <!-- END SEARCH INPUT -->
        <hr>
        <!-- BEGIN FILTER BY SERVICE -->
        <h5>Loại chỗ ở</h5>
        <div class="checkbox">
            <label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="0"> Ký túc xá</label>
        </div>
        <div class="checkbox">
            <label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="1"> Phòng trọ</label>
        </div>
        <div class="checkbox">
            <label><input name="hp-advanced-search-room-type" type="checkbox" class="icheck" value="2"> Căn hộ dịch vụ</label>
        </div>
        <!-- END FILTER BY SERVICE -->
        <hr>
        <!-- BEGIN FILTER BY AREA -->
        <h5>Chọn theo khu vực</h5>
        <select class="form-control" id="sl-province" name="sl-province">
            <option value="" selected="">Tỉnh/Thành phố</option>
            <option value="79">Thành phố Hồ Chí Minh</option>
        </select>
        <select class="form-control ml-0 my-2" id="sl-district" name="sl-district">
            <option value="" selected="">Quận/Huyện</option>
            <option class="" value="760">Quận 1</option>
            <option class="" value="761">Quận 12</option>
            <option class="" value="762">Quận Thủ Đức</option>
            <option class="" value="763">Quận 9</option>
            <option class="" value="764">Quận Gò Vấp</option>
            <option class="" value="765">Quận Bình Thạnh</option>
            <option class="" value="766">Quận Tân Bình</option>
            <option class="" value="767">Quận Tân Phú</option>
            <option class="" value="768">Quận Phú Nhuận</option>
            <option class="" value="769">Quận 2</option>
            <option class="" value="770">Quận 3</option>
            <option class="" value="771">Quận 10</option>
            <option class="" value="772">Quận 11</option>
            <option class="" value="773">Quận 4</option>
            <option class="" value="774">Quận 5</option>
            <option class="" value="775">Quận 6</option>
            <option class="" value="776">Quận 8</option>
            <option class="" value="777">Quận Bình Tân</option>
            <option class="" value="778">Quận 7</option>
            <option class="" value="783">Huyện Củ Chi</option>
            <option class="" value="784">Huyện Hóc Môn</option>
            <option class="" value="785">Huyện Bình Chánh</option>
            <option class="" value="786">Huyện Nhà Bè</option>
            <option class="" value="787">Huyện Cần Giờ</option>
        </select>
  <!--END_NC-->
  </div> </div>
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